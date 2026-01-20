<?php 
    session_start();
    require_once(__DIR__ . "/../config/config.php");
    require_once(__DIR__ . "/../config/variables.php");
?>

<?php 
    if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
        $_SESSION['ERROR'] = 'Une erreur est survenue, veuillez réessayer !';
        header('location: ../admin.php');
        return;
    }

    $deleteCatStatement = $mysqlClient -> prepare('SELECT * FROM categories WHERE id = :id');
    $deleteCatStatement -> execute([
        'id' => $_POST['id']
    ]);
    $delete = $deleteCatStatement -> fetch();

    $updateCatStatement = $mysqlClient -> prepare("UPDATE project SET language = :language");

    foreach ($projects as $project) {
        $lang = json_decode($project['language']);

        $tab = [];

        array_push($tab, $delete['categorie']);

        $result = array_diff($lang, $tab);

        $updateCatStatement -> execute([
            'language' => json_encode($result)
        ]);
    }

    $deleteCategorieStatement = $mysqlClient -> prepare('DELETE FROM categories WHERE id = :id');
    $deleteCategorieStatement -> execute([
        'id' => $_POST['id']
    ]);

    header('location: ../admin.php');
?>