<<<<<<< HEAD
<header id="header">
    <a href="index.php#main-content">
        <svg width="60" height="46" viewBox="0 0 60 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_177_349)">
            <path d="M60.0004 4.23959L49.5805 1.36989L44.6081 0.000488281L41.4873 1.43628L38.2454 2.92781L34.8723 4.47971L31.3614 6.09501L27.704 7.7777L32.862 9.45078L43.7369 12.9783L43.737 12.9782L42.6777 32.3183L45.8856 30.2279L47.2726 11.0774L47.2709 11.0784L36.4847 7.69978L39.9594 6.02025L50.6578 9.26007L50.6579 9.26L48.9705 28.2176L51.9393 26.283L53.9027 7.51553L53.9009 7.51646L43.2952 4.40792L46.4988 2.85942L57.0137 5.84547L57.0137 5.84543L54.7972 24.4206L57.5526 22.6249L60.0022 4.23867L60.0004 4.23959Z" fill="#C6C6C6"/>
            <path d="M37.0604 16.5648L32.1387 14.8609C23.6979 11.9386 16.6363 11.9332 10.2407 14.8442L0.00104141 19.5048L17.8051 26.91L19.4506 46.0004L28.4034 40.2358C34.0116 36.6247 36.7842 30.0819 36.9994 19.5719L37.0609 16.5646L37.0604 16.5648ZM28.4607 34.0252L23.3224 37.1559L22.5712 24.349L22.5707 24.3493L9.87767 19.3017L15.5062 16.6171C18.8723 15.0116 22.6827 15.0116 27.1428 16.6171L33.0235 18.734L33.0274 22.9529C33.0326 28.5615 31.5366 32.1512 28.4607 34.0252Z" fill="#C6C6C6"/>
            </g>
            <defs>
            <clipPath id="clip0_177_349">
            <rect width="60" height="46" fill="white"/>
            </clipPath>
            </defs>
        </svg>
    </a>

    <?php if (isset($_SESSION['LOGGED_USER'])): ?>
        <div class="header-menu">
            <a href="admin.php" class="SpaceNova">Projet</a>
            <a href="AdminProjectDetail.php" class="SpaceNova">Projet detail</a>
        </div>

        <div id="logout-div">
            <svg class="cursor-pointer" id="login-person" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_521_170)">
                    <path d="M28.875 15.75C28.875 17.8386 28.0453 19.8416 26.5685 21.3185C25.0916 22.7953 23.0886 23.625 21 23.625C18.9114 23.625 16.9084 22.7953 15.4315 21.3185C13.9547 19.8416 13.125 17.8386 13.125 15.75C13.125 13.6614 13.9547 11.6584 15.4315 10.1815C16.9084 8.70469 18.9114 7.875 21 7.875C23.0886 7.875 25.0916 8.70469 26.5685 10.1815C28.0453 11.6584 28.875 13.6614 28.875 15.75Z" fill="#C6C6C6"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 21C0 15.4305 2.21249 10.089 6.15076 6.15076C10.089 2.21249 15.4305 0 21 0C26.5695 0 31.911 2.21249 35.8492 6.15076C39.7875 10.089 42 15.4305 42 21C42 26.5695 39.7875 31.911 35.8492 35.8492C31.911 39.7875 26.5695 42 21 42C15.4305 42 10.089 39.7875 6.15076 35.8492C2.21249 31.911 0 26.5695 0 21ZM21 2.625C17.5397 2.62518 14.1497 3.60245 11.2203 5.44432C8.2909 7.28619 5.94112 9.9178 4.44141 13.0363C2.94169 16.1547 2.35301 19.6333 2.74312 23.0715C3.13323 26.5098 4.48626 29.7681 6.6465 32.4712C8.51025 29.4682 12.6131 26.25 21 26.25C29.3869 26.25 33.4871 29.4656 35.3535 32.4712C37.5137 29.7681 38.8668 26.5098 39.2569 23.0715C39.647 19.6333 39.0583 16.1547 37.5586 13.0363C36.0589 9.9178 33.7091 7.28619 30.7797 5.44432C27.8503 3.60245 24.4603 2.62518 21 2.625Z" fill="#C6C6C6"/>
                    <path id="rond-person" d="M34.2 10.4C36.5196 10.4 38.4 8.5196 38.4 6.2C38.4 3.8804 36.5196 2 34.2 2C31.8804 2 30 3.8804 30 6.2C30 8.5196 31.8804 10.4 34.2 10.4Z" fill="#FF3B3B"/>
                </g>
                <defs>
                    <clipPath id="clip0_521_170">
                        <rect width="42" height="42" fill="white"/>
                    </clipPath>
                </defs>
            </svg>

            <a href="compte/logout.php" id="logout" class="hidden">
                <span class="robotoMono">Déconnexion</span>
            </a>
        </div>
    <?php else: ?>
        <svg class="hamburger-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" stroke="#eee" stroke-width=".6" fill="rgba(0,0,0,0)" stroke-linecap="round" style="cursor: pointer">
            <path d="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7">
                <animate dur="0.2s" attributeName="d" values="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7;M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7" fill="freeze" begin="start.begin" />
                <animate dur="0.2s" attributeName="d" values="M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7;M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7" fill="freeze" begin="reverse.begin" />
            </path>
            <rect width="10" height="10" stroke="none">
                <animate dur="2s" id="reverse" attributeName="width" begin="click" />
            </rect>
            <rect width="10" height="10" stroke="none">
                <animate dur="0.001s" id="start" attributeName="width" values="10;0" fill="freeze" begin="click" />
                <animate dur="0.001s" attributeName="width" values="0;10" fill="freeze" begin="reverse.begin" />
            </rect>
        </svg>

        <div class="header-menu">
            <a href="index.php#about" class="SpaceNova">A propos</a>
            <a href="project.php" class="SpaceNova">Projet</a>
            <a href="index.php#contact" class="SpaceNova">Contact</a>
        </div>
    <?php endif; ?>
=======
<header id="header">
    <a href="index.php#main-content">
        <svg width="60" height="46" viewBox="0 0 60 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_177_349)">
            <path d="M60.0004 4.23959L49.5805 1.36989L44.6081 0.000488281L41.4873 1.43628L38.2454 2.92781L34.8723 4.47971L31.3614 6.09501L27.704 7.7777L32.862 9.45078L43.7369 12.9783L43.737 12.9782L42.6777 32.3183L45.8856 30.2279L47.2726 11.0774L47.2709 11.0784L36.4847 7.69978L39.9594 6.02025L50.6578 9.26007L50.6579 9.26L48.9705 28.2176L51.9393 26.283L53.9027 7.51553L53.9009 7.51646L43.2952 4.40792L46.4988 2.85942L57.0137 5.84547L57.0137 5.84543L54.7972 24.4206L57.5526 22.6249L60.0022 4.23867L60.0004 4.23959Z" fill="#C6C6C6"/>
            <path d="M37.0604 16.5648L32.1387 14.8609C23.6979 11.9386 16.6363 11.9332 10.2407 14.8442L0.00104141 19.5048L17.8051 26.91L19.4506 46.0004L28.4034 40.2358C34.0116 36.6247 36.7842 30.0819 36.9994 19.5719L37.0609 16.5646L37.0604 16.5648ZM28.4607 34.0252L23.3224 37.1559L22.5712 24.349L22.5707 24.3493L9.87767 19.3017L15.5062 16.6171C18.8723 15.0116 22.6827 15.0116 27.1428 16.6171L33.0235 18.734L33.0274 22.9529C33.0326 28.5615 31.5366 32.1512 28.4607 34.0252Z" fill="#C6C6C6"/>
            </g>
            <defs>
            <clipPath id="clip0_177_349">
            <rect width="60" height="46" fill="white"/>
            </clipPath>
            </defs>
        </svg>
    </a>

    <?php if (isset($_SESSION['LOGGED_USER'])): ?>
        <svg class="hamburger-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" stroke="#eee" stroke-width=".6" fill="rgba(0,0,0,0)" stroke-linecap="round" style="cursor: pointer">
            <path d="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7">
                <animate dur="0.2s" attributeName="d" values="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7;M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7" fill="freeze" begin="start.begin" />
                <animate dur="0.2s" attributeName="d" values="M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7;M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7" fill="freeze" begin="reverse.begin" />
            </path>
            <rect width="10" height="10" stroke="none">
                <animate dur="2s" id="reverse" attributeName="width" begin="click" />
            </rect>
            <rect width="10" height="10" stroke="none">
                <animate dur="0.001s" id="start" attributeName="width" values="10;0" fill="freeze" begin="click" />
                <animate dur="0.001s" attributeName="width" values="0;10" fill="freeze" begin="reverse.begin" />
            </rect>
        </svg>

        <div class="header-menu">
            <a href="admin.php" class="SpaceNova">Projet</a>
            <a href="AdminProjectDetail.php" class="SpaceNova">Projet detail</a>
        </div>

        <div id="logout-div">
            <svg class="cursor-pointer" id="login-person" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_521_170)">
                    <path d="M28.875 15.75C28.875 17.8386 28.0453 19.8416 26.5685 21.3185C25.0916 22.7953 23.0886 23.625 21 23.625C18.9114 23.625 16.9084 22.7953 15.4315 21.3185C13.9547 19.8416 13.125 17.8386 13.125 15.75C13.125 13.6614 13.9547 11.6584 15.4315 10.1815C16.9084 8.70469 18.9114 7.875 21 7.875C23.0886 7.875 25.0916 8.70469 26.5685 10.1815C28.0453 11.6584 28.875 13.6614 28.875 15.75Z" fill="#C6C6C6"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 21C0 15.4305 2.21249 10.089 6.15076 6.15076C10.089 2.21249 15.4305 0 21 0C26.5695 0 31.911 2.21249 35.8492 6.15076C39.7875 10.089 42 15.4305 42 21C42 26.5695 39.7875 31.911 35.8492 35.8492C31.911 39.7875 26.5695 42 21 42C15.4305 42 10.089 39.7875 6.15076 35.8492C2.21249 31.911 0 26.5695 0 21ZM21 2.625C17.5397 2.62518 14.1497 3.60245 11.2203 5.44432C8.2909 7.28619 5.94112 9.9178 4.44141 13.0363C2.94169 16.1547 2.35301 19.6333 2.74312 23.0715C3.13323 26.5098 4.48626 29.7681 6.6465 32.4712C8.51025 29.4682 12.6131 26.25 21 26.25C29.3869 26.25 33.4871 29.4656 35.3535 32.4712C37.5137 29.7681 38.8668 26.5098 39.2569 23.0715C39.647 19.6333 39.0583 16.1547 37.5586 13.0363C36.0589 9.9178 33.7091 7.28619 30.7797 5.44432C27.8503 3.60245 24.4603 2.62518 21 2.625Z" fill="#C6C6C6"/>
                    <path id="rond-person" d="M34.2 10.4C36.5196 10.4 38.4 8.5196 38.4 6.2C38.4 3.8804 36.5196 2 34.2 2C31.8804 2 30 3.8804 30 6.2C30 8.5196 31.8804 10.4 34.2 10.4Z" fill="#FF3B3B"/>
                </g>
                <defs>
                    <clipPath id="clip0_521_170">
                        <rect width="42" height="42" fill="white"/>
                    </clipPath>
                </defs>
            </svg>

            <a href="compte/logout.php" id="logout" class="hidden">
                <span class="robotoMono">Déconnexion</span>
            </a>
        </div>
    <?php else: ?>
        <svg class="hamburger-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" stroke="#eee" stroke-width=".6" fill="rgba(0,0,0,0)" stroke-linecap="round" style="cursor: pointer">
            <path d="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7">
                <animate dur="0.2s" attributeName="d" values="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7;M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7" fill="freeze" begin="start.begin" />
                <animate dur="0.2s" attributeName="d" values="M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7;M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7" fill="freeze" begin="reverse.begin" />
            </path>
            <rect width="10" height="10" stroke="none">
                <animate dur="2s" id="reverse" attributeName="width" begin="click" />
            </rect>
            <rect width="10" height="10" stroke="none">
                <animate dur="0.001s" id="start" attributeName="width" values="10;0" fill="freeze" begin="click" />
                <animate dur="0.001s" attributeName="width" values="0;10" fill="freeze" begin="reverse.begin" />
            </rect>
        </svg>

        <div class="header-menu">
            <a href="index.php#about" class="SpaceNova">A propos</a>
            <a href="project.php" class="SpaceNova">Projet</a>
            <a href="index.php#contact" class="SpaceNova">Contact</a>
        </div>
    <?php endif; ?>
>>>>>>> master
</header>