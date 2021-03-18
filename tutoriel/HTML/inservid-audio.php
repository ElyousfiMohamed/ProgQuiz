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
                <a href="html5.php" class="nav1" onmouseenter="afficheelement(16)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="inservid-audio.php " class="nav1" style="background-color:#337ab7;"
                   onmouseenter="afficheelement(17)" onmouseleave="afficheelement(0)"></a>
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
                <h1 style="text-align:center;">Insérer de l’audio/video</h1>
            </div>
            <br>
            <div style="text-align:left; font:16px verdana,sans-serif;">
                <div style="margin:20px 20px 20px 20px;">
                    <div style="background-color:#C2ECEE; padding:16px 32px; text-align:center; font-weight:bold; font-size:20px;">
                        <p>Inserer les audios</p>
                    </div>
                    <br>
                    <p><i class="fas fa-angle-double-right" style="color:red;"></i><\audio controls></p>
                    <p style="margin-left:5%;"><\source src="rango.mp3"><\/source><br><\source
                        src="rango.ogg"><\/source></p>
                    <p><\/audio></p>
                </div>
                <br>
                <hr>
                <div style="margin:20px 20px 20px 20px;">
                    <div style="background-color:#C2ECEE; padding:16px 32px; text-align:center; font-weight:bold; font-size:20px;">
                        <p>Inserer les videos</p>
                    </div>
                    <br>
                    <p><i class="fas fa-angle-double-right" style="color:red;"></i><\video⁪⁪⁪ src= " chemin "></video>
                    </p>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:red; font-size:12px;"></i>poster (image à la place de la
                        vidéo, avant lancement)</p>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:blue; font-size:12px;"></i>controls (barre de contrôle)
                    </p>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:green; font-size:12px;"></i>width , height</p>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:#CD853F; font-size:12px;"></i>loop (jouer en boucle)</p>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:#2E8B57; font-size:12px;"></i>autoplay (la vidéo sera
                        jouée en boucle)</p>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:#87CEEB; font-size:12px;"></i>Preload (on ne peut pas le
                        forcer, ça dépend du nav.)</p>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right"
                                                  style="color:#FFEFD5; font-size:10px;"></i>auto (par défaut)</p>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right"
                                                  style="color:#FDF5E6; font-size:10px;"></i>metadata : charge
                        uniquement les métadonnées (durée, dimensions, etc.).</p>
                    <p style="margin-left:5%;"><i class="fas fa-angle-double-right"
                                                  style="color:#48D1CC; font-size:10px;"></i>none : pas de
                        préchargement. Utile si vous nous voulez pas gaspiller de bande passante sur votre site.</p>
                </div>
                <br>
                <hr>
                <div style="margin:20px 20px 20px 20px;">
                    <div style="background-color:#C2ECEE; padding:10px 10px; text-align:center; font-weight:bold; font-size:20px;"></div>
                    <br>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:red; font-size:12px;"></i><span
                                style="font-weight:bold; color:#2F4F4F;">Canvas :</span> permet de dessiner au sein de
                        la page web, à l'intérieur de la balise HTML <\canvas>.</p><br>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:blue; font-size:12px;"></i><span
                                style="font-weight:bold; color:#2F4F4F;">SVG :</span> permet de créer des dessins
                        vectoriels au sein des pages web.</p><br>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:green; font-size:12px;"></i><span
                                style="font-weight:bold; color:#2F4F4F;">Drag & Drop :</span> permet le glisser /
                        déposer des objets dans la page web.</p><br>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:#CD853F; font-size:12px;"></i><span
                                style="font-weight:bold; color:#2F4F4F;">Web Sockets :</span> permet des échanges plus
                        rapides en temps réel entre le navigateur du visiteur et le serveur qui gère le site web (c'est
                        une sorte d'AJAX amélioré).C'est un peu l'avenir pour les applications web, qui pourront devenir
                        aussi réactives que les vrais programmes. </p><br>
                    <p style="margin-left:2%;"><i class="fas fa-angle-double-right"
                                                  style="color:#2E8B57; font-size:12px;"></i><span
                                style="font-weight:bold; color:#2F4F4F;">WebGL :</span> permet d'introduire de la 3D
                        dans les pages web, en utilisant le standard de la 3D OpenGL. Les scènes 3D sont directement
                        gérées par la carte graphique.</p><br>
                </div>
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