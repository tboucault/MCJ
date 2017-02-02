<?php include('header.php'); ?>
<?php include('modals.php');
logged_only(); ?>
<body class="index" data-spy="scroll" data-target=".navbar">

<div class="fc-page-loader">
    <div class="fc-spinner">
        <div class="fc-spinner-front"><img src="img/loggo.png"></div>
        <div class="fc-spinner-back"><img src="img/loggo.png" ></div>
    </div>
</div><!-- .fc-page-loader -->

<?php include('contact.php');?>
<?php include('toast.php');?>
<section id="home"></section>

<header id="header">
    <nav id="mobile-menu" class="navbar" role="navigation">
        <a href="index.php" class="logo">
            <img src="img/loggo.png">
        </a><!-- .logo -->
        <a href="$main-menu"><i class="fa fa-reorder"></i></a>
    </nav><!-- .navbar -->
    <nav id="main-menu" class="navbar" role="navigation">
        <span class="navbar-bar"></span>
        <ul class="nav navbar-nav">
            <li class="logo-nav">
                <a href="index.php" class="logo">
                    <img src="img/loggo.png">
                </a><!-- .logo -->
            </li>
            <li><a href="index.php#home">Accueil</a></li>
            <li><a href="index.php#infos">Informations</a></li>
            <li><a href="index.php#programme">Programme</a></li>
            <li><a href="index.php#team">L'équipe</a></li>
            <li><a href="index.php#portfolio">Galerie</a></li>
            <li class="contact-nav"><a href="$contact">Contact</a></li>

            <?php if (isset($_SESSION['auth'])): ?>
                <li><a href="compte.php"><font color="yellow"><?= $_SESSION['auth']->prenom; ?></font></a>
                    <ul class="dropdown">
                        <li class='active'><a href="compte.php">Mon compte</a></li>
                        <li><a href="logout.php">Déconnexion</a></li>
                    </ul>
                </li>
            <?php else: ?>
                <li><a href="" data-toggle="modal" data-target="#LoginModal"><font color="yellow">Connexion</font></a></li>
            <?php endif; ?>
        </ul><!-- .navbar-nav -->
        <ul class="social-nav">
            <li><a href="#"><i class="icomoon-facebook"></i><span>Facebook</span></a></li>
            <li><a href="#"><i class="icomoon-twitter"></i><span>Twitter</span></a></li>
        </ul>
    </nav><!-- .navbar -->
</header><!-- #header -->


    <aside id="page-header-wrap" class="" >
        <div id="page-header">
            <div>

                <div class="container">
                    <h3>Bienvenue,  <?= $_SESSION['auth']->prenom; ?></h3>
                    <p class="lead">Voici votre compte</p>

                </div><!-- .container-->

            </div>
        </div><!-- #page-header -->
    </aside><!-- #page-header-wrap -->

    <div id="main" role="main">
        <div class="container">

            <div class="row">
                <div class="col-sm-4">

                    <section id="headings">
                        <div class="title title-main">
                            <h5>Vos informations</h5>
                        </div>
                        <div class="text">
                           <p><b>Prénom:</b> <?= $_SESSION['auth']->prenom; ?></p>
                            <p style="margin-top:-20px;"><b>Nom:</b> <?= $_SESSION['auth']->nom; ?></p>
                            <p style="margin-top:-20px;"><b>Adresse:</b> <?= $_SESSION['auth']->adresse; ?></p>
                            <p style="margin-top:-20px;"><b>Téléphone:</b> <?= $_SESSION['auth']->tel; ?></p>
                            <p style="margin-top:-20px;"><b>Instrument:</b> <?= $_SESSION['auth']->instrument; ?></p>
                            <p style="margin-top:-20px;"><b>Niveau:</b> <?= $_SESSION['auth']->niveau; ?></p>
                            <p style="margin-top:-20px;"><b>Navette:</b> <?= $_SESSION['auth']->navette; ?></p>
                            <p style="margin-top:-20px;"><b>Accompagné:</b> <?= $_SESSION['auth']->accompagne; ?></p>
                            <?php /*<p><a data-toggle="modal" data-target="#ChangeInfos">Changer vos informations personnelles</a></p>*/ ?>
                            <p style="margin-top:-20px;"><a data-toggle="modal" data-target="#ChangePass">Changer votre mot de passe</a></p>
                        </div>
                    </section><!-- #headings -->

                </div><!-- .col-sm-4 -->
                <div class="col-sm-8">

                    <section id="body-copy">
                        <div class="title title-main">
                            <h5>Voici les différentes activités auxquelles vous participez:</h5>
                        </div>

                        <div class="fc-tab" data-options='{ "animation" : "slide", "fullWidth" : true }'>
                            <ul class="fc-tab-heading">
                                <li class="current"><h6>Cours</h6></li>
                                <li><h6>Jams</h6></li>
                            </ul><!-- .fc-tab-heading -->
                            <div class="fc-tab-content">
                                <div class="current">
                                    <div class="text">

                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Jour</th>
                                                <th>Instrument</th>
                                                <th>Professeur</th>
                                            </tr>
                                            </thead>
                                            <tbody id="compte_cours">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div>
                                    <div class="text">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Jour</th>
                                                <th>Instrument</th>
                                                <th>Standard</th>
                                            </tr>
                                            </thead>
                                            <tbody id="compte_jams">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div><!-- .fc-tab-content -->
                        </div><!-- .fc-tab -->

                    </section><!-- #body-copy -->

                </div><!-- .col-sm-8 -->
            </div><!-- .row -->
            </div>
        </div>
<?php include('footer.php'); ?>