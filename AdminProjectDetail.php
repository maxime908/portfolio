<?php 
    session_start();
    require_once(__DIR__ . "/config/config.php");
    require_once(__DIR__ . "/config/variables.php");
    require_once(__DIR__ . "/config/functions.php");

    if (!isset($_SESSION['LOGGED_USER'])) {
        header('location: admin.php');
        return;
    }
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
<body class="body-project-detail scrollTop">
    <?php require_once(__DIR__ . "/required/header.php"); ?>

    <a href="#detailMain">
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
        </svg>
    </a>

    <?php $tabColonneBDD = ["situation", "tache", "action", "resultat"]; ?>

    <main id="detailMain">
        <?php if (updateDetailActif()): ?>
            <div id="admin-panel">
                <div class="panel-intro">
                    <p class="GearsOfPeace">ADMIN PANEL</p><hr>
                </div>
                <div class="robotoMono panel-button">
                    <a href="AdminProjectDetail.php" class="cursor-pointer button-inactive panel-btn">Retour</a>
                </div>
                <hr>
            </div>
        <?php endif; ?>

        <div class="responsive scrollBarTheme">
            <table class="robotoMono">
                <tr>
                    <th>
                        Nom
                    </th>
                    <th>
                        Capture 1
                    </th>
                    <th>
                        Capture 2
                    </th>
                    <th>
                        Situation
                    </th>
                    <th>
                        Tâche
                    </th>
                    <th>
                        Action
                    </th>
                    <th>
                        Résultat
                    </th>
                    <?php if (!updateDetailActif()): ?>
                        <th>
                            Modifier
                        </th>
                    <?php else: ?>
                        <th>
                            Sauvegarder
                        </th>
                    <?php endif; ?>
                </tr>

                <?php foreach($AdminProjectsDetails as $AdminProjectsDetail): ?>   
                    <tr id="tr-anchor-<?php echo htmlspecialchars($AdminProjectsDetail['id']); ?>">
                        <form action="gestion/updateProjectDetail.php" method="post" enctype="multipart/form-data">
                            <td class="hidden">
                                <input type="text" name="id" value="<?php echo htmlspecialchars($AdminProjectsDetail['id']); ?>">
                            </td>
                            <?php if (!updateDetailActif()): ?>
                                <td>
                                    <?php echo htmlspecialchars($AdminProjectsDetail['name']); ?>
                                </td>
                            <?php else: ?>
                                <?php if(detailUpdate($AdminProjectsDetail)): ?>
                                    <td>
                                        <?php echo htmlspecialchars($AdminProjectsDetail['name']); ?>
                                    </td>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if (updateDetailActif()): ?>
                                <?php if(detailUpdate($AdminProjectsDetail)): ?>
                                    <td>
                                        <div class="project-img">
                                            <img src="update/<?php echo $AdminProjectsDetail['capture1']; ?>" class="capture1_<?php echo htmlspecialchars($AdminProjectsDetail['id']); ?>">
                                            <div class="upload-container">
                                                <svg class="cursor-pointer addCapture1Svg_<?php echo htmlspecialchars($AdminProjectsDetail['id']); ?>" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                                </svg>
                                                <input type="file" name="capture1" class="addFileCapture1_<?php echo htmlspecialchars($AdminProjectsDetail['id']); ?>">
                                                <input type="text" class="hidden" name="capture1_default" value="<?php echo htmlspecialchars($AdminProjectsDetail['capture1']); ?>">
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="project-img">
                                            <img src="update/<?php echo $AdminProjectsDetail['capture2']; ?>" class="capture2_<?php echo htmlspecialchars($AdminProjectsDetail['id']); ?>">
                                            <div class="upload-container">
                                                <svg class="cursor-pointer addCapture2Svg_<?php echo htmlspecialchars($AdminProjectsDetail['id']); ?>" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                                </svg>
                                                <input type="file" name="capture2" class="addFileCapture2_<?php echo htmlspecialchars($AdminProjectsDetail['id']); ?>">
                                                <input type="text" class="hidden" name="capture2_default" value="<?php echo htmlspecialchars($AdminProjectsDetail['capture2']); ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <?php for ($i = 0; $i < count($tabColonneBDD); $i++): ?>
                                        <td>
                                            <textarea name="<?php echo htmlspecialchars($tabColonneBDD[$i]); ?>"><?php echo htmlspecialchars($AdminProjectsDetail[$tabColonneBDD[$i]]); ?></textarea>
                                        </td>
                                    <?php endfor; ?>

                                    <td>    
                                        <div class="perspective-button">
                                            <button type="submit" class="main-button column color-save cursor-pointer save">
                                                <div class="main-button color-save"></div>
                                                <p class="SpaceNova">Sauvegarder</p>
                                            </button>
                                        </div>
                                    </td>
                                <?php endif; ?>
                            <?php else: ?>
                                <td>
                                    <div class="project-img">
                                        <img src="update/<?php echo $AdminProjectsDetail['capture1']; ?>" class="capture1_<?php echo htmlspecialchars($AdminProjectsDetail['id']); ?>">
                                    </div>
                                </td>
                                <td>
                                    <div class="project-img">
                                        <img src="update/<?php echo $AdminProjectsDetail['capture2']; ?>" class="capture2_<?php echo htmlspecialchars($AdminProjectsDetail['id']); ?>">
                                    </div>
                                </td>

                                <?php for ($i = 0; $i < count($tabColonneBDD); $i++): ?>
                                    <td>
                                        <p class="table-p"><?php echo htmlspecialchars($AdminProjectsDetail[$tabColonneBDD[$i]]); ?></p>
                                    </td>
                                <?php endfor; ?>

                                <?php if (!updateDetailActif()): ?>
                                    <td>
                                        <div class="perspective-button">
                                            <a href="?updateProjectDetail=true&id=<?php echo htmlspecialchars($AdminProjectsDetail['id']); ?>" style="text-align: center;" class="main-button column color-update cursor-pointer save">
                                                <div class="main-button color-update"></div>
                                                <p class="SpaceNova">Modifier</p>
                                            </a>
                                        </div>
                                    </td>
                                <?php endif; ?>
                            <?php endif; ?>
                        </form>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </main>

    <footer>

    </footer>

    <script src="script/disableAutoScroll.js"></script>
    <script src="script/openMenu.js"></script>
    <script src="script/selectFile.js"></script>
    <script src="script/footerLoad.js"></script>
</body>
</html>