<<<<<<< HEAD
<?php 
    session_start();
    require_once(__DIR__ . "/../config/config.php");
?>

<?php
    if (isset($_POST['categorie'])) {
        $categorie = $_POST['categorie'];

        if (empty($categorie)) {
            $_SESSION['ERROR'] = "Le champ ne peux pas être vide !";
            header("location: ../admin.php");
            return;
        }

        $categorieStatement = $mysqlClient -> prepare("INSERT INTO categories (categorie) VALUES (:categorie)");
        $categorieStatement -> execute([
            'categorie' => $categorie
        ]);

        header('location: ../admin.php');
    }
=======
<?php 
    session_start();
    require_once(__DIR__ . "/../config/config.php");
?>

<?php
    if (isset($_POST['categorie'])) {
        $categorie = $_POST['categorie'];

        if (empty($categorie)) {
            $_SESSION['ERROR'] = "Le champ ne peux pas être vide !";
            header("location: ../admin.php");
            return;
        }

        $categorieStatement = $mysqlClient -> prepare("INSERT INTO categories (categorie) VALUES (:categorie)");
        $categorieStatement -> execute([
            'categorie' => $categorie
        ]);

        header('location: ../admin.php');
    }
>>>>>>> master
?>