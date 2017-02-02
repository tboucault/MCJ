<?php
$user_id = $_GET['id'];
$token = $_GET['token'];
require 'inc/db.php';
$req = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$req->execute([$user_id]);
$user = $req->fetch();
session_start();

if($user && $user->confirmation_token == $token ){
    $pdo->prepare('UPDATE users SET confirmation_token = NULL, confirmed_at = NOW() WHERE id = ?')->execute([$user_id]);
    $_SESSION['toast']['success'] = 'Votre compte a bien été validé';
    $_SESSION['auth'] = $user;
    echo '<script type="text/javascript">window.location="compte.php";</script>';
}else{
    $_SESSION['toast']['error'] = 'Ce token est invalide';
    echo '<script type="text/javascript">window.location="index.php";</script>';
}