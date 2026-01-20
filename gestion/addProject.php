<?php 
    require_once (__DIR__ . "/../config/config.php");
    require_once (__DIR__ . "/../config/variables.php");
?>

<?php 
    if (isset($_POST['name']) 
        && isset($_POST['url']) 
        && $_FILES['file'] 
        && $_FILES['file']['error'] === 0
        && isset($_POST['description'])
        && isset($_POST['language'])) {
            if ($_FILES['file']['size'] > 4000000) {
                $_SESSION['ERROR'] = "taille invalide";
                header("location: ../admin.php");
                return;
            }

            $path = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

            $uploads_dir = '../update';
            $name = uniqid() . "." . $path;
            $_SESSION['file'] = $name;
            $tmp_name = $_FILES["file"]["tmp_name"];

            move_uploaded_file($tmp_name, "$uploads_dir/$name");

            $projectStatement = $mysqlClient -> prepare('INSERT INTO project (name, url, description, language, img, file_version) VALUES (:name, :url, :description, :language, :img, :file_version)');
            $projectStatement -> execute([
                'name' => $_POST['name'],
                'url' => $_POST['url'],
                'description' => $_POST['description'],
                'language' => $_POST['language'],
                'img' => $_SESSION['file'],
                'file_version' => 1
            ]);

            $id_nouveau = $mysqlClient->lastInsertId();

            $projectDetailStatement = $mysqlClient -> prepare('INSERT INTO projectDetail (project_id, name, file_version) VALUES (:id, :name, :file_version)');
            $projectDetailStatement -> execute([
                'id' => $id_nouveau,
                'name' => $_POST['name'],
                'file_version' => 1
            ]);

            header('location: ../admin.php');
        }
?>