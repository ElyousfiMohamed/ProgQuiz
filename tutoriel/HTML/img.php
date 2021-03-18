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
                <a href="img.php" class="nav1" style="background-color:#337ab7;" onmouseenter="afficheelement(13)"
                   onmouseleave="afficheelement(0)"></a>
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
                <a href="html5.php" class="nav1" onmouseenter="afficheelement(16)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="inservid-audio.php" class="nav1" onmouseenter="afficheelement(17)"
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
                        <h1 style="text-align:center;">Mise en forme des caractères</h1>
                    </div>
                    <br>
                    <div style="text-align:left; font:16px verdana,sans-serif;">
                        <div style="margin:20px 20px 20px 20px;">
                            <p>Une image animée se crée en associant plusieurs images (les formats utilisables diffèrent
                                suivant les logiciels) dans un seul fichier au format .gif</p><br>
                            <p><i class="fas fa-angle-double-right" style="color:red;"></i>L'option src : nom du fichier
                                contenant l'image</P>
                            <p><i class="fas fa-angle-double-right" style="color:red;"></i>L'option width : largeur de
                                l'image affichée. Si cette option n'est pas spécifiée, l'image est affichée à sa taille
                                réelle. On indique soit la valeur en pixel, soit en pourcentage de la taille originale
                                de l'image.</P>
                            <p><i class="fas fa-angle-double-right" style="color:red;"></i>L'option height : hauteur de
                                l'image affichée.<br>Mêmes remarques que pour width</P>
                            <p style="margin-left:5%;">Quand une seule des deux options width ou height est spécifiée,
                                l'autre est automatiquement calculée en proportion</p><br><br>
                            <p style="margin-left:5%; color:red; font-weight:bold;">Toujours indiquer au moins un des
                                deux paramètres pour accélérer l'affichage</p>
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
                        <h1 style="text-align:center;">Mise en forme des paragraphes</h1>
                    </div>
                    <br><br>
                    <div style="text-align:left; font:16px verdana,sans-serif;">
                        <div style="margin:20px 20px 20px 20px;">
                            <p><i class="fas fa-angle-double-right" style="color:red;"></i>L'option alt : texte
                                apparaissant dans une info-bulle quand la souris est positionnée pendant 1 à 2 secondes
                                sur l'image</P><br>
                            <p><i class="fas fa-angle-double-right" style="color:red;"></i>L'option border : taille en
                                pixel de la bordure autour de l'image. Si l'image est un lien et qu'on ne veut pas voir
                                de bordure de la couleur spécifiée dans l'option LINK du BODY, mettre 0</P><br>
                            <p><i class="fas fa-angle-double-right" style="color:red;"></i>L'option usemap : utilisée
                                pour associer à une image une carte de zones réactives (par défaut aucune).</P><br>
                        </div>

                        <div style="margin-left:20px; padding:50px 0px 0px 0px;">
                            <button class="btn btn-danger" style="padding:8px 16px;">Demarrer le quiz HTML!</button>
                        </div>
                        <br><br>

                    </div>
                    <br>
                </div>
                <br><br>
            </div>
            <!-- fin page 2 -->

        </div>
        <div><br>

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