<?php
session_start();

if(!empty($_POST)){
    $errors = array();
    require_once 'inc/db.php';
    $req = $pdo->prepare('SELECT id FROM event WHERE nom = ? AND jour = ?');
    $req->execute([$_POST['nom'],$_POST['jour']]);
    $user = $req->fetch();
    if($user){
        $errors['nom'] = 'Vous êtes déjà inscrit à ce jams';
        $_SESSION['toast']['error'] = 'Vous êtes déjà inscrit à ce jams';
        echo '<script type="text/javascript">window.location="index.php#programme";</script>';
        exit();
    }
    // pas d'erreurs on continue
    if(empty($errors)){
        $req = $pdo->prepare("INSERT INTO event SET nom = ?, jour = ?, instrument = ?, standard = ?, type = 'jams' ");
        $req->execute([$_POST['nom'], $_POST['jour'], $_POST['instrument'], $_POST['standard']]);
        $_SESSION['toast']['success'] = 'Inscription au jams effectuée avec succés';
        echo '<script type="text/javascript">window.location="index.php#programme";</script>';
        exit();
    }


}
?>