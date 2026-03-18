<?php 
    require_once (__DIR__ . "/config/config.php");
    require_once (__DIR__ . "/config/variables.php");
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
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollSmoother.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js"></script>
    <title>Portfolio -  DREZET Maxime</title>
</head>
<body class="overflow-hidden" id="project-body">
    <?php require_once (__DIR__ . "/required/header.php"); ?>

    <div id="smooth-wrapper">
		<div id="smooth-content">
            <main id="project-detail">
                <div id="filter">
                    <div class="panel-intro">
                        <p class="GearsOfPeace">FILTRES</p><hr>
                    </div>
                    <div class="robotoMono panel-button">
                        <?php foreach ($categories as $categorie): ?>
                            <button class="cursor-pointer buttonCategorie panel-btn" id="<?php echo $categorie['categorie']; ?>" value="<?php echo $categorie['categorie']; ?>"><?php echo $categorie['categorie']; ?></button>
                        <?php endforeach; ?>
                    </div>
                    <hr>
                </div>

                <div id="transition"></div>

                <section id="project">
                    <?php foreach($projects as $project): 
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
                            <div id="project-content" class="view">
                                <a href="projectDetail.php?id_project_detail=<?php echo htmlspecialchars($project['id']); ?>" class="project-link view">
                                    <div class="project-image-wrapper">
                                        <img src="update/<?php echo $project['img']; ?>?v=<?php echo $project['file_version']; ?>" alt="<?php echo $project['img']; ?>">
                                        <svg class="position-absolute" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                                        </svg>
                                    </div>
                                    <p class="robotoMono"><?php echo $project['description']; ?></p>
                                        
                                    <div class="techno robotoMono">
                                        <?php for ($i = 0; $i < count($language); $i++): ?>
                                            <div>
                                                <?php echo $language[$i]; ?>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </section>
            </main>

            <footer>
                
            </footer>
        </div>
    </div>
    
    <script src="script/transition.js"></script>
    <script src="script/openMenu.js"></script>
    <script src="script/filter.js"></script>
    <script src="script/animationProject.js"></script>
    <script src="script/footerLoad.js"></script>
</body>
</html>