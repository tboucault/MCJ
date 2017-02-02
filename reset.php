<?php include('header.php'); ?>
<?php include('modals.php'); ?>

<?php
session_start();
if(isset($_GET['id']) && isset($_GET['token'])){
    require_once 'inc/db.php';
    require_once 'inc/functions.php';
    $req = $pdo->prepare('SELECT * FROM users WHERE id = ? AND reset_token IS NOT NULL AND reset_token = ? AND reset_at > DATE_SUB(NOW(), INTERVAL 30 MINUTE)');
    $req->execute([$_GET['id'], $_GET['token']]);
    $user = $req->fetch();
    if($user){
        if(!empty($_POST)){
            if(!empty($_POST['password']) && $_POST['password'] == $_POST['password_confirm']){
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $pdo->prepare('UPDATE users SET password = ?, reset_at = NULL, reset_token = NULL WHERE id = ?')->execute([$password, $_GET['id']]);
                $_SESSION['toast']['success'] = 'Votre mot de passe a bien été modifié';
                $_SESSION['auth'] = $user;
                echo '<script type="text/javascript">window.location="compte.php";</script>';
                exit();
            }
        }
    }else{
        session_start();
        $_SESSION['flash']['error'] = "Ce token n'est pas valide";
        echo '<script type="text/javascript">window.location="index.php";</script>';
        exit();
    }
}else{
    echo '<script type="text/javascript">window.location="index.php";</script>';
    exit();
}
?>

<body class="index" data-spy="scroll" data-target=".navbar">

<div class="fc-page-loader">
    <div class="fc-spinner">
        <div class="fc-spinner-front"><img src="img/loggo.png"></div>
        <div class="fc-spinner-back"><img src="img/loggo.png" ></div>
    </div>
</div><!-- .fc-page-loader -->

<?php include('toast.php');?>

<aside id="page-header-wrap" class="" >
    <div id="page-header">
        <div>

            <div class="container">
                <p class="lead">Réinitialisez votre mot de passe</p>

            </div><!-- .container-->

        </div>
    </div><!-- #page-header -->
</aside><!-- #page-header-wrap -->


<div id="main" role="main">
    <div class="container">

        <div class="row">
            <form class="form-horizontal" method="post" action="">
                <div class="form-field">
                    <input class="form-control" type="password" placeholder="Mot de passe" name="password"
                           id="password" required/>
                </div>
                <div class="form-field">
                    <input type="password" name="password_confirm" placeholder="Confirmez votre mot de passe"
                           class="form-control" required/>
                </div>
                <button type="submit" class="btn btn-primary">Réinitialiser mon mot de passe</button>
            </form>
        </div>
    </div><!-- .row -->
</div>
<?php include('footer.php'); ?>