<?php 
    require_once(__DIR__ . "/config/config.php");
    require_once(__DIR__ . "/config/variables.php");
    require_once(__DIR__ . "/config/functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="svg/logo.svg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js"></script>
    <title>Admin -  DREZET Maxime</title>
</head>
<body>
    <?php require_once(__DIR__ . "/required/header.php"); ?>

    <main id="main-detail">
        <?php if (isset($_GET['id_project_detail'])): ?>
            <?php 
                $currentProjectDetailStatement = $mysqlClient -> prepare("SELECT * FROM projectdetail WHERE project_id = :id");
                $currentProjectDetailStatement -> execute([
                    'id' => $_GET['id_project_detail']
                ]);
                $currentProjectDetail = $currentProjectDetailStatement -> fetch();

                if (!$currentProjectDetail) {
                    header('location: project.php');
                }
            ?>

            <div class="project-detail-wrapper">
                <img id="image-intro" src="update/<?php echo htmlspecialchars($projectById['img']); ?>" alt="image1">
            </div>
            <div class="row-button">
                <a href="https://<?php echo htmlspecialchars($projectById['url']); ?>" target="blank_" class="button column color-1 cursor-pointer save">
                    <div class="button color-1"></div>
                    <p class="SpaceNova">Voir site</p>
                </a>
            </div>
            <div class="grid-card">
                <div class="left-card">
                    <h1 class="GearsOfPeace">
                        SITUATION
                    </h1>
                    <p class="robotoMono"><?php echo htmlspecialchars($projectDetail['situation']); ?></p>
                </div>
                <div class="right-card">
                    <h1 class="GearsOfPeace">
                        TACHE
                    </h1>
                    <p class="robotoMono"><?php echo htmlspecialchars($projectDetail['tache']); ?></p>
                </div>
                <div class="left-card">
                    <h1 class="GearsOfPeace">
                        ACTION
                    </h1>
                    <p class="robotoMono"><?php echo htmlspecialchars($projectDetail['action']); ?></p>
                </div>
                <div class="right-card">
                    <h1 class="GearsOfPeace">
                        RESULTAT
                    </h1>
                    <p class="robotoMono"><?php echo htmlspecialchars($projectDetail['resultat']); ?></p>
                </div>
            </div>
            <div class="allCapture">
                <h1 class="GearsOfPeace">
                    CAPTURE D'ECRAN
                </h1>
                <div class="projectCapture">
                    <?php if ($projectDetail['capture1']): ?>
                        <img id="update1" src="update/<?php echo htmlspecialchars($projectDetail['capture1']); ?>" alt="capture1">
                    <?php endif; ?>
                    <?php if ($projectDetail['capture2']): ?>
                        <img id="update2" src="update/<?php echo htmlspecialchars($projectDetail['capture2']); ?>" alt="capture2">
                    <?php endif; ?>
                </div>
            </div>
        <?php else: ?>
            <?php header('location: project.php'); ?>
        <?php endif; ?>
    </main>

    <?php require_once(__DIR__ . "/required/footer.php"); ?>

    <script src="script/animationDetail.js"></script>
</body>
<html>