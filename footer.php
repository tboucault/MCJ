<footer id="footer" class="bg-black bg-color-invert" role="contentinfo">
    <div class="container">

        <p class="text-center"><b><font size="7px">M</font></b>aster <b><font size="7px">C</font></b>lass <b><font
                    size="7px">J</font></b>azz</p>

    </div>
    <!-- .container -->
</footer><!-- #footer -->

<!-- jQuery library -->
<!--<script type="text/javascript" src="js/library/jquery/jquery-1.11.0.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="js/library/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- knob -->
<script type="text/javascript" src="js/library/knob/jquery.knob.min.js"></script>

<!-- Fancybox -->
<script type="text/javascript" src="js/library/fancybox/jquery.fancybox.pack.js"></script>

<!-- Retina js -->
<script type="text/javascript" src="js/library/retina/retina.min.js"></script>

<!-- Validate -->
<script type="text/javascript" src="js/library/validate/jquery.validate.min.js"></script>

<!-- Mediaelementjs -->
<script type="text/javascript" src="js/library/mediaelementjs/mediaelement-and-player.min.js"></script>

<!-- carouFredSel -->
<script type="text/javascript" src="js/library/carouFredSel/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="js/library/carouFredSel/jquery.touchSwipe.min.js"></script>

<!-- Map -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script type="text/javascript" src="js/map.min.js"></script>

<!-- Revolution slider -->
<script type="text/javascript" src="js/library/slider-revolution/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/library/slider-revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/slider.min.js"></script>

<!-- Isotope  -->
<script type="text/javascript" src="js/library/isotope/isotope.pkgd.min.js"></script>

<!-- Main theme javaScript file -->
<script type="text/javascript" src="js/theme.min.js"></script>


<script>
    //fonction affiche table cours
    $(document).ready(function () {

        $.ajax({
            url: "inc/ajax_cours.php",
            success: function (msg) {
                var rows = $.parseJSON(msg); // char en objet js

                $.each(rows, function (index, row) {

                    $(".nb_" + row.instrument).html(row.nbInscrit+"/5");

                });

            }
        });

    //fonction affiche table jams
        $.ajax({
            url: "inc/ajax_jc.php",
            success: function (msg) {
                var rows = $.parseJSON(msg); // char en objet js

                $.each(rows, function (index, row) {

                    var content = "<tr> <td>17h</td> <td>" + row.nom + "</td><td>" + row.instrument + "</td><td>" + row.standard + "</td> </tr>";

                    var elem = "#" + row.type + "_" + row.jour;
                    $(elem).append(content);

                });

            }
        });

        //fonction affiche table compte
        $.ajax({
            url: "inc/ajax_compte.php",
            success: function (msg) {
                var rows = $.parseJSON(msg); // char en objet js

                $.each(rows, function (index, row) {

                    var content = "<tr> <td>" + row.jour + "</td><td>" + row.instrument + "</td><td>" + row.standard + "</tr>";

                    if(row.type=='cours')
                    {
                        var content = "<tr> <td>" + row.jour + "</td><td>" + row.instrument + "</td> <td>"+ row.professeur + "</td></tr>";
                    }
                    var elem = "#compte_" + row.type;
                    $(elem).append(content);

                });

            }
        });
    });

</script>

</body>
</html>