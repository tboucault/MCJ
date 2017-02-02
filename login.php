<!-- modal connexion form -->
<?php
require 'inc/functions.php';
require 'inc/db.php';
reconnect_from_cookie();
if (!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {

    $req = $pdo->prepare('SELECT * FROM users WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL');
    $req->execute(['username' => $_POST['username']]);
    $user = $req->fetch();

    if (password_verify($_POST['password'], $user->password)) {
        $_SESSION['auth'] = $user;
        $_SESSION['toast']['success'] = 'Vous êtes maintenant connecté';
        echo '<script type="text/javascript">window.location="compte.php";</script>';
        exit();
    } else {
        $_SESSION['toast']['error'] = 'Identifiant ou mot de passe incorrect';
        echo '<script type="text/javascript">window.location="index.php";</script>';
        exit();
    }
}
?>