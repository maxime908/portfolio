<?php 
    session_start();
    require_once(__DIR__ . "/../config/config.php");
?>

<?php 
    if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
        $_SESSION["ERROR"] = "Une erreur est survenue ! Veuillez réessayé";
        header("location: ../admin.php");
        return;
    }

    if (isset($_POST["deleteButton"])) {
        $capture = ["capture1", "capture2"];
        $captureDefault = ["capture2", "capture2_default"];

        $selectDetailDeleteStatement = $mysqlClient -> prepare("SELECT * FROM projectdetail WHERE id = :id");
        $selectDetailDeleteStatement -> execute([
            'id' => $_GET['id']
        ]);
        $selectDetailDelete = $selectDetailDeleteStatement -> fetch();

        $selectDeleteStatement = $mysqlClient -> prepare("SELECT * FROM project WHERE id = :id");
        $selectDeleteStatement -> execute([
            'id' => $_GET['id']
        ]);
        $selectDelete = $selectDeleteStatement -> fetch();

        for ($i = 0; $i < count($capture); $i++) {
            if (!empty($selectDetailDelete[$capture[$i]])) {
                $pathToUnlinkDetail = $selectDetailDelete[$capture[$i]];

                $pathToDestroyDetail = "../update/$pathToUnlinkDetail";

                unlink($pathToDestroyDetail);
            }
        }

        $pathToUnlink = $selectDelete['img'];

        $pathToDestroy = "../update/$pathToUnlink";

        unlink($pathToDestroy);

        $deleteStatement = $mysqlClient -> prepare("DELETE FROM project WHERE id = :id");
        $deleteStatement -> execute([
            "id" => $_GET["id"]
        ]);

        $deleteProdcutDetailStatement = $mysqlClient -> prepare("DELETE FROM projectdetail WHERE project_id = :id");
        $deleteProdcutDetailStatement -> execute([
            "id" => $_GET["id"]
        ]);

        header('location: ../admin.php');
    }
?>