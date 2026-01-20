<<<<<<< HEAD
<?php 
    session_start();
    require_once(__DIR__ . "/../config/config.php");
    require_once(__DIR__ . "/../config/variables.php");
?>

<?php 
    if (!isset($_POST['id'])) {
        $_SESSION["ERRORUPDATE"] = "Une erreur est survenue ! Veuillez réessayé";
        header("location: ../admin.php");
        return;
    }

    if (isset($_POST['name']) 
        && isset($_POST['url']) 
        && isset($_POST['description']) 
        && isset($_POST['language']) 
        && isset($_FILES['file'])
        && isset($_POST['file_default'])) {
            if ($_FILES['file']['error'] === 0) {
                if ($_FILES['file']['size'] > 4000000) {
                    $_SESSION['ERROR'] = "taille invalide";
                    header("location: ../admin.php");
                    return;
                }

                $path = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

                $selectProjectDetailStatement = $mysqlClient -> prepare("SELECT * FROM project WHERE id = :id");
                $selectProjectDetailStatement -> execute([
                    'id' => $_POST['id']
                ]);
                $selectProjectDetail = $selectProjectDetailStatement -> fetch();

                $pathToUnlink = $selectProjectDetail['img'];

                $pathToDestroy = "../update/$pathToUnlink";

                unlink($pathToDestroy);

                $uploads_dir = '../update';
                $name = uniqid() . "." . $path;
                $_SESSION['file'] = $name;
                $tmp_name = $_FILES["file"]["tmp_name"];

                move_uploaded_file($tmp_name, "$uploads_dir/$name");
            } else {
                $_SESSION['file'] = $_POST['file_default'];
            }

            $projectStatement = $mysqlClient -> prepare('UPDATE project SET name = :name, url = :url, description = :description, language = :language, img = :img, file_version = file_version + 1 WHERE id = :id');
            $projectStatement -> execute([
                'name' => $_POST['name'],
                'url' => $_POST['url'],
                'description' => $_POST['description'],
                'language' => $_POST['language'],
                'img' => $_SESSION['file'],
                'id' => $_POST['id']
            ]);

            $projectDetailStatement = $mysqlClient -> prepare('UPDATE projectdetail SET name = :name WHERE id = :id');
            $projectDetailStatement -> execute([
                'name' => $_POST['name'],
                'id' => $_POST['id']
            ]);

            header("location: ../admin.php");
        }
=======
<?php 
    session_start();
    require_once(__DIR__ . "/../config/config.php");
    require_once(__DIR__ . "/../config/variables.php");
?>

<?php 
    if (!isset($_POST['id'])) {
        $_SESSION["ERRORUPDATE"] = "Une erreur est survenue ! Veuillez réessayé";
        header("location: ../admin.php");
        return;
    }

    if (isset($_POST['name']) 
        && isset($_POST['url']) 
        && isset($_POST['description']) 
        && isset($_POST['language']) 
        && isset($_FILES['file'])
        && isset($_POST['file_default'])) {
            if ($_FILES['file']['error'] === 0) {
                if ($_FILES['file']['size'] > 4000000) {
                    $_SESSION['ERROR'] = "taille invalide";
                    header("location: ../admin.php");
                    return;
                }

                $path = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

                $selectProjectDetailStatement = $mysqlClient -> prepare("SELECT * FROM project WHERE id = :id");
                $selectProjectDetailStatement -> execute([
                    'id' => $_POST['id']
                ]);
                $selectProjectDetail = $selectProjectDetailStatement -> fetch();

                $pathToUnlink = $selectProjectDetail['img'];

                $pathToDestroy = "../update/$pathToUnlink";

                unlink($pathToDestroy);

                $uploads_dir = '../update';
                $name = uniqid() . "." . $path;
                $_SESSION['file'] = $name;
                $tmp_name = $_FILES["file"]["tmp_name"];

                move_uploaded_file($tmp_name, "$uploads_dir/$name");
            } else {
                $_SESSION['file'] = $_POST['file_default'];
            }

            $projectStatement = $mysqlClient -> prepare('UPDATE project SET name = :name, url = :url, description = :description, language = :language, img = :img, file_version = file_version + 1 WHERE id = :id');
            $projectStatement -> execute([
                'name' => $_POST['name'],
                'url' => $_POST['url'],
                'description' => $_POST['description'],
                'language' => $_POST['language'],
                'img' => $_SESSION['file'],
                'id' => $_POST['id']
            ]);

            $projectDetailStatement = $mysqlClient -> prepare('UPDATE projectdetail SET name = :name WHERE project_id = :id');
            $projectDetailStatement -> execute([
                'name' => $_POST['name'],
                'id' => $_POST['id']
            ]);

            header("location: ../admin.php");
        }
>>>>>>> master
?>