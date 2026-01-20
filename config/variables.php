<?php 
    $usersStatement = $mysqlClient -> prepare('SELECT * FROM users');
    $usersStatement -> execute();
    $users = $usersStatement -> fetchAll();

    $projectStatement = $mysqlClient -> prepare('SELECT * FROM project ORDER BY id DESC');
    $projectStatement -> execute();
    $projects = $projectStatement -> fetchAll();

    $categoriesStatement = $mysqlClient -> prepare('SELECT * FROM categories');
    $categoriesStatement -> execute();
    $categories = $categoriesStatement -> fetchAll();

    $AdminProjectsDetailStatement = $mysqlClient -> prepare('SELECT * FROM projectdetail ORDER BY id DESC');
    $AdminProjectsDetailStatement -> execute();
    $AdminProjectsDetails = $AdminProjectsDetailStatement -> fetchAll();

    if (isset($_GET['id_project_detail'])) {
        $projectDetailStatement = $mysqlClient -> prepare("SELECT * FROM projectdetail WHERE project_id = :id");
        $projectDetailStatement -> execute([
            'id' => $_GET['id_project_detail']
        ]);
        $projectDetail = $projectDetailStatement -> fetch();

        $projectByIdStatement = $mysqlClient -> prepare("SELECT * FROM project WHERE id = :id");
        $projectByIdStatement -> execute([
            'id' => $_GET['id_project_detail']
        ]);
        $projectById = $projectByIdStatement -> fetch();
    }