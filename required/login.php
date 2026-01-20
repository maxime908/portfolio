<?php if (!isset($_SESSION['LOGGED_USER'])): ?>
    <section id="login">
        <form action="compte/submitLogin.php" method="POST">
            <?php if (isset($_SESSION['ERRORLOGIN'])): ?>
                <div class="alert danger-alert robotoMono">
                    <?php echo $_SESSION["ERRORLOGIN"]; ?>
                </div>
            <?php endif; ?>

            <h1 class="robotoMono">Heureux de vous revoir !</h1>
            <div class="email">
                <label for="email" class="robotoMono"><strong>Email</strong></label>
                <input type="email" id="email" name="email" placeholder="Entrez votre adresse email" class="robotoMono">
            </div>
            <div class="password">
                <label for="password" class="robotoMono"><strong>Mot de passe</strong></label>
                <input type="password" id="password" name="password" placeholder="Entrez votre Mot de passe" class="robotoMono">
            </div>
            <div class="perspective-button">
                <button type="submit" class="button column color-1 cursor-pointer SpaceNova">
                    <div class="button color-1"></div>
                    <p class="GearsOfPeace">SE CONNECTER</p>
                </button>
            </div>
        </form>
    </section>
<?php endif; ?>