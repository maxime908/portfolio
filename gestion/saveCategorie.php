<?php 
    session_start();
    require_once(__DIR__ . "/../config/config.php");
?>

<?php
    if (isset($_POST['categorie']) && isset($_POST['enum'])) {
        $categorie = $_POST['categorie'];
        $enum = $_POST['enum'];

        if (empty($categorie)) {
            $_SESSION['ERROR'] = "Le champ ne peux pas être vide !";
            header("location: ../admin.php");
            return;
        }

        $categorieStatement = $mysqlClient -> prepare("INSERT INTO categories (categorie, stacks_cat) VALUES (:categorie, :enum)");
        $categorieStatement -> execute([
            'categorie' => $categorie,
            'enum' => $enum,
        ]);

        header('location: ../admin.php');
    }
?>