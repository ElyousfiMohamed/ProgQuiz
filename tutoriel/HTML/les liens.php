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
                <a href="les liens.php" class="nav1" onmouseenter="afficheelement(12)" style="background-color:#337ab7;"
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
                        <h1 style="text-align:center;">Les liens externes :</h1>
                    </div>
                    <br>
                    <div style="text-align:left; font:16px verdana,sans-serif;">
                        <div style="margin:20px 20px 20px 20px;">
                            <p><i class="fas fa-angle-double-right" style="color:green;"></i><span
                                        style="color:blue; font-weight:bold; font-size:20px;">  <\a href="adresse à atteindre" target="fenêtre d'affichage"> <\/a></span>
                            </p><br>
                            <p style="margin-left:5%;">Encadre du texte et/ou une image</p><br>
                            <p style="margin-left:5%;">Target permet de spécifier un nom de fenêtre pour l'affichage</p>
                            <br>
                            <p style="margin-left:5%;">Si la fenêtre précisée n'existe pas, elle est créée</p><br>
                            <p style="margin-left:5%;">Par défaut l'affichage se fait dans la fenêtre courante</p><br>
                            <p><i class="fas fa-angle-double-right" style="color:green;"></i><span
                                        style="color:blue; font-weight:bold; font-size:20px;">  <\a href="http//:www.lita.univ-metz.fr/~paris/”></span>chez
                                moi<span style="color:blue; font-weight:bold; font-size:20px;"><\/a>  </span></p><br>
                            <p style="margin-left:5%;">référence à une page html que l'on atteint en cliquant sur chez
                                moi. Si le fichier spécifié n'est pas un fichier HTML, le lien sera un lien de
                                téléchargement.</p><br>
                            <p><i class="fas fa-angle-double-right" style="color:green;"></i><span
                                        style="color:blue; font-weight:bold; font-size:20px;">  <\a href="ftp//:…"> </span>
                                ici <span style="color:blue; font-weight:bold; font-size:20px;"><\/a>  </span></p><br>
                            <p style="margin-left:5%;"> référence un fichier à télécharger même si c'est un fichier
                                html.</p><br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin page 1 -->


            <!-- page 2 -->
            <div class="item">
                <div style="background-color:white;  border: 5px black solid; padding:0px 0px 150px 0px; border-radius:25px;">
                    <div style="background-color:#d9534f; padding:15px 15px; color:white; border-radius:20px;">
                        <h1 style="text-align:center;">Les liens externes :</h1>
                    </div>
                    <br>
                    <div style="text-align:left; font:16px verdana,sans-serif;">
                        <div style="margin:20px 20px 20px 20px;">
                            <p><span style="color:blue; font-weight:bold; font-size:20px;"><\a href =</span><span
                                        style="color:red;font-weight:bold;">mailto:paris@univ-metz.fr?subject=qcq"</span><span
                                        style="color:blue; font-weight:bold; font-size:20px;">></span></p>
                            <p style="margin-left:5%; font-weight:bold;">ma boîte aux lettres</p><br>
                            <p style="margin-left:5%; font-weight:bold;">quand on clique sur ma boîte aux lettres une
                                fenêtre de mail s'ouvre avec
                                pour destinataire paris@univ-metz.fr et
                                pour objet qcq
                            </p><br>
                            <p style="margin-left:5%; font-weight:bold;">
                                Le lien aura la couleur spécifiée dans l'option LINK du BODY,
                                sauf si le texte matérialisant le lien est inclus dans une balise
                                <\font color> (incluse elle-même dans la balise <\a href>)
                            </p><br>
                            <p style="margin-left:5%; font-weight:bold;">
                                Le lien peut être fait sur du texte et/ou une image
                            </p><br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin page 2 -->


            <!-- page 3 -->

            <div class="item">
                <div style="background-color:white;  border: 5px black solid; padding:0px 0px 150px 0px; border-radius:25px;">
                    <div style="background-color:#d9534f; padding:15px 15px; color:white; border-radius:20px;">
                        <h1 style="text-align:center;">Les liens internes :</h1>
                    </div>
                    <br>
                    <div style="text-align:left; font:16px verdana,sans-serif;">
                        <div style="margin:20px 20px 20px 20px;">
                            <p style="font-weight:bold; color:#5F9EA0;">Un lien interne est un lien qui amène à un
                                endroit spécifique de la page HTML en cours. Il se construit en deux temps :</p><br>
                            <p style="margin-left:5%; font-weight:bold;"><i class="fas fa-angle-double-right"
                                                                            style="color:red;"></i>Mise en place d'une
                                étiquette à l'emplacement à atteindre avec la balise<br><span
                                        style="color:blue; font-weight:bold; font-size:20px;"><\a name="nom de l'étiquette"> … <\/a></span>
                            </p><br>
                            <p style="margin-left:5%; font-weight:bold;"><i class="fas fa-angle-double-right"
                                                                            style="color:red;"></i>Appel du lien de
                                manière classique, mais où l'adresse de la page à atteindre est remplacée par le nom de
                                l'étiquette précédée d'un # :<br><span
                                        style="color:blue; font-weight:bold; font-size:20px;"><\a name="#nom de l'étiquette"> … <\/a></span>
                            </p><br>
                            <p style="font-weight:bold; color:#5F9EA0;"><span style="color:red;">NB :</span> il est
                                possible d'atteindre un emplacement spécifique d'une page différente de celle où a lieu
                                l'appel de lien.c'est à dire de combiner les liens externes et internes, en faisant
                                suivre le nom du fichier HTML par un # et le nom de l'étiquette.</p><br>
                        </div>

                    </div>
                </div>
            </div>
            <!-- fin page 3 -->

        </div>
        <div>

            <!-- Indicators -->
            <div style="text-align:center;">
                <li class="btn btn-success" data-target="#myCarousel" data-slide-to="0" class="active">1</li>
                <li class="btn btn-success" data-target="#myCarousel" data-slide-to="1">2</li>
                <li class="btn btn-success" data-target="#myCarousel" data-slide-to="2">3</li>

            </div>


            <div style="margin-left:20px; padding:50px 0px 0px 0px;">
                <button class="btn btn-danger" style="padding:8px 16px;">Demarrer le quiz HTML!</button>
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