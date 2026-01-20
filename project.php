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
    <title>Portfolio -  DREZET Maxime</title>
</head>
<body class="overflow-hidden">
    <?php require_once (__DIR__ . "/required/header.php"); ?>

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
                        <a href="projectDetail.php?id_project_detail=<?php echo htmlspecialchars($project['id']); ?>" class="project-div view">
                            <div class="project-image-wrapper">
                                <img src="update/<?php echo $project['img']; ?>?v=<?php echo $project['file_version']; ?>" alt="<?php echo $project['img']; ?>">
                                <div class="hexa-img">
                                    <div class="hexagone color-1 SpaceNova">
                                        <p>HTML</p>
                                    </div>
                                    <div class="hexagone color-1 SpaceNova">
                                        <p>CSS</p>
                                    </div>
                                    <div class="hexagone color-1 SpaceNova">
                                        <p>JS</p>
                                    </div>
                                </div>
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

    <?php require_once(__DIR__ . "/required/footer.php"); ?>
    
    <script src="script/filter.js"></script>
    <script src="script/animationProject.js"></script>
</body>
</html>