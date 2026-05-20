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
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollSmoother.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js"></script>
    <title>Portfolio -  DREZET Maxime</title>

    <style>
        .d-flex {
            display: flex;
        }

        .align-items-center {
            align-items: center;
        }

        .gap-2 {
            gap: 2rem;
        }

        a p {
            padding: 17px !important;
        }

        .stacks {
            display: flex;
            justify-content: center;
            gap: 50px;
            width: 100%;
            transform: translateX(calc(100% + 120px))
        }

        .stacks-title {
            color: white;
            position: absolute;
            left: 15px;
            background-color: #00003B;
        }

        .stacks .stacks-container {
            width: 100%;
            height: 201px;
            border: 3px solid white;
            position: relative;
            padding: 0 15px 15px 15px;
        }

        .techno {
            margin: 25px 0 0 0;
            padding: 15px 0 25px 0;
            border-bottom: 3px dotted white;
        }

        .techno div {
            cursor: pointer;
            transition: 0.5s;
        }

        .techno div:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 8px #01a4efaa, 0 0 32px #01a4ef77;
            transition: 0.5s;
        }

        .card-group:first-child div {
            transform: translateX(-100%)
        }

        .card-group:last-child div {
            transform: translateX(100%)
        }

        .stacks-description {
            margin-top: 25px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            height: 35px;
        }

        .stacks-description svg {
            min-height: 35px;
            min-width: 35px;
        }

        p {
            color: white !important;
        }

        @media screen and (max-width: 768px) {
            .stacks {
                transform: translateX(calc(100% + 16px));
            }
        }
    </style>
</head>
<body class="resetTransition">
    <?php require_once(__DIR__ . "/required/header.php"); ?>

    <div id="smooth-wrapper">
		<div id="smooth-content">
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

                    <div id="transition"></div>

                    <div class="project-detail-wrapper">
                        <img id="image-intro" src="update/<?php echo htmlspecialchars($projectById['img']); ?>" alt="image1">
                    </div>
                    <div class="perspective-button">
                        <a href="https://<?php echo htmlspecialchars($projectById['url']); ?>" target="blank_" class="main-button color-1 cursor-pointer save">
                            <p class="SpaceNova d-flex align-items-center gap-2">Voir site 
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg>
                            </p>
                        </a>
                    </div>

                    <div class="stacks">
                        <?php 
                            $front = [];
                            $back = [];
                            $tools = [];

                            foreach ($allStacks as $value) {
                                switch (strtolower($value["stacks_cat"])) {
                                    case 'front-end':
                                        $front[] = $value["categorie"];
                                        break; 
                                    case 'back-end':
                                        $back[] = $value["categorie"];
                                        break; 
                                    case 'tools':
                                        $tools[] = $value["categorie"];
                                        break; 
                                }
                            }
                        ?>

                        <?php if (!empty($front)): ?>
                            <div class="stacks-container">
                                <div class="stacks-title">
                                    <h3 class="SpaceNova">Front-end</h3>
                                </div>
                                <div class="techno robotoMono" style="flex-wrap: wrap">
                                    <?php foreach ($front as $value): ?>
                                        <a href='project.php?lang=["<?php echo $value; ?>"]'>
                                            <div>
                                                <?php echo $value; ?>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                                <div class="stacks-description stacks-front">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-code-slash" viewBox="0 0 16 16">
                                        <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0"/>
                                    </svg>
                                    <p class="robotoMono"></p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($back)): ?>
                            <div class="stacks-container">
                                <div class="stacks-title">
                                    <h3 class="SpaceNova">Back-end</h3>
                                </div>
                                <div class="techno robotoMono" style="flex-wrap: wrap">
                                    <?php foreach ($back as $value): ?>
                                        <a href='project.php?lang=["<?php echo $value; ?>"]'>
                                            <div>
                                                <?php echo $value; ?>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                                <div class="stacks-description stacks-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-code-slash" viewBox="0 0 16 16">
                                        <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0"/>
                                    </svg>
                                    <p class="robotoMono"></p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($tools)): ?>
                            <div class="stacks-container">
                                <div class="stacks-title">
                                    <h3 class="SpaceNova">Outils</h3>
                                </div>
                                <div class="techno robotoMono" style="flex-wrap: wrap">
                                    <?php foreach ($tools as $value): ?>
                                        <a href='project.php?lang=["<?php echo $value; ?>"]'>
                                            <div>
                                                <?php echo $value; ?>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                                <div class="stacks-description stacks-tools">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-code-slash" viewBox="0 0 16 16">
                                        <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0"/>
                                    </svg>
                                    <p class="robotoMono"></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="flex-card">
                        <div class="card-group">
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
                        </div>
                        <div class="card-group">
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
                    </div>
                    <div class="allCapture">
                        <h1 class="GearsOfPeace">
                            CAPTURE D'ECRAN
                        </h1>
                        <div class="projectCapture">
                            <?php if ($projectDetail['capture1']): ?>
                                <a href="update/<?php echo htmlspecialchars($projectDetail['capture1']); ?>">
                                    <img id="update1" src="update/<?php echo htmlspecialchars($projectDetail['capture1']); ?>" alt="capture1">
                                </a>
                            <?php endif; ?>
                            <?php if ($projectDetail['capture2']): ?>
                                <a href="update/<?php echo htmlspecialchars($projectDetail['capture2']); ?>">
                                    <img id="update2" src="update/<?php echo htmlspecialchars($projectDetail['capture2']); ?>" alt="capture2">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <?php header('location: project.php'); ?>
                <?php endif; ?>
            </main>

            <footer>

            </footer>
        </div>
    </div>

    <script src="script/transition.js"></script>
    <script src="script/openMenu.js"></script>
    <script src="script/animationDetail.js"></script>
    <script src="script/footerLoad.js"></script>
    <script type="module">
        import { ColorFinder } from "./script/color-tracker.js"

        const update1 = document.getElementById("update1")
        const update2 = document.getElementById("update2")

        const rgb1 = new ColorFinder().getMostProminentColor(update1);
        const rgb2 = new ColorFinder().getMostProminentColor(update2);

        console.log(rgb1.r, rgb1.g, rgb1.b)
        
        update1.style.boxShadow = `5px 5px 5px rgb(${rgb1.r}, ${rgb1.b}, ${rgb1.g})`;
        update2.style.boxShadow = `5px 5px 5px rgb(${rgb2.r}, ${rgb2.b}, ${rgb2.g})`;

        const h3 = document.querySelector(".stacks-title h3")

        const h3Size = window.getComputedStyle(h3).getPropertyValue("font-size");

        document.querySelectorAll(".stacks-title").forEach((element) => {
            element.style.top = `calc(-${h3Size}/2)`;
        })

        const stacksFront = document.querySelector(".stacks-front");
        const stacksBack = document.querySelector(".stacks-back");
        const stacksTools = document.querySelector(".stacks-tools");

        function getRandomInt(max) {
            return Math.floor(Math.random() * max);
        }

        let front = [
            "Création d’interfaces modernes et responsive.",
            "Animations fluides et interactions utilisateur",
            "Expérience utilisateur pensée dans les détails.",
            "Développement d’interfaces dynamiques et immersives.",
            "Intégration front-end optimisée et moderne.",
            "UI responsive avec animations et micro-interactions.",
            "Interfaces interactives orientées expérience utilisateur.",
            "Développement d’expériences web modernes et fluides.",
            "Conception d’interfaces immersives et dynamiques.",
            "Animations et transitions pour une navigation fluide.",
            "Architecture front-end propre et responsive.",
            "Interfaces web modernes avec attention portée à l’UX.",
            "Développement d’interfaces interactives et animées.",
            "Optimisation de l’expérience utilisateur et des performances.",
            "Création d’interfaces web modernes et intuitives."
        ];

        let back = [
            "Développement côté serveur et gestion des données.",
            "Conception de systèmes back-end performants et sécurisés.",
            "Gestion des bases de données et logique applicative.",
            "Architecture serveur et traitement dynamique des données.",
            "Développement d’API et communication avec la base de données.",
            "Optimisation des traitements et gestion des requêtes SQL.",
            "Conception de fonctionnalités back-end robustes et évolutives.",
            "Développement de systèmes dynamiques orientés performance.",
            "Gestion sécurisée des données et des utilisateurs.",
            "Création d’architectures back-end modernes et structurées.",
            "Traitement des données et développement côté serveur.",
            "Conception de solutions back-end fiables et optimisées.",
            "Gestion des échanges entre front-end et base de données.",
            "Développement d’applications dynamiques et sécurisées.",
            "Mise en place de logiques serveur et gestion des données."
        ];

        let tools = [
            "Utilisation d’outils modernes pour le développement web.",
            "Workflow optimisé avec outils de développement et de design.",
            "Intégration d’outils orientés productivité et performance.",
            "Maîtrise d’outils utilisés dans des projets web modernes.",
            "Environnement de développement structuré et optimisé.",
            "Outils dédiés au développement, au design et à l’animation.",
            "Utilisation de technologies pour accélérer le workflow.",
            "Pipeline de développement moderne et collaboratif.",
            "Outils de création, d’intégration et de versionning.",
            "Environnement technique pensé pour la performance.",
            "Workflow orienté développement moderne et expérience utilisateur.",
            "Utilisation d’outils adaptés aux projets interactifs et immersifs.",
            "Gestion de projet et développement avec outils spécialisés.",
            "Outils de développement et de conception orientés UX."
        ];

        const randFront = getRandomInt(front.length);
        const randBack = getRandomInt(back.length);
        const randTools = getRandomInt(tools.length);

        if (stacksFront) {
            stacksFront.querySelector("p").innerHTML += front[randFront];
        }

        if (stacksBack) {
            stacksBack.querySelector("p").innerHTML += back[randBack];
        }

        if (stacksTools) {
            stacksTools.querySelector("p").innerHTML += tools[randTools];
        }
    </script>
</body>
<html>