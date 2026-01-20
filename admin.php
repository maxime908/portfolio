<?php 
    session_start();
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
<body class="overflow-hidden scrollTop">
     <?php require_once(__DIR__ . "/required/header.php"); ?>    

    <a href="#admin-main">
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
        </svg>
    </a>

    <div id="blur"></div>

    <main id="admin-main">
        <?php require_once(__DIR__ . "/required/headerPanel.php"); ?>

        <?php if (isset($_SESSION['LOGGED_USER'])): ?>
            <div class="alert success-alert robotoMono">
                <?php echo "Bienvenue " . $_SESSION["LOGGED_USER"] . " sur le panneau administateur"; ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['ERROR'])): ?>
            <div class="alert danger-alert robotoMono">
                <?php echo $_SESSION["ERROR"]; ?>
            </div>
        <?php endif; ?>

        <div class="responsive scrollBarTheme">
            <table class="robotoMono">
                <tr>
                    <th>
                        Nom
                    </th>
                    <th>
                        Url
                    </th>
                    <th>
                        Image
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Language
                    </th>
                    <?php if (!isset($_GET['addProject']) && !isset($_GET['update'])): ?>
                        <th>
                            Modifier
                        </th>
                        <th>
                            Supprimer
                        </th>
                    <?php endif; ?>
                    <?php if (isset($_GET["update"]) || isset($_GET['addProject'])): ?>
                        <th>
                            Sauvegarder
                        </th>
                    <?php endif; ?>
                </tr>
                <?php if (isset($_GET['addProject']) && !isset($_GET['update'])): ?>
                    <form action="gestion/addProject.php" method="post" enctype="multipart/form-data">
                        <tr>
                            <td>
                                <input type="text" name="name" value="">
                            </td>
                            <td>
                                <input type="text" name="url" value="">
                            </td>
                            <td>
                                <div class="project-img">
                                    <img src="" class="img_add">
                                    <div class="upload-container">
                                        <svg class="cursor-pointer addSvg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                        </svg>
                                        <input type="file" name="file" class="file_add">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <textarea name="description" value=""></textarea>
                            </td>
                            <td>
                                <div class="techno robotoMono scrollBarTheme">
                                    <?php foreach ($categories as $categorie): ?>
                                        <button type="button" class="tech-item cursor-pointer tech-badge-add" data-value="<?php echo $categorie["categorie"]; ?>">
                                            <?php echo htmlspecialchars($categorie["categorie"]); ?>
                                        </button>
                                    <?php endforeach; ?>
                                    <input type="text" class="hidden addInput" name="language" value="">
                                </div>
                            </td>
                            <?php if (isset($_GET['addProject'])): ?>
                                <td>
                                    <div class="perspective-button">
                                        <button type="submit" class="main-button column color-save cursor-pointer save">
                                            <div class="main-button color-save"></div>
                                            <p class="SpaceNova">Sauvegarder</p>
                                        </button>
                                    </div>
                                </td>
                            <?php endif; ?>
                        </tr>
                    </form>
                <?php endif; ?>
                
                <?php foreach ($projects as $project): 
                    $language = json_decode($project['language']);
                
                    $bool = false;    
                ?>

                    <?php if (isset($_GET['lang'])): ?>
                        <?php 
                            $lang = json_decode($_GET['lang']);

                            if (is_array($lang) && is_array($language)) {
                                if (array_diff($lang, $language)) {
                                    $bool = true;
                                }
                            }
                        ?>
                    <?php endif; ?>

                    <?php if ($bool === false): ?>
                        <form action="gestion/submitUpdate.php" id="form_<?php echo htmlspecialchars($project['id']); ?>" method="post" enctype="multipart/form-data">
                            <input type="text" name="id" value="<?php echo htmlspecialchars($project['id']); ?>" class="hidden">
                            <tr class="scrollBarTheme">
                                <?php if (isset($_GET["update"])): ?>
                                    <?php if (comparison($project)): ?>
                                        <td>
                                            <input type="text" name="name" value="<?php echo htmlspecialchars($project['name']); ?>">
                                        </td>
                                        <td>
                                            <input type="text" name="url" value="<?php echo htmlspecialchars($project['url']); ?>">
                                        </td>
                                        <td>
                                            <div class="project-img">
                                                <img src="update/<?php echo htmlspecialchars($project["img"]); ?>" class="image_<?php echo htmlspecialchars($project['id']); ?>" alt="image">
                                                <div class="upload-container">
                                                    <svg class="cursor-pointer addSvg_<?php echo htmlspecialchars($project["id"]); ?>" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                                    </svg>
                                                    <input type="file" name="file" class="file_<?php echo htmlspecialchars($project["id"]); ?>">
                                                    <input type="text" class="hidden" name="file_default" value="<?php echo htmlspecialchars($project['img']); ?>">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <textarea name="description" type="text" class="scrollBarTheme"><?php echo htmlspecialchars($project["description"]); ?></textarea>
                                        </td>
                                        <td>
                                            <div class="techno robotoMono scrollBarTheme">
                                                <?php foreach ($categories as $categorie): ?>
                                                    <button type="button" class="tech-item cursor-pointer tech-badge-<?php echo $project['id']; ?>" data-value="<?php echo $categorie["categorie"]; ?>">
                                                        <?php echo htmlspecialchars($categorie["categorie"]); ?>
                                                    </button>
                                                <?php endforeach; ?>

                                                <?php foreach ($language as $lang): ?>
                                                    <button type="button" class="tech-item cursor-pointer hidden selectedValue-<?php echo $project['id']; ?>" value="<?php echo $lang; ?>">
                                                        <?php echo htmlspecialchars($lang); ?>
                                                    </button>
                                                <?php endforeach; ?>
                                                
                                                <input type="text" name="language" class="hidden language_<?php echo $project['id']; ?>" value="[]">
                                            </div>
                                        </td>

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
                                        <p class="table-p"><?php echo htmlspecialchars($project['name']); ?></p>
                                    </td>

                                    <td>
                                        <p class="table-p"><?php echo htmlspecialchars($project['url']); ?></p>
                                    </td>

                                    <td>
                                        <div class="project-img">
                                            <img src="update/<?php echo htmlspecialchars($project["img"]); ?>" class="image_<?php echo htmlspecialchars($project['id']); ?>" alt="image">
                                        </div>
                                    </td>   

                                    <td>
                                        <p class="scrollBarTheme table-p"><?php echo htmlspecialchars($project["description"]); ?></p>
                                    </td>

                                    <td>
                                        <div class="techno robotoMono scrollBarTheme">
                                            <?php foreach ($language as $lang): ?>
                                                <button type="button" class="tech-item cursor-pointer" value="<?php echo $lang ?>">
                                                    <?php echo htmlspecialchars($lang); ?>
                                                </button>
                                            <?php endforeach; ?>
                                        </div>
                                    </td>

                                    <?php if (!isset($_GET['addProject'])): ?>
                                        <td>
                                            <div class="perspective-button">
                                                <button type="button" value="<?php echo htmlspecialchars($project["id"]); ?>" class="main-button column color-danger cursor-pointer color-update update">
                                                    <div class="main-button color-update"></div>
                                                    <p class="SpaceNova">Modifier</p>
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="perspective-button">
                                                <button type="button" class="main-button column color-danger cursor-pointer delete" value="<?php echo htmlspecialchars($project["id"]); ?>">
                                                    <div class="main-button color-danger"></div>
                                                    <p class="SpaceNova">Supprimer</p>
                                                </button>
                                            </div>
                                        </td>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </tr>
                        </form>
                    <?php endif; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </main>

    <div id="deletePanel" class="hidden">
        <div class="perspective-button">
            <form action="gestion/submitDelete.php?id=" method="POST">
                <button type="submit" name="deleteButton" id="deleteButton" class="main-button column color-danger cursor-pointer">
                    <div class="main-button color-danger"></div>
                    <p class="GearsOfPeace">CONFIERMER LA SUPPRESSION</p>
                </button>
            </form>
            <button class="main-button column color-1 cursor-pointer" id="cancel">
                <div class="main-button color-1"></div>
                <p class="GearsOfPeace font-10">ANNULER</p>
            </button>
        </div>
    </div>
    
    <?php require_once(__DIR__ . "/required/login.php"); ?>

    <footer>
        
    </footer>

    <script src="script/openMenu.js"></script>
    <script src="script/admin.js"></script>
    <script src="script/filter.js"></script>
    <script src="script/animation.js"></script>
    <script src="script/footerLoad.js"></script>
</body>
</html>