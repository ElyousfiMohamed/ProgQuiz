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


<body>

<!--import js-->
<script src="vendors/jquery-3.4.1.min.js"></script>
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
                <a href="les cartes.php" class="nav1" onmouseenter="afficheelement(14)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="les tableaux.php" class="nav1" onmouseenter="afficheelement(15)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="html5.php" class="nav1" style="background-color:#337ab7;" onmouseenter="afficheelement(16)"
                   onmouseleave="afficheelement(0)"></a>
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

        <div class="carousel-inner"
             style="background-color:white;  border: 5px black solid; padding:0px 0px 150px 0px; border-radius:25px;">
            <div style="background-color:#d9534f; padding:15px 15px; color:white;">
                <h1 style="text-align:center;">Nouveautés en HTML 5 </h1>
            </div>
            <br>
            <div style="text-align:left; font:16px verdana,sans-serif;">

                <!---------------------------------------->
                <div style="margin:20px 20px 20px 20px;">
                    <div style="background-color:#C2ECEE; padding:16px 32px; text-align:center; font-weight:bold; font-size:20px;">
                    </div>
                    <br>
                    <p><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;"><\meta http-equiv="Content-Type" content="text/html; » charset=UTF-8">, c’est fini !
                    </p><br>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i><\meta
                        charset="UTF-8"></p><br>
                    <p><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;"><\script type="text/javascript" src="file.js"><\/script>
                    </p><br><br>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i><\script
                        src="file.js"></script></p><br>
                    <p><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;"><\link rel="stylesheet" type="text/css" href="file.css">
                    </p><br><br>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i><\link
                        rel="stylesheet" href="file.css"></script></p><br>
                </div>

                <!---------------------------------------->
                <br>
                <hr>


                <!---------------------------------------->
                <div style="margin:20px 20px 20px 20px;">
                    <div style="background-color:#C2ECEE; padding:16px 32px; text-align:center; font-weight:bold; font-size:20px;">
                    </div>
                    <br>
                    <p><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;"><\mark></p><br>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i><\strong> et
                        <\em> ne sont pas ce que l’ont croit !</p><br>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i>Donner une
                        importance au texte</p><br>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i>Pourquoi pas
                        un span et la propriété background-color ?</p><br>

                    <p><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;"><\figure></p><br>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;">BLOCK :</span> Indique la présence d'une figure
                        (image, code...) illustrant le texte.</p><br>

                    <p><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;"><\figcaption></p><br>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;">INLINE :</span> Description de la figure.</p>
                    <br>

                </div>
                <!---------------------------------------->


                <br>
                <hr>

                <!---------------------------------------->
                <div style="margin:20px 20px 20px 20px;">
                    <div style="background-color:#C2ECEE; padding:16px 32px; text-align:center; font-weight:bold; font-size:20px;">
                    </div>
                    <br>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;"><\header></span>- l’en-tête</p><br>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;"><\footer></span>- le pied-de-page</p><br>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;"><\nav></span>- les principaux liens de
                        navigation - Menu(s) du site</p><br>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;"><\section></span>- les parties thématiques de
                        la page</p><br>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;"><\aside></span>- les informations
                        complémentaires</p><br>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;"><\article></span>- Un article provenant d'une
                        autre page ?</p><br>

                </div>
                <!---------------------------------------->


                <div style="margin-left:20px; padding:50px 0px 0px 0px;">
                    <button class="btn btn-danger" style="padding:8px 16px;">Demarrer le quiz HTML!</button>
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


</div> <!-- Wrapper Ends -->


<!-- Wrapper Ends -->


</div>


</body>
</html>