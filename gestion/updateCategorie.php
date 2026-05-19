<?php
    session_start();
    require_once(__DIR__ . "/../config/config.php");
?>

<?php 
    if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
        $_SESSION['ERROR'] = 'Une erreur est survenue, veuillez réessayer !';
        header('location: ../admin.php');
        return;
    }

    if (isset($_POST['categorie']) && isset($_POST['enum'])) {
        $categorie = $_POST['categorie'];
        $enum = $_POST['enum'];

        if (empty($categorie)) {
            $_SESSION['ERROR'] = "Le champ ne peux pas être vide !";
            header('location: ../admin.php');
            return;
        }

        $categorieStatement = $mysqlClient -> prepare('UPDATE categories SET categorie = :categorie, stacks_cat = :enum WHERE id = :id');
        $categorieStatement -> execute([
            'categorie' => $categorie,
            'enum' => $enum,
            'id' => $_POST['id']
        ]);

        header('location: ../admin.php');        
    }
?>