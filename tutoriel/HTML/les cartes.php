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
    <link rel="stylesheet" href="style.css">

</head>
<script>

    <
    body >

    <!--import js-->
    < script
    src = "vendors/jquery-3.4.1.min.js" ></script>
<script src="vendors/bootstrap.min.js"></script>
<script src="../../js/main.js"></script>
<script src="passepage.js"></script>
<!--import js-->


<div class="wrapper">

    <!--logo-->
    <div class="logo">
        <div class="area1"><span class="nom1"><a href="#">PROGQUIZ</span><span class="nom2">.com</span></a></div>
        <div class="area2"><span class="text">Let's change the world</span></div>
        <i class="icon fa fa-bars fa-2x"></i>
    </div>
    <?php
    session_start();
    if (isset($_SESSION['id_user']))
        include("nav_connect.php");
    else
        include("nav_nonconnect.php");
    ?>
    <!--le titre des pages-->
    <div class="container">
        <h3 class="panel-title" id="title" style="text-align:center; color:white;">m</h3>
    </div>
    <!------------------------->

    <div class="naviguer">

        <ul>
            <li>
                <a href="htmldef.php" class="nav1" onmouseenter="afficheelement(1)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="Structure.php" class="nav1" onmouseenter="afficheelement(2)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="namefichier.php" class="nav1" onmouseenter="afficheelement(3)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="les fichiers.php" class="nav1" onmouseenter="afficheelement(4)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="l'entete.php" class="nav1" onmouseenter="afficheelement(5)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="balisemeta.php" class="nav1" onmouseenter="afficheelement(6)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="lecorps.php" class="nav1" onmouseenter="afficheelement(7)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="textebody.php" class="nav1" onmouseenter="afficheelement(8)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="mfcp.php" class="nav1" onmouseenter="afficheelement(9)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="olnp.php" class="nav1" onmouseenter="afficheelement(10)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="lignehorizontale.php" class="nav1" onmouseenter="afficheelement(11)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="les liens.php" class="nav1" onmouseenter="afficheelement(12)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="img.php" class="nav1" onmouseenter="afficheelement(13)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="les cartes.php" class="nav1" style="background-color:#337ab7;"
                   onmouseenter="afficheelement(14)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="les tableaux.php" class="nav1" onmouseenter="afficheelement(15)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="html5.php" class="nav1" onmouseenter="afficheelement(16)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="inservid-audio.php " class="nav1" onmouseenter="afficheelement(17)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="structuregenerale.php" class="nav1" onmouseenter="afficheelement(18)"
                   onmouseleave="afficheelement(0)"></a>
            </li>

        </ul>

    </div>
    <!-- Top Container -->


    <div id="myCarousel" class="carousel slide">


        <!-- page 1 -->
        <div class="carousel-inner">
            <div class="item active">
                <div style="background-color:white;  border: 5px black solid; padding:0px 0px 150px 0px; border-radius:25px;">
                    <div style="background-color:#d9534f; padding:15px 15px; color:white; border-radius:20px;">
                        <h1 style="text-align:center;">Les cartes <\map><\/map></h1>
                    </div>
                    <br>
                    <div style="text-align:left; font:16px verdana,sans-serif;">
                        <div style="margin:20px 20px 20px 20px;">
                            <p><i class="fas fa-angle-double-right" style="color:red;"></i>Ce couple de balises est
                                utilisé pour ajouter une carte à une image.</p><br>
                            <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i>L'option
                                name donne un nom à la carte. Ce nom sera utilisé pour réaliser l'association entre la
                                carte et l'image.</p><br>
                            <p><i class="fas fa-angle-double-right" style="color:red;"></i>Une carte est composée de
                                zone (area). À chaque zone est associée une action déclenché quand l'utilisateur la
                                désigne.</p><br>
                        </div>
                        <div style="margin-left:20px; padding:50px 0px 0px 0px;">
                            <button class="btn btn-danger" style="padding:8px 16px;">Demarrer le quiz HTML!</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- fin page 1 -->


            <!-- page 2 -->

            <div class="item">
                <div style="background-color:white;  border: 5px black solid; padding:0px 0px 150px 0px; border-radius:25px;">
                    <div style="background-color:#d9534f; padding:15px 15px; color:white; border-radius:20px;">
                        <h1 style="text-align:center;">Les cartes <\area></h1>
                    </div>

                    <div style="text-align:left; font:16px verdana,sans-serif;">
                        <div style="margin:20px 20px 20px 20px;">
                            <p><i class="fas fa-angle-double-right" style="color:red;"></i>L'option shape sert à
                                spécifier la forme de la zone. rect (pour un rectangle), circle (pour un cercle) et poly
                                (pour un polygone).</p><br>
                            <p><i class="fas fa-angle-double-right" style="color:red;"></i>L'option href détermine l'URL
                                appelée lorsque l'utilisateur cliquera sur la zone que vous être en train de décrite.
                            </P><br>
                            <p><i class="fas fa-angle-double-right" style="color:red;"></i>L'option coords fixe les
                                coordonnées de la zone décrite. Ces coor-données doivent être données sous la forme
                                d'une liste d'entiers séparés par des virgules. Dans le cas d'une zone rectangulaire, on
                                spécifie les coordonnées de deux points diamétralement opposés<br>
                                Dans le cas d'une sphère, on donne son centre et un point de la circonférence. Enfin,
                                pour un polygone, on énumère les coordonnées de tous les sommets, deux à deux
                                consécutifs
                            </p>
                        </div>

                        <div style="margin-left:20px; padding:50px 0px 0px 0px;">
                            <button class="btn btn-danger" style="padding:8px 16px;">Demarrer le quiz HTML!</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- fin page 2 -->

        </div>
        <div>

            <!-- Indicators -->
            <div style="text-align:center;">
                <li class="btn btn-success" data-target="#myCarousel" data-slide-to="0" class="active">1</li>
                <li class="btn btn-success" data-target="#myCarousel" data-slide-to="1">2</li>

            </div>

            <!-- Left and right controls -->


            <!-- Footer -->
            <footer>
                <p>PROGQUIZ &copy; 2020</p>
            </footer>
            <!-- Footer -->


        </div> <!-- Wrapper Ends -->


        <!-- Wrapper Ends -->


    </div>


    </body>
</html>