<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>PROGQUIZ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--important pour la largeur pour tout les devices et le zoom j'ai le met en 1-->
    <link rel="stylesheet" href="vendors/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="../../style sheets/style.css">
    <style>
        .font {
            font-weight: bold;
            font-size: 20px;
            color: #4169E1;
        }
    </style>

</head>
<div class="wrapper">
    <div class="logo">
        <div class="area1"><span class="nom1"><a href="#">PROGQUIZ</span><span class="nom2">.com</span></a></div>
        <div class="area2"><span class="text">Let's change the world</span></div>
        <i class="icon fa fa-bars fa-2x" style="display:none;"></i>
    </div>
    <?php
    session_start();
    if (isset($_SESSION['id_user']))
        include("nav_connect.php");
    else
        include("nav_nonconnect.php");
    ?>
</div>
<!-- Top Container -->


<div id="myCarousel" class="carousel slide">

    <div class="carousel-inner"
         style="background-color:white;  border: 5px black solid; padding:0px 0px 150px 0px; border-radius:25px;">


        <div style="background-color:#C2ECEE; padding:15px 15px; color:white; border-radius:15px;">
            <h1 style="text-align:center; color:black;">Comment devenir développeur ?</h1>
        </div>
        <br>


        <div style="background-color:#d9534f; padding:16px 32px; color:white; margin:20px 20px 20px 20px;">
            <H2>Comment devenir développeur informatique ?</H2>
        </div>

        <div style="text-align:left; font:16px verdana,sans-serif;">
            <div style="background-color:#FAF0E6; padding:16px 32px;">
                <p> Le métier de développeur informatique repose sur la création de logiciels
                    ou de sites internet en s'appuyant sur des langages de programmation. <br>
                    Aussi appelé "programmeur informatique" ou "concepteur informatique", le développeur se doit
                    d'évoluer avec les nouvelles technologies,
                    tout en s'adaptant aux besoins spécifiques des clients.
                    <br><br>
                    <span class="font">Vous souhaitez vous lancer dans une formation pour devenir développeur ?<br>
                    Quelles sont les missions du développeur ? <br>
                    Quelles qualités sont requises pour exercer ce métier ?</span>
                </p>
            </div>


            <br>
            <div style="background-color:#d9534f; padding:16px 32px; color:white; margin:20px 20px 20px 20px;">
                <H2>Développeur informatique: les missions</H2>
            </div>


            <div style="text-align:left; font:16px verdana,sans-serif;">
                <div style="background-color:#FAF0E6; padding:16px 32px;">
                    <p> En freelance ou en tant que salarié, le développeur informatique exerce quotidiennement les
                        fonctions suivantes:
                        <br><br><br>
                        <i class="fa fa-chevron-circle-right fa_custom"></i>Identification et analyse des besoins des
                        utilisateurs et des clients<br><br>
                        <i class="fa fa-chevron-circle-right fa_custom"></i>Création, conception et programmation de
                        logiciels informatiques, de sites internet, de modules ou de développements spécifiques<br><br>
                        <i class="fa fa-chevron-circle-right fa_custom"></i>Réalisation d'une série de tests et
                        d'analyse technique pour déceler les potentiels dysfonctionnements et bugs sur les logiciels
                        créés<br><br>
                        <i class="fa fa-chevron-circle-right fa_custom"></i>Maîtrise des outils informatiques, de
                        l'anglais technique et des langages de programmation (Python, C++, C.Net, etc.)<br>

                    </p>
                </div>


                <br>
                <div style="background-color:#d9534f; padding:16px 32px; color:white; margin:20px 20px 20px 20px;">
                    <H2>Les différentes spécialités du développement</H2>
                </div>


                <div style="text-align:left; font:16px verdana,sans-serif;">
                    <div style="background-color:#FAF0E6; padding:16px 32px;">
                        <p>Le programmeur informatique peut être spécialisé dans un langage particulier. Il est ainsi
                            possible, selon sa formation et sa spécialisation, de devenir:
                            <br><br><br>
                            <i class="fa fa-chevron-circle-right fa_custom"></i>Développeur blockchain<br><br>
                            <i class="fa fa-chevron-circle-right fa_custom"></i>Développeur d'application
                            Android<br><br>
                            <i class="fa fa-chevron-circle-right fa_custom"></i>Développeur d'application IOS<br><br>
                            <i class="fa fa-chevron-circle-right fa_custom"></i>Développeur d'application Java<br><br>
                            <i class="fa fa-chevron-circle-right fa_custom"></i>Développeur d'applications
                            mobiles<br><br>
                            <i class="fa fa-chevron-circle-right fa_custom"></i>Développeur JavaScript<br><br>
                            <i class="fa fa-chevron-circle-right fa_custom"></i>Développeur PHP<br><br>
                            <i class="fa fa-chevron-circle-right fa_custom"></i>Développeur programmateur
                            informatique<br><br>
                            <i class="fa fa-chevron-circle-right fa_custom"></i>Développeur web<br><br>
                            <i class="fa fa-chevron-circle-right fa_custom"></i>etc.<br><br>
                        </p>
                    </div>


                    <br>
                    <div style="background-color:#d9534f; padding:16px 32px; color:white; margin:20px 20px 20px 20px;">
                        <H2>Les qualités indispensables</H2>
                    </div>


                    <div style="text-align:left; font:16px verdana,sans-serif;">
                        <div style="background-color:#FAF0E6; padding:16px 32px;">
                            <p>Métier d'un secteur en perpétuelle évolution, le concepteur informatique doit avoir une
                                très bonne capacité d'adaptation et d'autoformation tout au long de sa carrière, avec
                                une pointe de curiosité.</p>
                            <p>Le développeur doit par ailleurs avoir un esprit logique, rigoureux et pragmatique.
                                L'écoute et la rapidité d'exécution peuvent être un plus, notamment pour répondre aux
                                demandes des clients.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->


    <!-- Footer -->
    <footer>
        <p>PROGQUIZ &copy; 2020</p>
    </footer>
    <!-- Footer -->


    <!-- Wrapper Ends -->


    </body>
</html>