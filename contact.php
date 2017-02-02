
<section id="contact" class="bg-black bg-color-invert">

    <a class="fc-close" href="#"><i class="fa fa-times"></i></a>

    <!-- Google Maps -->
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">

                <div class="title title-main">
                    <h4>Nous retrouver</h4>
                </div>
                <div class="text">
                    <p>Nous disposons d'un large parking et d'une infrastructure aux normes handicapées. Pour toutes informations supplémentaires, n'hésitez pas à nous adresser un message grâce au formulaire ci-contre. </p>
                </div>

                <address>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>Adresse:</b></p>
                        </div>
                        <div class="col-sm-8">
                            <p>322 Victoria Street<br /> 75000 Paris,<br />France</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>Téléphone:</b></p>
                        </div>
                        <div class="col-sm-8">
                            <p>01 23 45 67 89</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p><b>Email:</b></p>
                        </div>
                        <div class="col-sm-8">
                            <p><a href="mailto:mail@mail.com">mail@mail.com</a></p>
                        </div>
                    </div>
                </address>
            </div><!-- .col-sm-4 -->
            <div class="col-sm-7">

                <div class="title title-main">
                    <h4>Envoyer un message</h4>
                </div>

                <form action="php/contact.php" method="POST" class="form-validate" id="contact-form">

                    <div class="row">
                        <div class="col-sm-6">

                            <div class="form-field">
                                <div class="placeholder">
                                    <label for="name">Nom<span class="require">Requis</span></label>
                                    <input class="form-control" type="text" maxlength="100" name="name" id="name" minlength="2" required />
                                </div>
                            </div><!-- .form-field -->
                            <div class="form-field">
                                <div class="placeholder">
                                    <label for="email">Email<span class="require">Requis</span></label>
                                    <input class="form-control" type="email" name="email" id="email" required />
                                </div>
                            </div><!-- .form-field -->
                            <div class="form-field">
                                <div class="placeholder">
                                    <label for="subject">Sujet<span class="require">Requis</span></label>
                                    <input class="form-control" type="text" name="subject" id="subject" required />
                                </div>
                            </div><!-- .form-field -->

                        </div><!-- .col-sm-6 -->
                        <div class="col-sm-6">

                            <div class="form-field">
                                <div class="placeholder">
                                    <label for="message">Message<span class="require">Requis</span></label>
                                    <textarea class="form-control" maxlength="5000" rows="9" name="message" id="message" required></textarea>
                                </div>
                            </div><!-- .form-field -->

                        </div><!-- .col-sm-6 -->
                    </div><!-- .row -->

                    <div class="form-field text-right">
                        <button type="submit" class="btn">Envoyer</button>
                    </div><!-- .form-field -->
                </form>

            </div><!-- .col-sm-7 -->
        </div>
    </div>
    <br>
</section>