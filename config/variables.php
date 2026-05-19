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

    $enumStatement = $mysqlClient -> prepare('SHOW COLUMNS FROM categories LIKE "stacks_cat"');
    $enumStatement -> execute();
    $enum = $enumStatement -> fetchAll(PDO::FETCH_ASSOC);
    
    $enumMatches = preg_match('/enum\(\'(.*)\'\)$/', $enum[0]['Type'], $matches);
    $enumValues = explode('\',\'', $matches[1]);

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

        $stacks = json_decode($projectById['language'], true); 

        $allStacks = [];

        foreach ($stacks as $value) {
            $searchStacksStatement = $mysqlClient -> prepare("SELECT * FROM categories WHERE categorie = :name");
            $searchStacksStatement -> execute([
                'name' => $value,
            ]);
            $searchStacks = $searchStacksStatement -> fetch(PDO::FETCH_ASSOC);

            $allStacks[] = $searchStacks;
        }
    }