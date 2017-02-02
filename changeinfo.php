<?php
session_start();
if(!empty($_POST)) {
        require_once 'inc/db.php';
        $user_id = $_SESSION['auth']->id;
        $pdo->prepare('UPDATE users SET prenom = ?, nom = ?, instrument = ?, niveau= ?, adresse= ?, tel= ? WHERE id = ?')->execute([$_POST['prenom'],$_POST['nom'],$_POST['instrument'],$_POST['lvl'],$_POST['adresse'],$_POST['tel'], $user_id]);
        $_SESSION['auth']->prenom = $_POST['prenom'];
        $_SESSION['auth']->nom = $_POST['nom'];
        $_SESSION['auth']->instrument = $_POST['instrument'];
        $_SESSION['auth']->niveau = $_POST['lvl'];
        $_SESSION['auth']->adresse = $_POST['adresse'];
        $_SESSION['auth']->tel = $_POST['tel'];
        $_SESSION['toast']['success'] = "Vos informations ont bien été mis à jour";
        echo '<script type="text/javascript">window.location="compte.php";</script>';
        exit();
}
else{
    $_SESSION['toast']['warning'] = "Vous n'avez pas remplis tous les champs";
    echo '<script type="text/javascript">window.location="compte.php";</script>';
    exit();


}
?>