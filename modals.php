<!-- login form -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Connexion</h4>

            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="login.php">

                    <div class="form-field">
                        <input class="form-control" type="text" maxlength="100" placeholder="Identifiant"
                               name="username" id="name" minlength="2" required/>
                    </div>
                    <!-- .form-field -->
                    <div class="form-field">
                        <input class="form-control" type="password" placeholder="Mot de passe" name="password"
                               id="password" required/>
                        <a data-toggle="modal" data-target=".ForgetModal">J'ai oublié mon mot de passe</a>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Se connecter</button>
                <button type="button" data-toggle="modal" data-target=".RegisterModal" class="btn btn-primary">
                    S'inscrire
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- mot de passe oublié form -->
<div class="modal fade ForgetModal" id="ForgetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Mot de passe oublié</h4>

            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="forget.php">
                    <div class="form-field">
                        <input type="text" name="email" placeholder="Email" class="form-control" required/>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Réinitialiser mon mot de passe</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- register modal form -->
<div class="modal fade RegisterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Inscription</h4>

            </div>
            <div class="modal-body">

                <form action="register.php" method="POST">
                    <div class="col-sm-6">
                        <div class="form-field">
                            <input type="text" name="username" placeholder="Identifiant" class="form-control" required/>
                        </div>
                        <div class="form-field">
                            <input type="text" name="email" placeholder="Email" class="form-control" required/>
                        </div>
                        <div class="form-field">
                            <input class="form-control" type="password" placeholder="Mot de passe" name="password"
                                   id="password" required/>
                        </div>
                        <div class="form-field">
                            <input type="password" name="password_confirm" placeholder="Confirmez votre mot de passe"
                                   class="form-control" required/>
                        </div>
                        <div class="form-field">
                            <input type="text" name="prenom" placeholder="Prénom" class="form-control" required/>
                        </div>
                        <div class="form-field">
                            <input type="text" name="nom" placeholder="Nom" class="form-control" required/>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-field">
                            <input type="text" name="adresse" placeholder="Adresse"
                                   class="form-control" required/>
                        </div>
                        <div class="form-field">
                            <input type="text" name="tel" placeholder="Téléphone"
                                   class="form-control" required/>
                        </div>
                        <div class="form-field">
                            <select id="select" name="instrument">
                                <option value="">Sélectionnez votre instrument</option>
                                <option value="piano">Piano</option>
                                <option value="guitare">Guitare</option>
                                <option value="contrebasse">Contrebasse</option>
                                <option value="chant">Chant</option>
                                <option value="percussion">Percussions</option>
                                <option value="cuivres">Cuivres</option>
                            </select>
                        </div>
                        <div class="form-field">
                            <select id="select" name="lvl">
                                <option value="">Quel est votre niveau?</option>
                                <option value="debutant">Débutant</option>
                                <option value="intermediaire">Intermédiaire</option>
                                <option value="confirme">Confirmé</option>
                            </select>
                        </div>
                        <div class="form-field">
                            <select id="select" name="navette">
                                <option value="">Accès navette aéroport ?</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                        </div>
                        <div class="form-field">
                            <select id="select" name="accompagne">
                                <option value="">Êtes vous accompagné ?</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- cours modal contrebasse form -->
<div class="modal fade" id="CoursModalContrebasse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Inscription à un cours de contrebasse</h4>
            </div>
            <div class="modal-body">
                <p>Souhaitez-vous vous inscrire au cours de contrebasse avec les informations suivantes:</p>
                <table class="table table-colored">
                    <thead>
                    <tr>
                        <th>Jour</th>
                        <th>Nom</th>
                        <th>Instrument</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Lundi au vendredi</td>
                        <td><?= $_SESSION['auth']->nom; ?></td>
                        <td>Contrebasse</td>
                    </tr>
                    </tbody>
                </table>
                <form class="form-horizontal" method="post" action="registercours.php">
                    <input type="hidden" name="instrument" value="contrebasse">
                    <input type="hidden" name="professeur" value="lilly">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Oui, je m'inscrit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- cours modal chant form -->
<div class="modal fade" id="CoursModalChant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Inscription à un cours de chant</h4>
            </div>
            <div class="modal-body">
                <p>Souhaitez-vous vous inscrire au cours de chant avec les informations suivantes:</p>
                <table class="table table-colored">
                    <thead>
                    <tr>
                        <th>Jour</th>
                        <th>Nom</th>
                        <th>Instrument</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Lundi au vendredi</td>
                        <td><?= $_SESSION['auth']->nom; ?></td>
                        <td>Chant</td>
                    </tr>
                    </tbody>
                </table>
                <form class="form-horizontal" method="post" action="registercours.php">
                    <input type="hidden" name="instrument" value="chant">
                    <input type="hidden" name="professeur" value="jacques">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Oui, je m'inscrit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- cours modal cuivres form -->
<div class="modal fade" id="CoursModalCuivres" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Inscription à un cours de cuivres</h4>
            </div>
            <div class="modal-body">
                <p>Souhaitez-vous vous inscrire au cours de cuivres avec les informations suivantes:</p>
                <table class="table table-colored">
                    <thead>
                    <tr>
                        <th>Jour</th>
                        <th>Nom</th>
                        <th>Instrument</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Lundi au vendredi</td>
                        <td><?= $_SESSION['auth']->nom; ?></td>
                        <td>Cuivres</td>
                    </tr>
                    </tbody>
                </table>
                <form class="form-horizontal" method="post" action="registercours.php">
                    <input type="hidden" name="instrument" value="cuivres">
                    <input type="hidden" name="professeur" value="John">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Oui, je m'inscrit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- cours modal percussion form -->
<div class="modal fade" id="CoursModalPercussion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Inscription à un cours de percussion</h4>
            </div>
            <div class="modal-body">
                <p>Souhaitez-vous vous inscrire au cours de Percusions avec les informations suivantes:</p>
                <table class="table table-colored">
                    <thead>
                    <tr>
                        <th>Jour</th>
                        <th>Nom</th>
                        <th>Instrument</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Lundi au vendredi</td>
                        <td><?= $_SESSION['auth']->nom; ?></td>
                        <td>Percusions</td>
                    </tr>
                    </tbody>
                </table>
                <form class="form-horizontal" method="post" action="registercours.php">
                    <input type="hidden" name="instrument" value="percussion">
                    <input type="hidden" name="professeur" value="mary">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Oui, je m'inscrit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- cours modal guitare form -->
<div class="modal fade" id="CoursModalGuitare" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Inscription à un cours de guitare</h4>
            </div>
            <div class="modal-body">
                <p>Souhaitez-vous vous inscrire au cours de Guitare avec les informations suivantes:</p>
                <table class="table table-colored">
                    <thead>
                    <tr>
                        <th>Jour</th>
                        <th>Nom</th>
                        <th>Instrument</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Lundi au vendredi</td>
                        <td><?= $_SESSION['auth']->nom; ?></td>
                        <td>Guitare</td>
                    </tr>
                    </tbody>
                </table>
                <form class="form-horizontal" method="post" action="registercours.php">
                    <input type="hidden" name="instrument" value="Guitare">
                    <input type="hidden" name="professeur" value="emilien">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Oui, je m'inscrit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- cours modal piano form -->
<div class="modal fade" id="CoursModalPiano" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Inscription à un cours de piano</h4>
            </div>
            <div class="modal-body">
                <p>Souhaitez-vous vous inscrire au cours de Piano avec les informations suivantes:</p>
                <table class="table table-colored">
                    <thead>
                    <tr>
                        <th>Jour</th>
                        <th>Nom</th>
                        <th>Instrument</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Lundi au vendredi</td>
                        <td><?= $_SESSION['auth']->nom; ?></td>
                        <td>Piano</td>
                    </tr>
                    </tbody>
                </table>
                <form class="form-horizontal" method="post" action="registercours.php">
                    <input type="hidden" name="instrument" value="Piano">
                    <input type="hidden" name="professeur" value="adam">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Oui, je m'inscrit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- jams lundi modal -->
<div class="modal fade" id="JamsModalLundi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Inscription à un jams</h4>
            </div>
            <div class="modal-body">
                <p>Souhaitez-vous vous inscrire au jams du Lundi avec les informations suivantes:</p>
                <form class="form-horizontal" method="post" action="registerjams.php">
                <table class="table table-colored">
                    <thead>
                    <tr>
                        <th>Jour</th>
                        <th>Nom</th>
                        <th>Instrument</th>
                        <th>Standard</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Lundi</td>
                        <td><?= $_SESSION['auth']->nom; ?></td>
                        <td><select id="select" name="instrument">
                                <option value="">Choisissez l'instrument</option>
                                <option value="piano">Piano</option>
                                <option value="guitare">Guitare</option>
                                <option value="contrebasse">Contrebasse</option>
                                <option value="chant">Chant</option>
                                <option value="batterie">Batterie</option>
                                <option value="basse">Basse</option>
                                <option value="trompette">Trompette</option>
                                <option value="saxa">Sax alto</option>
                                <option value="saxt">Sax ténor</option>
                                <option value="saxs">Sax soprano</option>
                                <option value="buggle">Buggle</option>
                                <option value="flute">Flute</option>
                            </select></td>
                        <td><input type="text" name="standard" placeholder="Proposez un standard" required/></td>
                    </tr>
                    </tbody>
                </table>
                    <input type="hidden" name="jour" value="lundi">
                    <input type="hidden" name="nom" value="<?= $_SESSION['auth']->nom; ?>">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Oui, je participe</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- jams mardi modal -->
<div class="modal fade" id="JamsModalMardi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Inscription à un jams</h4>
            </div>
            <div class="modal-body">
                <p>Souhaitez-vous vous inscrire au jams du Mardi avec les informations suivantes:</p>
                <form class="form-horizontal" method="post" action="registerjams.php">
                    <table class="table table-colored">
                        <thead>
                        <tr>
                            <th>Jour</th>
                            <th>Nom</th>
                            <th>Instrument</th>
                            <th>Standard</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Mardi</td>
                            <td><?= $_SESSION['auth']->nom; ?></td>
                            <td><?= $_SESSION['auth']->instrument; ?></td>
                            <td><input type="text" name="standard" placeholder="Proposez un standard" required/></td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name="jour" value="mardi">
                    <input type="hidden" name="nom" value="<?= $_SESSION['auth']->nom; ?>">
                    <input type="hidden" name="instrument" value="<?= $_SESSION['auth']->instrument; ?>">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Oui, je participe</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- jams mercredi modal -->
<div class="modal fade" id="JamsModalMercredi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Inscription à un jams</h4>
            </div>
            <div class="modal-body">
                <p>Souhaitez-vous vous inscrire au jams du Mercredi avec les informations suivantes:</p>
                <form class="form-horizontal" method="post" action="registerjams.php">
                    <table class="table table-colored">
                        <thead>
                        <tr>
                            <th>Jour</th>
                            <th>Nom</th>
                            <th>Instrument</th>
                            <th>Standard</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Mercredi</td>
                            <td><?= $_SESSION['auth']->nom; ?></td>
                            <td><?= $_SESSION['auth']->instrument; ?></td>
                            <td><input type="text" name="standard" placeholder="Proposez un standard" required/></td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name="jour" value="mercredi">
                    <input type="hidden" name="nom" value="<?= $_SESSION['auth']->nom; ?>">
                    <input type="hidden" name="instrument" value="<?= $_SESSION['auth']->instrument; ?>">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Oui, je participe</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- jams jeudi modal -->
<div class="modal fade" id="JamsModalJeudi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Inscription à un jams</h4>
            </div>
            <div class="modal-body">
                <p>Souhaitez-vous vous inscrire au jams du Jeudi avec les informations suivantes:</p>
                <form class="form-horizontal" method="post" action="registerjams.php">
                    <table class="table table-colored">
                        <thead>
                        <tr>
                            <th>Jour</th>
                            <th>Nom</th>
                            <th>Instrument</th>
                            <th>Standard</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Jeudi</td>
                            <td><?= $_SESSION['auth']->nom; ?></td>
                            <td><?= $_SESSION['auth']->instrument; ?></td>
                            <td><input type="text" name="standard" placeholder="Proposez un standard" required/></td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name="jour" value="jeudi">
                    <input type="hidden" name="nom" value="<?= $_SESSION['auth']->nom; ?>">
                    <input type="hidden" name="instrument" value="<?= $_SESSION['auth']->instrument; ?>">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Oui, je participe</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- jams vendredi modal -->
<div class="modal fade" id="JamsModalVendredi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Inscription à un jams</h4>
            </div>
            <div class="modal-body">
                <p>Souhaitez-vous vous inscrire au jams du Vendredi avec les informations suivantes:</p>
                <form class="form-horizontal" method="post" action="registerjams.php">
                    <table class="table table-colored">
                        <thead>
                        <tr>
                            <th>Jour</th>
                            <th>Nom</th>
                            <th>Instrument</th>
                            <th>Standard</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Vendredi</td>
                            <td><?= $_SESSION['auth']->nom; ?></td>
                            <td><?= $_SESSION['auth']->instrument; ?></td>
                            <td><input type="text" name="standard" placeholder="Proposez un standard" required/></td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name="jour" value="vendredi">
                    <input type="hidden" name="nom" value="<?= $_SESSION['auth']->nom; ?>">
                    <input type="hidden" name="instrument" value="<?= $_SESSION['auth']->instrument; ?>">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Oui, je participe</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- jams samedi modal -->
<div class="modal fade" id="JamsModalSamedi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Inscription à un jams</h4>
            </div>
            <div class="modal-body">
                <p>Souhaitez-vous vous inscrire au jams du Samedi avec les informations suivantes:</p>
                <form class="form-horizontal" method="post" action="registerjams.php">
                    <table class="table table-colored">
                        <thead>
                        <tr>
                            <th>Jour</th>
                            <th>Nom</th>
                            <th>Instrument</th>
                            <th>Standard</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Samedi</td>
                            <td><?= $_SESSION['auth']->nom; ?></td>
                            <td><?= $_SESSION['auth']->instrument; ?></td>
                            <td><input type="text" name="standard" placeholder="Proposez un standard" required/></td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name="jour" value="samedi">
                    <input type="hidden" name="nom" value="<?= $_SESSION['auth']->nom; ?>">
                    <input type="hidden" name="instrument" value="<?= $_SESSION['auth']->instrument; ?>">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Oui, je participe</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- jams dimanche modal -->
<div class="modal fade" id="JamsModalDimanche" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Inscription à un jams</h4>
            </div>
            <div class="modal-body">
                <p>Souhaitez-vous vous inscrire au jams du Dimanche avec les informations suivantes:</p>
                <form class="form-horizontal" method="post" action="registerjams.php">
                    <table class="table table-colored">
                        <thead>
                        <tr>
                            <th>Jour</th>
                            <th>Nom</th>
                            <th>Instrument</th>
                            <th>Standard</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Dimanche</td>
                            <td><?= $_SESSION['auth']->nom; ?></td>
                            <td><?= $_SESSION['auth']->instrument; ?></td>
                            <td><input type="text" name="standard" placeholder="Proposez un standard" required/></td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name="jour" value="dimanche">
                    <input type="hidden" name="nom" value="<?= $_SESSION['auth']->nom; ?>">
                    <input type="hidden" name="instrument" value="<?= $_SESSION['auth']->instrument; ?>">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Oui, je participe</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- changement info modal form -->
<div class="modal fade" id="ChangeInfos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Changement de vos informations personnelles</h4>
            </div>
            <div class="modal-body">

                <form action="changeinfo.php" method="POST">
                    <div class="form-field">
                        <input type="text" name="prenom" placeholder="<?= $_SESSION['auth']->prenom; ?>" value="<?= $_SESSION['auth']->prenom; ?>"class="form-control"/>
                    </div>
                    <div class="form-field">
                        <input type="text" name="nom" placeholder="<?= $_SESSION['auth']->nom; ?>" class="form-control" value="<?= $_SESSION['auth']->nom; ?>"/>
                    </div>
                    <div class="form-field">
                        <input type="text" name="adresse" placeholder="<?= $_SESSION['auth']->adresse; ?>" class="form-control" value="<?= $_SESSION['auth']->adresse; ?>"/>
                    </div>
                    <div class="form-field">
                        <input type="text" name="tel" placeholder="<?= $_SESSION['auth']->tel; ?>" class="form-control" value="<?= $_SESSION['auth']->tel; ?>"/>
                    </div>
                    <div class="form-field">
                        <select id="select" name="instrument">
                            <option value="<?= $_SESSION['auth']->instrument; ?>"><?= $_SESSION['auth']->instrument; ?></option>
                            <option value="piano">Piano</option>
                            <option value="guitare">Guitare</option>
                            <option value="contrebasse">Contrebasse</option>
                            <option value="chant">Chant</option>
                            <option value="percu">Percussions</option>
                            <option value="cuivre">Cuivres</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <select id="select" name="lvl">
                            <option value="<?= $_SESSION['auth']->niveau; ?>"><?= $_SESSION['auth']->niveau; ?></option>
                            <option value="debutant">Débutant</option>
                            <option value="intermediaire">Intermédiaire</option>
                            <option value="confirme">Confirmé</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Changer mes informations</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- changement password modal form -->
<div class="modal fade" id="ChangePass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Changement de votre mot de passe</h4>
            </div>
            <div class="modal-body">

                <form action="changepass.php" method="POST">
                    <div class="form-field">
                        <input class="form-control" type="password" placeholder="Nouveau mot de passe" name="password"
                               id="password" required/>
                    </div>
                    <div class="form-field">
                        <input type="password" name="password_confirm"
                               placeholder="Confirmez votre nouveau mot de passe" class="form-control"/>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Changer mon mot de passe</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- video 1 -->
<div class="modal fade" id="Video1" tabindex="-1" role="dialog" aria-labelledby="modal-video-label">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-video">
                    <center>
                        <iframe width="100%" height="500px" class="embed-responsive-item" src="https://player.vimeo.com/video/199434192"
                                webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>