<?php
session_start();

if(!empty($_POST)){

    $errors = array();
    require_once 'inc/db.php';
    $req = $pdo->prepare("SELECT id FROM event WHERE nom = ? and type='cours'");
    $req->execute([$_SESSION['auth']->nom]);
    $user = $req->fetch();
    if($user){
        $errors['nom'] = 'Vous êtes déjà inscrit à un cours';
        $_SESSION['toast']['error'] = 'Vous êtes déjà inscrit à un cours';
        echo '<script type="text/javascript">window.location="index.php#programme";</script>';
        exit();
    }

    $req2 = $pdo->prepare("SELECT * FROM event WHERE instrument= ? and type='cours'");
    $req2->execute([$_POST['instrument']]);
    $resp = $req2->rowCount();
    if($resp>='5'){
        $errors['nb'] = 'Ce cours est complet';
        $_SESSION['toast']['error'] = 'Ce cours est complet';
        echo '<script type="text/javascript">window.location="index.php#programme";</script>';
        exit();
    }
    // pas d'erreurs on continue
    if(empty($errors)){
        $req = $pdo->prepare("INSERT INTO event SET jour= 'semaine', nom = ?, instrument = ?, professeur = ?, type = 'cours' ");
        $req->execute([$_SESSION['auth']->nom, $_POST['instrument'], $_POST['professeur']]);
        $_SESSION['toast']['success'] = 'Inscription au cours effectuée avec succés';
        echo '<script type="text/javascript">window.location="index.php#programme";</script>';
        exit();
    }


}
?>