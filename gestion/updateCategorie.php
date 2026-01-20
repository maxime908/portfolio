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

    if (isset($_POST['categorie'])) {
        $categorie = $_POST['categorie'];

        if (empty($categorie)) {
            $_SESSION['ERROR'] = "Le champ ne peux pas être vide !";
            header('location: ../admin.php');
            return;
        }

        $categorieStatement = $mysqlClient -> prepare('UPDATE categories SET categorie = :categorie WHERE id = :id');
        $categorieStatement -> execute([
            'categorie' => $categorie,
            'id' => $_POST['id']
        ]);

        header('location: ../admin.php');        
    }
?>