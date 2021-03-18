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
    <style>
        .logo {
            display: grid;
            grid-template-areas: 'area1' 'area2';
            grid-row-gap: 10px;
        }

        .logo .area1 {
            grid-area: area1;
        }

        .logo .area2 {
            grid-area: area2;
        }

        .logo .icon {
            display: none;
            grid-area: area3;
        }

        .logo a {
            text-decoration: none;
        }

        .logo .text {
            color: #337ab7;
            font-size: 18px;
        }

        .logo .Rechercher {
            position: absolute;
            left: 900px;
            border: 0px;
        }

        .logo .Recherchertext {
            position: absolute;
            left: 1240px;
        }

        .logo .fas {
            font-size: 25px;
        }

        .logo .nom1 {
            font-size: 50px;
            color: rgb(45, 45, 150);
        }

        .logo .nom2 {
            font-style: Helvetica;
            font-size: 30px;
            color: rgb(66, 66, 66);
        }

        body {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            background: #fff;
            margin: 30px 50px;
            line-height: 24px; /*la minimum espace entre deux ligne*/
        }

        #nonconnect {
            color: white;
            text-decoration: none;
        }

        #nonconnect:hover {
            background-color: white;
            color: #337ab7;
        }

        #connecte {
            background-color: #5cb85c;
            color: white;
            text-decoration: none;
        }

        #connecte:hover {
            background-color: white;
            color: green;
        }

        #dgrconnecte {
            background-color: #d9534f;
            color: white;
            text-decoration: none;
        }

        #dgrconnecte:hover {
            background: white;
            color: #d43f3a;
        }

        #iconlogout {
            color: white;
        }

        #iconlogout:hover {
            color: #d9534f;
        }

        img {
            max-width: 100%; /*la taille de l'image dans leur block*/
        }

        .wrapper {
            display: grid; /*css grid*/
            grid-gap: 35px; /*les espaces entre le block*/
        }

        /* Navigation */
        .main-nav ul {
            display: grid;
            grid-gap: 20px;
            padding: 0;
            list-style: none;
            grid-template-columns: repeat(6, 1fr); /*nav liste:division de l'espace entre chaque block en */
        }

        .main-nav .nav {
            background: #000;
            display: block;
            text-decoration: none;
            padding: 13px;
            text-align: center;
            color: #fff;
            text-transform: uppercase;
            transformer en maj
            font-size: 14px;
            box-shadow: 0 1px 5px rgba(104, 104, 104, 0.8);
            border-radius: 3px;
        }

        .main-nav li a:hover {
            background: #fff;
            color: #000;
        }

        .main-nav a:hover {
            background: #fff;

        }

        .main-nav li a:hover {
            padding: 12px;
            border: solid 1px black;
        }

        .main-nav .btn {
            display: block;
            padding: 13px;
            text-transform: uppercase;
            font-size: 14px;
            box-shadow: 0 1px 5px rgba(104, 104, 104, 0.8);
        }

        #btn:hover {
            color: #337ab7;
            font-weight: bold;
        }

        /* Top Container */
        .top-container {
            display: grid;
            grid-gap: 20px; /*l'espace height and width entre juste entre le top container*/
            grid-template-areas: 'top-box-a case1header case1header case1header case1header';
        }

        /* case1header */

        /* Top Box */
        .top-box {
            background: #grey;
            box-shadow: 0 1px 5px rgba(104, 104, 104, 0.8));
            padding: 1.5rem;
        }

        .top-box .langage {
            font-size: 15px;
        }


        /* Boxes */
        .boxes {
            display: grid;
            grid-gap: 20px;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));; /*ou auto fit au la place de 5 auto fit permer de reserver la place automatiquement au nombre des box*/
        }

        .box {
            background: #ddd;
            text-align: center;
            padding: 24px 32px;
            box-shadow: 0 1px 5px rgba(104, 104, 104, 0.8);
        }


        /* Footer */
        footer {
            margin-top: 200px;
            background: #333;
            color: #ffff;
            text-align: center;
            padding: 16px;
        }

        .top-box-a li {
            list-style: none;
        }

        .top-box-a li:hover {
            background-color: black;
        }

        .naviguer ul {
            display: grid;
            grid-gap: 5px;
            padding: 0px;
            margin: 0px;
            list-style: none;
            grid-template-columns: repeat(18, 1fr); /*nav liste:division de l'espace entre chaque block en */
        }

        /* Media Queries */
        @media (max-width: 750px) {
            .logo .icon {
                display: block;
                grid-area: area3;
            }

            .top-box-a {
                display: none;
            }

            .logo .area2 {
                display: none;
            }

            .logo {
                text-align: center;
                grid-template-areas: 'area1 area3';
            }

            .top-container {
                grid-template-areas: 'case1header';
            }

            .case1header h1 {
                font-size: 40px;
            }

            .main-nav ul {
                grid-template-columns: 1fr;
            }

            .naviguer {
                width: auto;
            }

            .info {
                grid-template-columns: 1fr;
            }

            .info .btn {
                display: block;
                text-align: center;
                margin: auto;
            }

        }

        @media (max-width: 500px) {
            .logo {
                grid-template-areas: 'area1 area3';
            }

            .logo .icon {
                display: block;
                grid-area: area3;
            }

            .top-box-a {
                display: none;
            }

            /* .logo .area2{
               display:none;
             }*/
            .top-container {
                grid-template-areas: 'case1header';
            }

            .area2 {
                display: none;
            }

            .naviguer {
                width: auto;
            }

            .naviguer ul {
                grid-template-columns: 1fr; /*nav liste:division de l'espace entre chaque block en */
                display: flex;
                padding: 5px;
            }

            .zone input {
                grid-template-areas: 'zone';
            }

            .zone input {
                display: block;
                grid-area: zone;
            }


        }

        .icon {
            margin-left: 60px;
            margin-top: 5px;
        }

        .naviguer .nav1 {
            background: #000;
            display: block;
            text-decoration: none;
            padding: 13px;
            text-align: center;
            color: #fff;
            text-transform: uppercase;
            transformer en maj
            font-size: 14px;
            box-shadow: 0 1px 5px rgba(104, 104, 104, 0.8);
            border-radius: 10px;
        }

        .naviguer {
            padding: 0px;
        }

        .naviguer a:hover {
            background: #fff;
            color: #000;
        }

        .tuto {
            background-color: #ddd;
            padding: 100px;
            box-shadow: 0 1px 5px rgba(104, 104, 104, 0.8);
            border-radius: 3px;
        }

        form {
            padding: 0px;
        }

        .titre {
            border: none;
            color: #337ab7;
            font-size: 20px;
            font-weight: bold;
        }

        .btnretour {
            background-color: grey;
            color: white;
            font-weight: bold helvitica;
            border-radius: 5px;
        }

        .btnpasse {
            background-color: grey;
            color: white;
            font-weight: bold helvitica;
            border-radius: 5px;
        }
    </style>

</head>
<script>
    function afficheelement(x) {
        if (x == 0) {
            document.getElementById("title").innerHTML = "<span style=\"color:white;\">hh<span>"
            document.getElementById("title").style.color = "black";
        } else if (x == 1) {
            document.getElementById("title").innerHTML = "Chapitre 1 : HTML Definition";
        } else if (x == 2) {
            document.getElementById("title").innerHTML = "Chapitre 2 : Structure HTML";
        } else if (x == 3) {
            document.getElementById("title").innerHTML = "Chapitre 3 : Les noms de fichier";
        } else if (x == 4) {
            document.getElementById("title").innerHTML = "Chapitre 4 : Les fichiers";
        } else if (x == 5) {
            document.getElementById("title").innerHTML = "Chapitre 5 : L'entete";
        } else if (x == 6) {
            document.getElementById("title").innerHTML = "Chapitre 6 : La Balise Meta";
        } else if (x == 7) {
            document.getElementById("title").innerHTML = "Chapitre 7 : Le corps Body";
        } else if (x == 8) {
            document.getElementById("title").innerHTML = "Chapitre 8 : Le texte du Body";
        } else if (x == 9) {
            document.getElementById("title").innerHTML = "Chapitre 9 : Mise en forme des paragraphes/caractéres";
        } else if (x == 10) {
            document.getElementById("title").innerHTML = "Chapitre 10 : Les Listes";
        } else if (x == 11) {
            document.getElementById("title").innerHTML = "Chapitre 11 : Creation des Lignes Horizontales";
        } else if (x == 12) {
            document.getElementById("title").innerHTML = "Chapitre 12 : Les Liens externes/internes";
        } else if (x == 13) {
            document.getElementById("title").innerHTML = "Chapitre 13 : Les images statiques et animés";
        } else if (x == 14) {
            document.getElementById("title").innerHTML = "Chapitre 14 : Les Cartes";
        } else if (x == 15) {
            document.getElementById("title").innerHTML = "Chapitre 15 : Les Tableaux";
        } else if (x == 16) {
            document.getElementById("title").innerHTML = "Chapitre 16: HTML5";
        } else if (x == 17) {
            document.getElementById("title").innerHTML = "Chapitre 17 : Inserer Video";
        } else if (x == 18) {
            document.getElementById("title").innerHTML = "Chapitre 18 : Structure Generale d'une Page Web";
        }
    }

</script>

<body>

<!--import js-->
<script src="vendors/jquery-3.4.1.min.js"></script>
<script src="vendors/bootstrap.min.js"></script>
<script src="../../js/main.js"></script>
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
                <a href="#" class="nav1" style="background-color:#337ab7;" onmouseenter="afficheelement(1)"
                   onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(2)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(3)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(4)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(5)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(6)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(7)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(8)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(9)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(10)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(11)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(12)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(13)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(14)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(15)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(16)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(17)" onmouseleave="afficheelement(0)"></a>
            </li>
            <li>
                <a href="#" class="nav1" onmouseenter="afficheelement(18)" onmouseleave="afficheelement(0)"></a>
            </li>

        </ul>

    </div>
    <!-- Top Container -->


    <div id="myCarousel" class="carousel slide">

        <div class="carousel-inner"
             style="background-color:#98EABE;  border: 5px black solid; padding:100px; border-radius:25px;">
            <div class="item active">
                <h3>Javascript</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, architecto nam? Excepturi.</p>
                <?php
                $defhtml = "chap1.txt";
                $ligne = "";
                if (file_exists("$defhtml")) {
                    $fp = fopen("chap1.txt", "a+");
                    while (!feof($fp)) {
                        $ligne = fgets($fp) . "<br>";
                        echo $ligne;
                    }

                }
                ?>
            </div>

            <div class="item">
                <h3>Javascript</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, architecto nam? Excepturi.</p>
                <?php
                $defhtml = "chap1.txt";
                $ligne = "";
                if (file_exists("$defhtml")) {
                    $fp = fopen("chap1.txt", "a+");
                    while (!feof($fp)) {
                        $ligne = fgets($fp) . "<br>";
                        echo $ligne;
                    }

                }
                ?>
            </div>

            <div class="item">
                <h3>Javascript</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, architecto nam? Excepturi.</p>
                <?php
                $defhtml = "chap1.txt";
                $ligne = "";
                if (file_exists("$defhtml")) {
                    $fp = fopen("chap1.txt", "a+");
                    while (!feof($fp)) {
                        $ligne = fgets($fp) . "<br>";
                        echo $ligne;
                    }

                }
                ?>
            </div>
        </div>
        <div><br>

            <!-- Indicators -->
            <div style="text-align:center;">
                <li class="btn btn-success" data-target="#myCarousel" data-slide-to="0" class="active">1</li>
                <li class="btn btn-success" data-target="#myCarousel" data-slide-to="1">2</li>
                <li class="btn btn-success" data-target="#myCarousel" data-slide-to="2">3</li>

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