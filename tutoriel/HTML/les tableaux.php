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
                <a href="les tableaux.php" class="nav1" style="background-color:#337ab7;"
                   onmouseenter="afficheelement(15)" onmouseleave="afficheelement(0)"></a>
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

        <div class="carousel-inner"
             style="background-color:white;  border: 5px black solid; padding:0px 0px 150px 0px; border-radius:25px;">
            <div style="background-color:#d9534f; padding:15px 15px; color:white;">
                <h1 style="text-align:center;">Les tableaux</h1>
            </div>
            <br>
            <div style="text-align:left; font:16px verdana,sans-serif;">

                <!---------------------------------------->
                <div style="margin:20px 20px 20px 20px;">
                    <div style="background-color:#C2ECEE; padding:16px 32px; text-align:center; font-weight:bold; font-size:20px;">
                        <p><\table><\/table></p>
                    </div>
                    <br>
                    <p><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;"><\TR><\/TR> :</span> ouverture et fermeture
                        d'une ligne dans le tableau (Table Row)</p><br>
                    <p><i class="fas fa-angle-double-right" style="color:red;"></i><span
                                style="font-weight:bold; color:#2F4F4F;"><\TD><\/TD> :</span> ouverture et fermeture
                        d'une cellule (Table Data) Ne jamais oublier les balises de fermeture, car le tableau pourrait
                        être désordonné, voire ne pas s'afficher</p><br><br>
                    <p style="font-weight:bold; color:#2F4F4F;">Les tableaux peuvent être imbriqués, mais il faut
                        toujours qu'il y ait le même nombre de balises d'ouverture et de fermeture (attention à
                        l'ordre)</p><br>
                </div>

                <!---------------------------------------->
                <br>
                <hr>


                <!---------------------------------------->
                <div style="margin:20px 20px 20px 20px;">
                    <div style="background-color:#C2ECEE; padding:16px 32px; text-align:center; font-weight:bold; font-size:20px;">
                        <p>Les options des tableaux <\table></p>
                    </div>
                    <br>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:red; font-size:12px;"></i>Les options <span
                                style="font-weight:bold; color:#2F4F4F;">height, width, align, border, bgcolor, background</span>
                        comme d'habitude</p><br>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:blue; font-size:12px;"></i>L'option <span
                                style="font-weight:bold; color:#2F4F4F;">cellpadding</span> définit l'espace entre le
                        bord des cellules et leurs contenus (intra cellulaire)</p><br>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:green; font-size:12px;"></i>L'option <span
                                style="font-weight:bold; color:#2F4F4F;">cellspacing</span> définit l'espace entre les
                        cellules (inter cellulaire)</p><br>
                </div>
                <!---------------------------------------->


                <br>
                <hr>

                <!---------------------------------------->
                <div style="margin:20px 20px 20px 20px;">
                    <div style="background-color:#C2ECEE; padding:16px 32px; text-align:center; font-weight:bold; font-size:20px;">
                        <p>Les options des lignes <\tr></p>
                    </div>
                    <br>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:red; font-size:12px;"></i>Les options <span
                                style="font-weight:bold; color:#2F4F4F;">height, width, border, bgcolor, background </span>
                        comme d'habitude</p><br>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:blue; font-size:12px;"></i>L'option <span
                                style="font-weight:bold; color:#2F4F4F;">align</span>pour un alignement horizontal
                        centré, justifié, à gauche ou encore à droite</p><br>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:green; font-size:12px;"></i>L'option <span
                                style="font-weight:bold; color:#2F4F4F;">valign</span> permet de positionner
                        verticalement le tableau</p><br>
                </div>
                <!---------------------------------------->

                <br>
                <hr>

                <!---------------------------------------->
                <div style="margin:20px 20px 20px 20px;">
                    <div style="background-color:#C2ECEE; padding:16px 32px; text-align:center; font-weight:bold; font-size:20px;">
                        <p>Les options des cellules <\td></p>
                    </div>
                    <br>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:red; font-size:12px;"></i>Les options <span
                                style="font-weight:bold; color:#2F4F4F;">height, width, border, bgcolor, background, align, valign </span>
                        comme pour les lignes mais pour les cellules.</p><br>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:blue; font-size:12px;"></i>L'option <span
                                style="font-weight:bold; color:#2F4F4F;">colspan</span>=nombre de cellules fusionnées à
                        l'horizontal. Permet de disposer du texte sur plusieurs colonnes. Pour que le tableau s'affiche
                        correctement, il faut que ligne par ligne, le nombre de cellules soit le même.</p><br>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:green; font-size:12px;"></i>L'option <span
                                style="font-weight:bold; color:#2F4F4F;">rowspan</span>=idem pour les fusions à la
                        verticale</p><br>
                </div>
                <br>
                <!---------------------------------------->


                <!---------------------------------------->
                <div style="text-align:center;"><img src="table.jpg"></div>
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