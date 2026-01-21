<?php 
    session_start();
    require_once(__DIR__ . "/../config/config.php");
    require_once(__DIR__ . "/../config/variables.php");
    require_once(__DIR__ . "/../config/functions.php");
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

            $selectProjectDetailStatement = $mysqlClient -> prepare("SELECT * FROM project WHERE id = :id");
            $selectProjectDetailStatement -> execute([
                'id' => $_POST['id']
            ]);
            $selectProjectDetail = $selectProjectDetailStatement -> fetch();

            uploadImg($selectProjectDetail, 'file', 'file_default');

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
?>