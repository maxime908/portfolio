<<<<<<< HEAD
<?php 
    session_start();
    require_once(__DIR__ . "/../config/config.php");
    require_once(__DIR__ . "/../config/variables.php");
?>

<?php 
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["ERRORLOGIN"] = "L'email saisie n'est pas valide !";
            header('location: ../admin.php');
            return;
        }

        if (empty($email) || empty($password)) {
            $_SESSION["ERRORLOGIN"] = "Les champs ne peuvent pas être vide !";
            header('location: ../admin.php');
            return;
        }
        
        foreach ($users as $user) {
            if (password_verify($_POST['password'], $user['password']) && $email === $user['email']) {
                $_SESSION["LOGGED_USER"] = $user["email"];
                unset($_SESSION["ERRORLOGIN"]);
                header("location: ../admin.php");
            }
        }

        if (!isset($_SESSION['LOGGED_USER'])) {
            $_SESSION["ERRORLOGIN"] = "Tentative de connexion échouée !";
            header('location: ../admin.php');
            return;
        }
    }
=======
<?php 
    session_start();
    require_once(__DIR__ . "/../config/config.php");
    require_once(__DIR__ . "/../config/variables.php");
?>

<?php 
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["ERRORLOGIN"] = "L'email saisie n'est pas valide !";
            header('location: ../admin.php');
            return;
        }

        if (empty($email) || empty($password)) {
            $_SESSION["ERRORLOGIN"] = "Les champs ne peuvent pas être vide !";
            header('location: ../admin.php');
            return;
        }
        
        foreach ($users as $user) {
            if (password_verify($_POST['password'], $user['password']) && $email === $user['email']) {
                $_SESSION["LOGGED_USER"] = $user["email"];
                unset($_SESSION["ERRORLOGIN"]);
                header("location: ../admin.php");
            }
        }

        if (!isset($_SESSION['LOGGED_USER'])) {
            $_SESSION["ERRORLOGIN"] = "Tentative de connexion échouée !";
            header('location: ../admin.php');
            return;
        }
    }
>>>>>>> master
?>