<?php
session_start();
if(!empty($_POST) && !empty($_POST['email'])){
    require_once 'inc/db.php';
    require_once 'inc/functions.php';
    $req = $pdo->prepare('SELECT * FROM users WHERE email = ? AND confirmed_at IS NOT NULL');
    $req->execute([$_POST['email']]);
    $user = $req->fetch();
    if($user){
        $reset_token = str_random(60);
        $pdo->prepare('UPDATE users SET reset_token = ?, reset_at = NOW() WHERE id = ?')->execute([$reset_token, $user->id]);
        $_SESSION['toast']['success'] = 'Les instructions du rappel de mot de passe vous ont été envoyées par email';
        mail($_POST['email'], 'Réinitiatilisation de votre mot de passe', "Afin de réinitialiser votre mot de passe merci de cliquer sur ce lien\n\nhttp://localhost/_/MCJ/reset.php?id={$user->id}&token=$reset_token");
        echo '<script type="text/javascript">window.location="index.php";</script>';
        exit();
    }else{
        $_SESSION['toast']['error'] = 'Aucun compte ne correspond à cet adresse';
        echo '<script type="text/javascript">window.location="index.php";</script>';
        exit();
    }
}
?>
