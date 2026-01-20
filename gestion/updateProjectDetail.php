<?php 
    session_start();
    require_once(__DIR__ . "/../config/config.php");
    require_once(__DIR__ . "/../config/variables.php");
?>

<?php 
    if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
        $_SESSION['ERROR'] = 'Une erreur est survenue, veuillez réessayer !';
        header('location: ../AdminProjectDetail.php');
        return;
    }

    if (isset($_FILES['capture1'])
        && isset($_FILES['capture2']) 
        && isset($_POST['capture1_default']) 
        && isset($_POST['situation'])
        && isset($_POST['tache'])
        && isset($_POST['action'])
        && isset($_POST['resultat'])
        && isset($_POST['capture2_default'])) {

            $capture = ["capture1", "capture2"];
            $captureDefault = ["capture1_default", "capture2_default"];

            for ($i = 0; $i < count($capture); $i++) {
                if ($_FILES[$capture[$i]]['error'] === 0) {
                    if ($_FILES[$capture[$i]]['size'] > 4000000) {
                        $_SESSION['ERROR'] = "taille invalide";
                        header("location: ../AdminProjectDetail.php");
                        return;
                    }

                    $path = pathinfo($_FILES[$capture[$i]]["name"], PATHINFO_EXTENSION);

                    $uploads_dir = '../update';

                    $selectProjectDetailStatement = $mysqlClient -> prepare("SELECT * FROM projectdetail WHERE id = :id");
                    $selectProjectDetailStatement -> execute([
                        'id' => $_POST['id']
                    ]);
                    $selectProjectDetail = $selectProjectDetailStatement -> fetch();

                    $pathToUnlink = $selectProjectDetail[$capture[$i]];

                    $pathToDestroy = "../update/$pathToUnlink";

                    unlink($pathToDestroy);

                    $name = uniqid() . "." . $path;
                    $_SESSION[$capture[$i]] = $name;
                    $tmp_name = $_FILES[$capture[$i]]["tmp_name"];

                    move_uploaded_file($tmp_name, "$uploads_dir/$name");
                } else {
                    $_SESSION[$capture[$i]] = $_POST[$captureDefault[$i]];
                }
            }

            $updateDetailStatement = $mysqlClient -> prepare("UPDATE projectdetail SET capture1 = :capture1, capture2 = :capture2, situation = :situation, tache = :tache, action = :action, resultat = :resultat, file_version = file_version + 1 WHERE id = :id");
            $updateDetailStatement -> execute([
                'capture1' => $_SESSION['capture1'],
                'capture2' => $_SESSION['capture2'],
                'situation' => $_POST['situation'],
                'tache' => $_POST['tache'],
                'action' => $_POST['action'],
                'resultat' => $_POST['resultat'],
                'id' => $_POST['id']
            ]); 

            header('location: ../AdminProjectDetail.php#tr-anchor-' . $_POST['id']);
        }
?>