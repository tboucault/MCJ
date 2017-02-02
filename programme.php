<section class="fc-section" id="programme">

    <div class="title title-section">
        <h2>Programme hebdomadaire</h2>
        <div class="separator"><i class="fa fa-calendar"></i></div>
    </div><!-- .title-section -->


    <?php if (isset($_SESSION['auth'])): ?>
        <p><h5 align="center"><button type="button" class="btn btn-white">Bienvenue,  <?= $_SESSION['auth']->prenom; ?>. Vous pouvez vous inscrire aux cours et jams grâce à la liste suivante:</button></p></h5>
     <?php else: ?>
        <p><h5 align="center"><button type="button" class="btn btn-yellow">Vous devez vous connecter ou vous inscrire si vous n'avez pas de compte pour pouvoir participer à un cours ou un jams.</button></p></h5>
    <?php endif; ?>

    <div class="col-md-6">
        <h4 align="center">Cours</h4>
        <p align="center">Les <b>cours</b> sont dispensés tous les <b>matins</b> du <b>Lundi au Vendredi</b> inclus</p>


        <div class="fc-accordion" >
            <div class="active">
                <div class="fc-accordion-content">
                    <div class="text">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Cours</th>
                                <th>Heure</th>
                                <th>Inscrits</th>
                                <th>Professeur</th>
                                <?php if (isset($_SESSION['auth'])): ?>
                                    <th>S'inscrire</th>
                                <?php endif; ?>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Piano</td>
                                <td>9h-12h</td>
                                <td class="nb_piano">0/5</td>
                                <td>Adam</td>
                                <?php if (isset($_SESSION['auth'])): ?>
                                    <td><center><a href="" data-toggle="modal" class="fa fa-check" data-target="#CoursModalPiano"></a></center></td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td>Contrebasse</td>
                                <td>10h-13h</td>
                                <td class="nb_contrebasse">0/5</td>
                                <td>Lilly</td>
                                <?php if (isset($_SESSION['auth'])): ?>
                                    <td><center><a href="" data-toggle="modal" class="fa fa-check" data-target="#CoursModalContrebasse"></a></center></td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td>Cuivres</td>
                                <td>9h-12h</td>
                                <td class="nb_cuivres">0/5</td>
                                <td>John</td>
                                <?php if (isset($_SESSION['auth'])): ?>
                                    <td><center><a href="" data-toggle="modal" class="fa fa-check" data-target="#CoursModalCuivres"></a></center></td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td>Percussion</td>
                                <td>9h30-12h30</td>
                                <td class="nb_percussion">0/5</td>
                                <td>Mary</td>
                                <?php if (isset($_SESSION['auth'])): ?>
                                    <td><center><a href="" data-toggle="modal" class="fa fa-check" data-target="#CoursModalPercussion"></a></center></td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td>Chant</td>
                                <td>10h-12h</td>
                                <td class="nb_chant">0/5</td>
                                <td>Jacques</td>
                                <?php if (isset($_SESSION['auth'])): ?>
                                    <td><center><a href="" data-toggle="modal" class="fa fa-check" data-target="#CoursModalChant"></a></center></td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td>Guitare</td>
                                <td>9h-12h</td>
                                <td class="nb_guitare">0/5</td>
                                <td>Emilien</td>
                                <?php if (isset($_SESSION['auth'])): ?>
                                    <td><center><a href="" data-toggle="modal" class="fa fa-check" data-target="#CoursModalGuitare"></a></center></td>
                                <?php endif; ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div><!-- .fc-accordion-content -->
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <h4 align="center">Jams</h4>
        <p align="center">Les <b>jams</b> ont lieu chaque jours <b>à partir de 17h</b> du <b>lundi au dimanche</b> inclus.</p>

            <?php include('table_programme.php');?>

    </div>




</section>