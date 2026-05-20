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
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="svg/logo.svg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollSmoother.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>

    <script type="importmap">
        {
        "imports": {
            "three": "https://cdn.jsdelivr.net/npm/three@0.182.0/build/three.module.js",
            "three/addons/": "https://cdn.jsdelivr.net/npm/three@0.182.0/examples/jsm/"
        }
        }
    </script>
    
    <title>Portfolio -  DREZET Maxime</title>
</head>

<body id="index-body" class="resetTransition">
    <?php require_once (__DIR__ . "/required/header.php"); ?>

    <div id="smooth-wrapper">
		<div id="smooth-content">
            <section id="main-section">
                <svg class="hexa anime-hexa1 rotate-180" viewBox="148.06 3.96 249.01312849162008 834.03" data-name="Calque 1" id="Calque_1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="249.01312849162008" height="834.03">
                <defs>
                    <style>
                    .cls-1 {
                        fill: none;
                    }

                    .cls-2 {
                        clip-path: url(#clippath-1);
                    }

                    .cls-3 {
                        opacity: .12;
                    }

                    .cls-3, .cls-4 {
                        fill: #709ca7;
                        isolation: isolate;
                    }

                    .cls-4 {
                        opacity: .17;
                    }

                    .cls-5 {
                        clip-path: url(#clippath);
                    }
                    </style>
                    <clipPath id="clippath">
                    <rect height="841.945" width="246.7778" x="147.2222" class="cls-1"/>
                    </clipPath>
                    <clipPath id="clippath-1">
                    <rect height="841.89" width="595.276" y=".0275" class="cls-1"/>
                    </clipPath>
                </defs>
                <g class="cls-5">
                    <g class="cls-2">
                    <g>
                        <path d="M236.528,265.3445h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-3"/>
                        <path d="M236.528,369.8975h-58.976l-29.488,51.075,29.488,51.074h58.976l29.488-51.074-29.488-51.075Z" class="cls-4"/>
                        <path d="M236.528,474.4515h-58.976l-29.488,51.075,29.488,51.074h58.976l29.488-51.074-29.488-51.075Z" class="cls-3"/>
                        <path d="M236.528,579.0055h-58.976l-29.488,51.075,29.488,51.074h58.976l29.488-51.074-29.488-51.075Z" class="cls-4"/>
                        <path d="M236.528,160.7905h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-4"/>
                        <path d="M236.528,56.2365h-58.976l-29.488,51.075,29.488,51.074h58.976l29.488-51.074-29.488-51.075Z" class="cls-3"/>
                        <path d="M326.637,317.6215h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-4"/>
                        <path d="M326.637,422.1745h-58.976l-29.488,51.075,29.488,51.074h58.976l29.488-51.074-29.488-51.075Z" class="cls-3"/>
                        <path d="M326.637,526.7285h-58.976l-29.488,51.075,29.488,51.074h58.976l29.488-51.074-29.488-51.075Z" class="cls-4"/>
                        <path d="M326.637,631.2825h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-3"/>
                        <path d="M326.637,213.0675h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-3"/>
                        <path d="M326.637,108.5135h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-4"/>
                        <path d="M417.724,369.8975h-58.976l-29.488,51.075,29.488,51.074h58.976l29.487-51.074-29.487-51.075Z" class="cls-3"/>
                        <path d="M417.724,474.4515h-58.976l-29.488,51.075,29.488,51.074h58.976l29.487-51.074-29.487-51.075Z" class="cls-4"/>
                        <path d="M417.724,579.0055h-58.976l-29.488,51.075,29.488,51.074h58.976l29.487-51.074-29.487-51.075Z" class="cls-3"/>
                        <path d="M417.723,683.5595h-58.975l-29.488,51.074,29.488,51.075h58.975l29.488-51.075-29.488-51.074Z" class="cls-4"/>
                        <path d="M417.724,265.3445h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-4"/>
                        <path d="M417.724,160.7905h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-3"/>
                        <path d="M326.637,735.8365h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-4"/>
                        <path d="M236.528,683.5595h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-3"/>
                        <path d="M326.637,3.9596h-58.976l-29.488,51.0745,29.488,51.0743h58.976l29.488-51.0743-29.488-51.0745Z" class="cls-3"/>
                        <path d="M417.724,56.2365h-58.976l-29.488,51.075,29.488,51.074h58.976l29.488-51.074-29.488-51.075Z" class="cls-4"/>
                    </g>
                    </g>
                </g>
                </svg>

                <div id="main-content">
                    <div id="logo-content">
                        <div class="logo-main" id="model">
                            
                        </div>

                        <div id="citation">
                            <p class="GearsOfPeace">“Le <span>code</span> n’est pas qu’une <br> logique, c’est une intention.”</p>
                        </div>
                    </div>

                    <div class="perspective-button" id="button-header">
                        <a class="main-button color-1 cursor-pointer SpaceNova button-intro">
                            <p>A propos</p>
                        </a>
                        <button class="launch-transition main-button color-2 cursor-pointer SpaceNova button-intro">
                            <p>Projets</p>
                        </button>
                        <a href="#contact" class="main-button color-4 cursor-pointer SpaceNova button-intro">
                            <p>Contact</p>
                        </a>
                    </div>
                </div>

                <svg class="hexa anime-hexa2" viewBox="148.06 3.96 249.01312849162008 834.03" data-name="Calque 1" id="Calque_1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" width="249.01312849162008" height="834.03">
                <defs>
                    <style>
                    .cls-1 {
                        fill: none;
                    }

                    .cls-2 {
                        clip-path: url(#clippath-1);
                    }

                    .cls-3 {
                        opacity: .12;
                    }

                    .cls-3, .cls-4 {
                        fill: #709ca7;
                        isolation: isolate;
                    }

                    .cls-4 {
                        opacity: .17;
                    }

                    .cls-5 {
                        clip-path: url(#clippath);
                    }
                    </style>
                    <clipPath id="clippath">
                    <rect height="841.945" width="246.7778" x="147.2222" class="cls-1"/>
                    </clipPath>
                    <clipPath id="clippath-1">
                    <rect height="841.89" width="595.276" y=".0275" class="cls-1"/>
                    </clipPath>
                </defs>
                <g class="cls-5">
                    <g class="cls-2">
                    <g>
                        <path d="M236.528,265.3445h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-3"/>
                        <path d="M236.528,369.8975h-58.976l-29.488,51.075,29.488,51.074h58.976l29.488-51.074-29.488-51.075Z" class="cls-4"/>
                        <path d="M236.528,474.4515h-58.976l-29.488,51.075,29.488,51.074h58.976l29.488-51.074-29.488-51.075Z" class="cls-3"/>
                        <path d="M236.528,579.0055h-58.976l-29.488,51.075,29.488,51.074h58.976l29.488-51.074-29.488-51.075Z" class="cls-4"/>
                        <path d="M236.528,160.7905h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-4"/>
                        <path d="M236.528,56.2365h-58.976l-29.488,51.075,29.488,51.074h58.976l29.488-51.074-29.488-51.075Z" class="cls-3"/>
                        <path d="M326.637,317.6215h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-4"/>
                        <path d="M326.637,422.1745h-58.976l-29.488,51.075,29.488,51.074h58.976l29.488-51.074-29.488-51.075Z" class="cls-3"/>
                        <path d="M326.637,526.7285h-58.976l-29.488,51.075,29.488,51.074h58.976l29.488-51.074-29.488-51.075Z" class="cls-4"/>
                        <path d="M326.637,631.2825h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-3"/>
                        <path d="M326.637,213.0675h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-3"/>
                        <path d="M326.637,108.5135h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-4"/>
                        <path d="M417.724,369.8975h-58.976l-29.488,51.075,29.488,51.074h58.976l29.487-51.074-29.487-51.075Z" class="cls-3"/>
                        <path d="M417.724,474.4515h-58.976l-29.488,51.075,29.488,51.074h58.976l29.487-51.074-29.487-51.075Z" class="cls-4"/>
                        <path d="M417.724,579.0055h-58.976l-29.488,51.075,29.488,51.074h58.976l29.487-51.074-29.487-51.075Z" class="cls-3"/>
                        <path d="M417.723,683.5595h-58.975l-29.488,51.074,29.488,51.075h58.975l29.488-51.075-29.488-51.074Z" class="cls-4"/>
                        <path d="M417.724,265.3445h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-4"/>
                        <path d="M417.724,160.7905h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-3"/>
                        <path d="M326.637,735.8365h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-4"/>
                        <path d="M236.528,683.5595h-58.976l-29.488,51.074,29.488,51.075h58.976l29.488-51.075-29.488-51.074Z" class="cls-3"/>
                        <path d="M326.637,3.9596h-58.976l-29.488,51.0745,29.488,51.0743h58.976l29.488-51.0743-29.488-51.0745Z" class="cls-3"/>
                        <path d="M417.724,56.2365h-58.976l-29.488,51.075,29.488,51.074h58.976l29.488-51.074-29.488-51.075Z" class="cls-4"/>
                    </g>
                    </g>
                </g>
                </svg>
            </section>

            <section id="about" class="margin-section">
                <h1 class="GearsOfPeace view">A PROPOS</h1>

                <div id="about-content">
                    <div id="about-info">
                        <p class="robotoMono view presentation-text"><strong>Maxime Drezet,</strong> développeur web. <br> Je conçois des sites et applications interactives avec une attention particulière à l’expérience utilisateur.</p>
                        <div class="perspective-button hexa-about">
                            <div class="card cursor-pointer view">
                                <div class="card-inner">
                                    <div class="card-front hexagone-effect position-relative view">
                                        <p class="hexagone color-1">
                                            Travail en équipe
                                        </p>
                                        <div class="color-1"></div>
                                    </div>

                                    <div class="card-back hexagone-effect position-relative view">
                                        <p class="hexagone color-1">
                                            Communication
                                        </p>
                                        <div class="color-1"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card cursor-pointer view">
                                <div class="card-inner">
                                    <div class="card-front hexagone-effect position-relative view">
                                        <p class="hexagone color-2">
                                            Résolution de problème
                                        </p>
                                        <div class="color-2"></div>
                                    </div>

                                    <div class="card-back hexagone-effect position-relative view">
                                        <p class="hexagone color-2">
                                            Debugging
                                        </p>
                                        <div class="color-2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card cursor-pointer view">
                                <div class="card-inner">
                                    <div class="card-front hexagone-effect position-relative view">
                                        <p class="hexagone color-4">
                                            Autonomie
                                        </p>
                                        <div class="color-4"></div>
                                    </div>

                                    <div class="card-back hexagone-effect position-relative view">
                                        <p class="hexagone color-4">
                                            Initiative
                                        </p>
                                        <div class="color-4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="view profile" src="svg/profile.svg" alt="img-profile">
                </div>
                <div class="perspective-button button-about view">
                    <a href="Maxime_DREZET_CV.pdf" download="CV_Drezet_Maxime.pdf" class="main-button color-1 cursor-pointer SpaceNova">
                        <p>Mon CV</p>
                    </a>
                </div>
            </section>

            <section id="project">
                <div id="transition"></div>

                <h1 class="GearsOfPeace view">PROJETS</h1>

                <div id="project-content" class="view showOverflow">
                    <?php for ($i = 0; $i < 3; $i++): ?>
                        <?php $tableau = json_decode($projects[$i]['language']); ?>

                        <a href="projectDetail.php?id_project_detail=<?php echo htmlspecialchars($projects[$i]['id']); ?>" target="_blank" class="project-link view">
                            <div class="d-flex flex-column gap-1">
                                <div class="project-image-wrapper">
                                    <img src="update/<?php echo htmlspecialchars($projects[$i]['img']); ?>" alt="Jeu Taupe">
                                    <svg class="position-absolute" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                                    </svg>
                                </div>
                                <p class="robotoMono"><?php echo htmlspecialchars($projects[$i]['description']); ?></p>
                            </div>
                                
                            <div class="techno robotoMono">
                                <?php for ($j = 0; $j < count($tableau); $j++): ?>
                                    <div>
                                        <?php echo htmlspecialchars($tableau[$j]); ?>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </a>
                    <?php endfor; ?>
                </div>

                <div class="perspective-button button-about view launch-transition">
                    <a id="project-redirection" class="main-button color-1 cursor-pointer SpaceNova">
                        <p>Voir plus</p>
                    </a>
                </div>
            </section>

            <section id="contact" class="margin-section">
                <h1 class="GearsOfPeace view">CONTACT</h1>

                <h2 class="view">Une idée, un projet ou une question ? N’hésite pas à me contacter, je réponds rapidement.</h2>

                <div id="contact-content">
                    <form>
                        <input class="robotoMono view" id="name" type="text" placeholder="NOM" required>
                        <input class="robotoMono view" id="email" type="email" placeholder="EMAIL" required>
                        <textarea class="robotoMono view" id="message" placeholder="MESSAGE" required></textarea>
                        <div class="perspective-button view">
                            <div class="main-button column color-1 cursor-pointer robotoMono">
                                <div class="main-button color-1"></div>
                                <p class="SpaceNova">Envoyer</p>
                            </div>
                        </div>
                    </form>

                    <div id="div-hr">
                        <hr>
                    </div>

                    <div class="card">

                    <div id="info-content" class="robotoMono">
                        <a href="mailto:maxime.drezet74@gmail.com" class="perspective-button">
                            <div class="hexagone-effect position-relative view">
                                <p class="hexagone color-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" class="bi bi-envelope" viewBox="0 2 16 12">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                    </svg>
                                </p>
                                <div class="info-color"></div>
                            </div>
                            <p>maxime.drezet74@gmail.com</p>
                        </a>
                        <a href="https://github.com/maxime908" target="_blank" class="perspective-button">
                            <div class="hexagone-effect position-relative view">
                                <p class="hexagone color-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" class="bi bi-github" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                    </svg>
                                </p>
                                <div class="info-color"></div>
                            </div>
                            <p>GitHub</p>
                        </a>
                        <a href="https://www.linkedin.com/in/maxime-drezet/" target="_blank" class="perspective-button">
                            <div class="hexagone-effect position-relative view">
                                <p class="hexagone color-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                    </svg>
                                </p>
                                <div class="info-color"></div>
                            </div>
                            <p>Linkedin</p>
                        </a>
                        <a href="Maxime_DREZET_CV.pdf" download="CV_Drezet_Maxime.pdf" class="perspective-button">
                            <div class="hexagone-effect position-relative view">
                                <p class="hexagone color-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                    </svg>
                                </p>
                                <div class="info-color"></div>
                            </div>
                            <p>Mon CV</p>
                        </a>
                    </div>
                </div>
            </section>

            <footer>

            </footer>
        </div>
    </div>

    <script type="module" src="script/three.js"></script>
    <script src="script/transition.js"></script>
    <script src="script/openMenu.js"></script>
    <script src="script/script.js"></script>
    <script src="script/navbar.js"></script>
    <script src="script/footerLoad.js"></script>

    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function(){
            emailjs.init({
                publicKey: "bVr4Ne3l-nMKLNtFo",
            });
        })();
    </script>
</body>
</html>