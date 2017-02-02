<?php
require_once 'inc/functions.php';
require_once 'inc/db.php';
session_start();
if(!empty($_POST)){

    $errors = array();

    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){
        $errors['username'] = "Votre pseudo n'est pas valide (alphanumérique)";
        $_SESSION['toast']['error'] = 'Votre identifiant est invalide (alphanumérique)';
    } else {
        $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');
        $req->execute([$_POST['username']]);
        $user = $req->fetch();
        if($user){
            $errors['username'] = 'Ce pseudo est déjà pris';
            $_SESSION['toast']['error'] = 'Cet identifiant est déjà pris';
        }
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Votre email n'est pas valide";
        $_SESSION['toast']['error'] = 'Votre email est invalide';
    } else {
        $req = $pdo->prepare('SELECT id FROM users WHERE email = ?');
        $req->execute([$_POST['email']]);
        $user = $req->fetch();
        if($user){
            $errors['email'] = 'Cet email est déjà utilisé pour un autre compte';
            $_SESSION['toast']['error'] = 'Cet email est déjà utilisé pour un autre compte';
        }
    }

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $errors['password'] = "Vous devez rentrer un mot de passe valide";
        $_SESSION['toast']['error'] = 'Vous devez rentrer un mot de passe valide';
    }

    if(empty($_POST['lvl'])){
        $errors['niveau'] = "Vous devez choisir votre niveau";
        $_SESSION['toast']['error'] = 'Vous devez choisir votre niveau';
    }

    if(empty($_POST['adresse'])){
        $errors['adresse'] = "Vous devez saisir votre adresse";
        $_SESSION['toast']['error'] = 'Vous devez saisir votre adresse';
    }

    if(empty($_POST['tel'])){
        $errors['tel'] = "Vous devez saisir votre téléphone";
        $_SESSION['toast']['error'] = 'Vous devez saisir votre téléphone';
    }

    if(empty($_POST['instrument'])){
        $errors['niveau'] = "Vous devez choisir votre instrument";
        $_SESSION['toast']['error'] = 'Vous devez choisir votre instrument';
    }

    if(empty($errors)){

        $req = $pdo->prepare("INSERT INTO users SET username = ?, password = ?, email = ?, confirmation_token = ?, prenom = ?, nom = ?, niveau = ?, instrument = ?, adresse = ?, tel = ?, access_level= '0'");
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token = str_random(60);
        $req->execute([$_POST['username'], $password, $_POST['email'], $token, $_POST['prenom'], $_POST['nom'], $_POST['lvl'], $_POST['instrument'],$_POST['adresse'],$_POST['tel'] ]);
        $user_id = $pdo->lastInsertId();
        mail($_POST['email'], 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://localhost/_/MCJ/confirm.php?id=$user_id&token=$token");
        $_SESSION['toast']['success'] = 'Un email de confirmation vous a été envoyé pour valider votre compte';
        echo '<script type="text/javascript">window.location="index.php";</script>';
        exit();
    }


}
?>