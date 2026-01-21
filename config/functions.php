<?php 
    function comparison ($project) {
        return isset($_GET["id"]) && $_GET["id"] == $project["id"];
    }

    function verifBack () {
        return isset($_GET["update"]) || isset($_GET["addCategorie"]) || isset($_GET["updateCategorie"]) || isset($_GET["addProject"]);
    } 

    function verifSave () {
        return isset($_GET["addCategorie"]) || isset($_GET["updateCategorie"]);
    }

    function verifCategories ($categorieId) {
        return isset($_GET['updateCategorie']) && isset($_GET['id']) && $_GET['id'] == $categorieId;
    }

    function detailUpdate ($AdminProjectsDetail) {
        return isset($_GET['id']) && $_GET['id'] == $AdminProjectsDetail['id'];
    }

    function updateDetailActif () {
        return isset($_GET['updateProjectDetail']);
    }

    function uploadImg ($selectProjectDetail, $capture, $captureDefault) {
        if ($_FILES[$capture]['error'] === 0) {
            if ($_FILES[$capture]['size'] > 4000000) {
                $_SESSION['ERROR'] = "taille invalide";
                header("location: ../AdminProjectDetail.php");
                return;
            }

            $path = pathinfo($_FILES[$capture]["name"], PATHINFO_EXTENSION);

            $uploads_dir = '../update';

            if ($selectProjectDetail[$capture]) {
                $pathToUnlink = $selectProjectDetail[$capture];

                $pathToDestroy = "../update/$pathToUnlink";

                unlink($pathToDestroy);
            }

            $name = uniqid() . "." . $path;
            $_SESSION[$capture] = $name;
            $tmp_name = $_FILES[$capture]["tmp_name"];

            move_uploaded_file($tmp_name, "$uploads_dir/$name");
        } else {
            $_SESSION[$capture] = $_POST[$captureDefault];
        }
    }
?>