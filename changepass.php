<?php
session_start();
if(!empty($_POST)) {

    if (empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']) {
        $_SESSION['toast']['warning'] = "Les mots de passe ne correspondent pas";
        echo '<script type="text/javascript">window.location="compte.php";</script>';
        exit();
    } else {
        require_once 'inc/db.php';
        $user_id = $_SESSION['auth']->id;
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $pdo->prepare('UPDATE users SET password = ? WHERE id = ?')->execute([$password, $user_id]);
        $_SESSION['toast']['success'] = "Votre mot de passe a bien été mis à jour";
        echo '<script type="text/javascript">window.location="compte.php";</script>';
        exit();
    }
}
?>