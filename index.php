<?php include('header.php'); ?>
<?php include('modals.php'); ?>
<?php include('toast.php'); ?>

    <body class="index" data-spy="scroll" data-target=".navbar">

<div class="fc-page-loader">
    <div class="fc-spinner">
        <div class="fc-spinner-front"><img src="img/loggo.png"></div>
        <div class="fc-spinner-back"><img src="img/loggo.png"></div>
    </div>
</div>
<!-- .fc-page-loader -->

<?php include('contact.php'); ?>

<section id="home"></section>

<header id="header">
    <nav id="mobile-menu" class="navbar" role="navigation">
        <a href="index.php" class="logo">
            <img src="img/loggo.png">
        </a><!-- .logo -->
        <a href="$main-menu"><i class="fa fa-reorder"></i></a>
    </nav>
    <!-- .navbar -->
    <nav id="main-menu" class="navbar" role="navigation">
        <span class="navbar-bar"></span>
        <ul class="nav navbar-nav">
            <li class="logo-nav">
                <a href="index.php" class="logo">
                    <img src="img/loggo.png">
                </a><!-- .logo -->
            </li>
            <li><a href="#home">Accueil</a></li>
			<li><a href="#infos">Informations</a></li>
            <li><a href="#programme">Programme</a></li>
            <li><a href="#team">L'équipe</a></li>
            <li><a href="#portfolio">Galerie</a></li>
            <li class="contact-nav"><a href="$contact">Contact</a></li>

            <?php if (isset($_SESSION['auth'])): ?>
                <li><a href="compte.php"><font color="yellow"><?= $_SESSION['auth']->prenom; ?></font></a>
                    <ul class="dropdown">
                        <li><a href="compte.php">Mon compte</a></li>
                        <li><a href="logout.php">Déconnexion</a></li>
                    </ul>
                </li>
            <?php else: ?>
                <li><a href="" data-toggle="modal" data-target="#LoginModal"><font color="yellow">Connexion</font></a>
                </li>
            <?php endif; ?>
        </ul>
        <!-- .navbar-nav -->
        <ul class="social-nav">
            <li><a href="#"><i class="icomoon-facebook"></i><span>Facebook</span></a></li>
            <li><a href="#"><i class="icomoon-twitter"></i><span>Twitter</span></a></li>
        </ul>
    </nav>
    <!-- .navbar -->
</header>
<!-- #header -->

<div id="page-slider-wrap" class="fc-hidden-nav bg-color-invert">
    <div id="page-slider">
        <ul>
            <!-- slide 1 -->
            <li data-transition="fade" data-masterspeed="500">
                <img src="img/1.jpg" alt="slide1" data-bgfit="cover" data-bgposition="center center"
                     data-bgrepeat="no-repeat">
            </li>
            <!-- slide 2 -->
            <li data-transition="fade" data-masterspeed="500">
                <img src="img/2.jpg" alt="slide2" data-bgfit="cover" data-bgposition="center center"
                     data-bgrepeat="no-repeat">
            </li>
        </ul>
        <div class="tp-bannertimer"></div>
    </div>
    <!-- #page-slider -->
</div>
<!-- #page-slider-wrap -->

<div id="main" role="main">
    <div class="container">
        <section class="fc-section bg-white" id="infos">
			<div class="title title-section">
				<div class="separator"><i class="fa icomoon-newspaper"></i></div>
				<h2>Nos prestations</h2>
			</div>

            <div class="row">
                <div class="col-sm-8">

                    <div class="title title-border-small">
                        <h4>Master Class Jazz</h4>
                    </div>
                    <div class="text">
                        <p>Vous êtes musicien amateur désireux de parfaire votre niveau et de rencontrer des artistes de
                            renommée internationale? Parfait! Les stages de formation musicale organisés sont faits pour
                            vous... Découvrez notre programme des stages & master classes jazz pour cette saison</p>

                    </div>

                </div>
                <!-- .col-sm-8 -->
                <div class="col-sm-4">

                    <div class="title title-border-small">
                        <h4>Formations</h4>
                    </div>
                    <div class="text">
                        <ul class="circle">
                            <li>Piano</li>
                            <li>Guitare</li>
                            <li>Chant</li>
                            <li>Contrebasse</li>
                            <li>Cuivres</li>
                            <li>Percussions</li>
                        </ul>
                    </div>

                </div>
                <!-- .col-sm-4 -->
            </div>

			<div class="title title-border-small">
				<h4>Tarifs</h4>
			</div>

			<div class="col-sm-4">


				<div class="fc-pricing-table bg-teal">
					<div class="fc-pricing-table-heading bg-color-invert">
						<div class="title"><h3>Stage (instrument)</h3></div>
						<div class="price"><h4><sup><small>€</small></sup><b>130</b><sup><small>la semaine</small></sup></h4></div>
					</div><!-- .fc-pricing-table-heading -->
					<div class="fc-pricing-table-content">
						<ul>
							<li><span><b>3h x 5j</b><br/><small>15h de formations</small></span></li>
							<li><span><b>Participation au concert</b></span></li>
							<li><span>Piano</span></li>
							<li><span>Guitare</span></li>
							<li><span>Contrebasse</span></li>
							<li><span>Cuivres</span></li>
							<li><span>Percussions</span></li>
						</ul>
					</div><!-- .fc-pricing-table-content -->
				</div><!-- .fc-pricing-table -->


			</div><!-- .col-sm-3 -->

			<div class="col-sm-4">


				<div class="fc-pricing-table bg-teal">
					<div class="fc-pricing-table-heading bg-color-invert">
						<div class="title"><h3>Stage (chant)</h3></div>
						<div class="price"><h4><sup><small>€</small></sup><b>100</b><sup><small>la semaine</small></sup></h4></div>
					</div><!-- .fc-pricing-table-heading -->
					<div class="fc-pricing-table-content">
						<ul>
							<li><span><b>2h x 5j</b><br/><small>10h de formations</small></span></li>
							<li><span><b>Participation au concert</b></span></li>
							<li><span>Chant</span></li>
							<li><span>-</span></li>
							<li><span>-</span></li>
							<li><span>-</span></li>
							<li><span>-</span></li>
						</ul>
					</div><!-- .fc-pricing-table-content -->
				</div><!-- .fc-pricing-table -->


			</div><!-- .col-sm-3 -->
			<div class="col-sm-4">


				<div class="fc-pricing-table bg-blue ">
					<div class="fc-pricing-table-heading bg-color-invert">
						<div class="title"><h3>Concert</h3></div>
						<div class="price"><h4><sup><small>€</small></sup><b>20</b></h4></div>
					</div><!-- .fc-pricing-table-heading -->
					<div class="fc-pricing-table-content">
						<ul>
							<li><span><b>Chaque soir</b><br/><small>Plus de 3h de concert</small></span></li>
							<li><span>Accès au public</span></li>
							<li><span>Une consomations offerte sur place</span></li>
							<li><span>Places réservées</span></li>
							<li><span>-</span></li>
							<li><span>-</span></li>
							<li><span>-</span></li>
						</ul>
					</div><!-- .fc-pricing-table-content -->
				</div><!-- .fc-pricing-table -->


			</div><!-- .col-sm-3 -->
            <!-- .row -->

        </section>
        <?php include('programme.php'); ?>


        <section class="fc-section bg-azure bg-color-invert" id="team">

            <div class="title title-section">
                <div class="separator"><i class="fa fa-group"></i></div>
                <h2>Découvrez notre équipe !</h2>
            </div>
            <!-- .title-section-->

            <div class="fc-section-full-width fc-no-margins">
                <div class="row">
                    <div class="col-md-6" data-animate="flipInX">

                        <div class="fc-member" style="background-image:url(img/avatar1.jpg)">
                            <div class="fc-member-image" style="background-image:url(img/avatar1.jpg)"></div>
                            <div class="fc-member-info bg-white bg-color-reset">
                                <div class="title title-main">
                                    <h4>Adam Thomson</h4>

                                    <p>Piano</p>
                                </div>
                                <div class="text">
                                    <p>Professeur depuis 6 ans, Adam excelle dans le jazz qui est sa passion.Venez
                                        profiter de son exepertise dans ce domaine
                                        et progressez à votre rythme.</p>
                                </div>
                                <ul class="fc-member-share">
                                    <li><a href="#" class="share-twitter btn-azure"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="share-facebook btn-blue"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="share-facebook btn-black"><i class="fa">CV</i></a></li>

                                </ul>
                                <!-- .fc-member-share -->
                            </div>
                            <!-- .fc-member-info -->
                        </div>
                        <!-- .fc-member -->

                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-6" data-animate="flipInX">

                        <div class="fc-member" style="background-image:url(img/avatar4.png)">
                            <div class="fc-member-image" style="background-image:url(img/avatar4.png)"></div>
                            <div class="fc-member-info bg-white bg-color-reset">
                                <div class="title title-main">
                                    <h4>Lilly Duate</h4>

                                    <p>Contrebasse</p>
                                </div>
                                <div class="text">
                                    <p>Doyenne du club, avec plus de 12 ans de participations aux jams, elle vous fera
                                        partager les valeurs et rythme du jazz!</p>
                                </div>
                                <ul class="fc-member-share">
                                    <li><a href="#" class="share-twitter btn-azure"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="share-facebook btn-blue"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="share-facebook btn-black"><i class="fa">CV</i></a></li>
                                </ul>
                                <!-- .fc-member-share -->
                            </div>
                            <!-- .fc-member-info -->
                        </div>
                        <!-- .fc-member -->

                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-md-6" data-animate="flipInX">

                        <div class="fc-member" style="background-image:url(img/avatar5.png)">
                            <div class="fc-member-image" style="background-image:url(img/avatar5.png)"></div>
                            <div class="fc-member-info bg-white bg-color-reset">
                                <div class="title title-main">
                                    <h4>John Aner</h4>

                                    <p>Cuivres</p>
                                </div>
                                <div class="text">
                                    <p>Super prof !</p>
                                </div>
                                <ul class="fc-member-share">
                                    <li><a href="#" class="share-twitter btn-azure"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="share-facebook btn-blue"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="share-facebook btn-black"><i class="fa">CV</i></a></li>
                                </ul>
                                <!-- .fc-member-share -->
                            </div>
                            <!-- .fc-member-info -->
                        </div>
                        <!-- .fc-member -->

                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-6" data-animate="flipInX">

                        <div class="fc-member" style="background-image:url(img/avatar2.png)">
                            <div class="fc-member-image" style="background-image:url(img/avatar2.png)"></div>
                            <div class="fc-member-info bg-white bg-color-reset">
                                <div class="title title-main">
                                    <h4>Mary Williams</h4>

                                    <p>Percussion</p>
                                </div>
                                <div class="text">
                                    <p>Figure emblématique, Mary partage avec passions ses valeurs et sa passion pour la
                                        musique.</p>
                                </div>
                                <ul class="fc-member-share">
                                    <li><a href="#" class="share-twitter btn-azure"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="share-facebook btn-blue"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="share-facebook btn-black"><i class="fa">CV</i></a></li>
                                </ul>
                                <!-- .fc-member-share -->
                            </div>
                            <!-- .fc-member-info -->
                        </div>
                        <!-- .fc-member -->

                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-md-6" data-animate="flipInX">

                        <div class="fc-member" style="background-image:url(img/avatar3.png)">
                            <div class="fc-member-image" style="background-image:url(img/avatar3.png)"></div>
                            <div class="fc-member-info bg-white bg-color-reset">
                                <div class="title title-main">
                                    <h4>Jacques Prevert</h4>

                                    <p>Chant</p>
                                </div>
                                <div class="text">
                                    <p>Ancien professeur au conservatoire de Paris, maniez le chant sans secrets !</p>
                                </div>
                                <ul class="fc-member-share">
                                    <li><a href="#" class="share-twitter btn-azure"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="share-facebook btn-blue"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="share-facebook btn-black"><i class="fa">CV</i></a></li>
                                </ul>
                                <!-- .fc-member-share -->
                            </div>
                            <!-- .fc-member-info -->
                        </div>
                        <!-- .fc-member -->

                    </div>
                    <!-- .col-md-6 -->
                    <div class="col-md-6" data-animate="flipInX">

                        <div class="fc-member" style="background-image:url(img/avatar1.jpg)">
                            <div class="fc-member-image" style="background-image:url(img/avatar1.jpg)"></div>
                            <div class="fc-member-info bg-white bg-color-reset">
                                <div class="title title-main">
                                    <h4>Emilien Dutron</h4>

                                    <p>Guitare</p>
                                </div>
                                <div class="text">
                                    <p>Lui aussi c'est un super prof!</p>
                                </div>
                                <ul class="fc-member-share">
                                    <li><a href="#" class="share-twitter btn-azure"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="share-facebook btn-blue"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="share-facebook btn-black"><i class="fa">CV</i></a></li>
                                </ul>
                                <!-- .fc-member-share -->
                            </div>
                            <!-- .fc-member-info -->
                        </div>
                        <!-- .fc-member -->

                    </div>
                    <!-- .col-md-6 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .fc-section-full-width -->

        </section>
       

        <section class="fc-section bg-grey " id="portfolio">

            <div class="title title-section">
                <h2>Galerie</h2>

                <div class="separator"><i class="fa fa-camera-retro"></i></div>
                <p>Retrouvez nos photos et vidéos des différents jams</p>
            </div>
            <!-- .title-section -->

            <aside class="fc-filter" id="projects-filter" data-grid="#projects-grid">
                <div class="fc-filter-heading">

                    <span class="sort-title">Classer par</span>

                    <a class="btn btn-round btn-icon"><i class="icomoon-menu2"></i></a>
                    <span class="fc-filter-text">Tout</span>

                </div>
                <!-- .fc-filter-heading -->
                <div class="fc-filter-content">

                    <div class="title">
                        <h5>Selectionnez un filtre ci-dessous</h5>
                    </div>
                    <a href="#" class="fc-close"><i class="fa fa-times"></i></a>
                    <hr class="devider"/>
                    <div class="row">
                        <div class="col-sm-12">

                            <ul>
                                <li><a href="*" class="active"><font color="black">Tous</font></a></li>
                                <li><a href=".2016"><font color="black">2016</font></a></li>
                                <li><a href=".2015"><font color="black">2015</font></a></li>
                                <li><a href=".2014"><font color="black">2014</font></a></li>
                                <li><a href=".2013"><font color="black">2013</font></a></li>
                                <li><a href=".video"><font color="black">Vidéo</font></a></li>
                            </ul>

                        </div>
                        <!-- .col-sm-12 -->
                    </div>
                    <!-- .row -->

                </div>
                <!-- .fc-filter-content -->
            </aside>
            <!-- .fc-filter -->
            <div class="fc-section-full-width fc-no-margins">

                <div class="fc-grid-wrap">
                    <div id="projects-grid" class="fc-grid col-2">

						<a class="fc-article article-project project-grid video illustration"
						   href="" data-toggle="modal" data-target="#Video1" data-animate="flipInX">
                           <div class="row">
                                <div class="col-md-6">
                                    <div class="fc-article-heading">
                                        <span><i class="fa fa-plus"></i></span>
                                        <img src="img/island_sunrise_banner.jpg">
                                    </div>
									</div>
                                    <!-- .fc-article-heading -->

                                    <div class="col-md-6">

                                        <div class="fc-article-content bg-white bg-color-reset">
                                            <div class="title">
                                                <h2>Titre video</h2>
                                                <h5><b>Video</b></h5>
                                            </div>
                                            <div class="text">
                                                <p>Description</p>
                                            </div>
                                        </div>
                                        <!-- .fc-article-content -->

                                    </div>
                            </div>
                        </a><!-- .fc-article -->
                        <a class="fc-article article-project project-grid 2014 illustration"
                           href="img/portfolio/2.jpg" data-modal="fancybox" data-fancybox-group="modal"
                           data-animate="flipInX">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="fc-article-heading">
                                        <span><i class="fa fa-plus"></i></span>
                                        <img src="img/portfolio/2.jpg" alt="Demo Image">
                                    </div>
									</div>
                                    <!-- .fc-article-heading -->

                                    <div class="col-md-6">

                                        <div class="fc-article-content bg-white bg-color-reset">
                                            <div class="title">
                                                <h2>Titre image</h2>
                                                <h5><b>2014</b></h5>
                                            </div>
                                            <div class="text">
                                                <p>Description</p>
                                            </div>
                                        </div>
                                        <!-- .fc-article-content -->

                                    </div>
                            </div>
                        </a><!-- .fc-article -->
                        <a class="fc-article article-project project-grid 2016 design" href="img/portfolio/3.jpg"
                           data-modal="fancybox" data-fancybox-group="modal" data-animate="flipInX">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="fc-article-heading">
                                        <span><i class="fa fa-plus"></i></span>
                                        <img src="img/portfolio/3.jpg" alt="Demo Image">
                                    </div>
									</div>
                                    <!-- .fc-article-heading -->

                                    <div class="col-md-6">

                                        <div class="fc-article-content bg-white bg-color-reset">
                                            <div class="title">
                                                <h2>Titre image</h2>
                                                <h5><b>2016</b></h5>
                                            </div>
                                            <div class="text">
                                                <p>Description</p>
                                            </div>
                                        </div>
                                        <!-- .fc-article-content -->

                                    </div>
                            </div>
                        </a><!-- .fc-article -->
                        <a class="fc-article article-project project-grid photography 2013 illustration"
                           href="img/portfolio/4.jpg" data-modal="fancybox" data-fancybox-group="modal"
                           data-animate="flipInX">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="fc-article-heading">
                                        <span><i class="fa fa-plus"></i></span>
                                        <img src="img/portfolio/4.jpg" alt="Demo Image">
                                    </div>
									</div>
                                    <!-- .fc-article-heading -->

                                    <div class="col-md-6">

                                        <div class="fc-article-content bg-white bg-color-reset">
                                            <div class="title">
                                                <h2>Titre image</h2>
                                                <h5><b>2013</b></h5>
                                            </div>
                                            <div class="text">
                                                <p>Description</p>
                                            </div>
                                        </div>
                                        <!-- .fc-article-content -->

                                    </div>
                            </div>
                        </a><!-- .fc-article -->
                        <a class="fc-article article-project project-grid illustration 2015 design"
                           href="img/portfolio/5.jpg" data-modal="fancybox" data-fancybox-group="modal"
                           data-animate="flipInX">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="fc-article-heading">
                                        <span><i class="fa fa-plus"></i></span>
                                        <img src="img/portfolio/5.jpg" alt="Demo Image">
                                    </div>
                                    <!-- .fc-article-heading -->

                                </div>
                                <div class="col-md-6">

                                    <div class="fc-article-content bg-white bg-color-reset">
                                        <div class="title">
                                            <h2>Titre image</h2>
                                            <h5><b>2015</b></h5>
                                        </div>
                                        <div class="text">
                                            <p>Description</p>
                                        </div>
                                    </div>
                                    <!-- .fc-article-content -->

                                </div>
                            </div>
                        </a><!-- .fc-article -->
                        <a class="fc-article article-project project-grid 2013 photography" href="img/portfolio/6.jpg"
                           data-modal="fancybox" data-fancybox-group="modal" data-animate="flipInX">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="fc-article-heading">
                                        <span><i class="fa fa-plus"></i></span>
                                        <img src="img/portfolio/6.jpg" alt="Demo Image">
                                    </div>
                                    <!-- .fc-article-heading -->

                                </div>
                                <div class="col-md-6">

                                    <div class="fc-article-content bg-white bg-color-reset">
                                        <div class="title">
                                            <h2>Titre image</h2>
                                            <h5><b>2013</b></h5>
                                        </div>
                                        <div class="text">
                                            <p>Description</p>
                                        </div>
                                    </div>
                                    <!-- .fc-article-content -->

                                </div>
                            </div>
                        </a><!-- .fc-article -->
                        <a class="fc-article article-project project-grid photography 2014" href="img/portfolio/7.jpg"
                           data-modal="fancybox" data-fancybox-group="modal" data-animate="flipInX">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="fc-article-heading">
                                        <span><i class="fa fa-plus"></i></span>
                                        <img src="img/portfolio/7.jpg" alt="Demo Image">
                                    </div>
                                    <!-- .fc-article-heading -->

                                </div>
                                <div class="col-md-6">

                                    <div class="fc-article-content bg-white bg-color-reset">
                                        <div class="title">
                                            <h2>Titre image</h2>
                                            <h5><b>2014</b></h5>
                                        </div>
                                        <div class="text">
                                            <p>Description</p>
                                        </div>
                                    </div>
                                    <!-- .fc-article-content -->

                                </div>
                            </div>
                        </a><!-- .fc-article -->
                        <a class="fc-article article-project project-grid animation 2016 photography"
                           href="img/portfolio/1.jpg" data-modal="fancybox" data-fancybox-group="modal"
                           data-animate="flipInX">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="fc-article-heading">
                                        <span><i class="fa fa-plus"></i></span>
                                        <img src="img/portfolio/1.jpg" alt="Demo Image">
                                    </div>
                                    <!-- .fc-article-heading -->

                                </div>
                                <div class="col-md-6">

                                    <div class="fc-article-content bg-white bg-color-reset">
                                        <div class="title">
                                            <h2>Titre image</h2>
                                            <h5><b>2016</b></h5>
                                        </div>
                                        <div class="text">
                                            <p>Description</p>
                                        </div>
                                    </div>
                                    <!-- .fc-article-content -->

                                </div>
                            </div>
                        </a><!-- .fc-article -->
                        <a class="fc-article article-project project-grid photography 2016" href="img/portfolio/3.jpg"
                           data-modal="fancybox" data-fancybox-group="modal" data-animate="flipInX">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="fc-article-heading">
                                        <span><i class="fa fa-plus"></i></span>
                                        <img src="img/portfolio/3.jpg" alt="Demo Image">
                                    </div>
                                    <!-- .fc-article-heading -->

                                </div>
                                <div class="col-md-6">

                                    <div class="fc-article-content bg-white bg-color-reset">
                                        <div class="title">
                                            <h2>Titre image</h2>
                                            <h5><b>2016</b></h5>
                                        </div>
                                        <div class="text">
                                            <p>Description</p>
                                        </div>
                                    </div>
                                    <!-- .fc-article-content -->

                                </div>
                            </div>
                        </a><!-- .fc-article -->
                        <a class="fc-article article-project project-grid illustration 2014"
                           href="img/portfolio/5.jpg" data-modal="fancybox" data-fancybox-group="modal"
                           data-animate="flipInX">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="fc-article-heading">
                                        <span><i class="fa fa-plus"></i></span>
                                        <img src="img/portfolio/5.jpg" alt="Demo Image">
                                    </div>
                                    <!-- .fc-article-heading -->

                                </div>
                                <div class="col-md-6">

                                    <div class="fc-article-content bg-white bg-color-reset">
                                        <div class="title">
                                            <h2>Titre image</h2>
                                            <h5><b>2014</b></h5>
                                        </div>
                                        <div class="text">
                                            <p>Description</p>
                                        </div>
                                    </div>
                                    <!-- .fc-article-content -->

                                </div>
                            </div>
                        </a><!-- .fc-article -->
                    </div>
                    <!-- .fc-grid -->
                </div>
                <!-- .fc-grid-wrap -->

            </div>
            <!-- .fc-section-full-width -->

        </section>
        

    </div>
    <!-- .container -->
</div>
<!-- #main -->
<?php include('footer.php'); ?>