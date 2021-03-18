<?php
session_start();
if (!isset($_SESSION['nom'])) {
    echo "<script>window.location.replace(\"Pageadmin.php\");</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Page Admin</title>
    <link rel="stylesheet" href="vendors/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="style sheets/admin.css">
	<style>
			body
			{
				background-image : url("images/background.jpg");
			}
	</style>
    <script>
        function afficher(n) {
            switch (n) {
                case 0:
                    document.getElementById("sec2").style = "display : online";
                    document.getElementById("sec3").style = "display : none";
                    document.getElementById("sec4").style = "display : none";
                    document.getElementById("sec5").style = "display : none";
                    document.getElementById("sec6").style = "display : none";
                    document.getElementById("sec7").style = "display : none";
                    document.getElementById("sec8").style = "display : none";
                    document.getElementById("sec9").style = "display : none";
                    document.getElementById("sec10").style = "display : none";
                    document.getElementById("sec11").style = "display : none";
                    document.getElementById("sec12").style = "display : none";
                    document.getElementById("sec13").style = "display : none";
                    document.getElementById("sec14").style = "display : none";
                    break;
                case 1:
                    document.getElementById("sec2").style = "display : none";
                    document.getElementById("sec3").style = "display : block";
                    document.getElementById("sec4").style = "display : none";
                    document.getElementById("sec5").style = "display : none";
                    document.getElementById("sec6").style = "display : none";
                    document.getElementById("sec7").style = "display : none";
                    document.getElementById("sec8").style = "display : none";
                    document.getElementById("sec9").style = "display : none";
                    document.getElementById("sec10").style = "display : none";
                    document.getElementById("sec11").style = "display : none";
                    document.getElementById("sec12").style = "display : none";
                    document.getElementById("sec13").style = "display : none";
                    document.getElementById("sec14").style = "display : none";
                    break;
                case 2:
                    document.getElementById("sec2").style = "display : none";
                    document.getElementById("sec3").style = "display : none";
                    document.getElementById("sec4").style = "display : block";
                    document.getElementById("sec5").style = "display : none";
                    document.getElementById("sec6").style = "display : none";
                    document.getElementById("sec7").style = "display : none";
                    document.getElementById("sec8").style = "display : none";
                    document.getElementById("sec9").style = "display : none";
                    document.getElementById("sec10").style = "display : none";
                    document.getElementById("sec11").style = "display : none";
                    document.getElementById("sec12").style = "display : none";
                    document.getElementById("sec13").style = "display : none";
                    document.getElementById("sec14").style = "display : none";
                    break;
                case 3:
                    document.getElementById("sec2").style = "display : none";
                    document.getElementById("sec3").style = "display : none";
                    document.getElementById("sec4").style = "display : none";
                    document.getElementById("sec5").style = "display : block";
                    document.getElementById("sec6").style = "display : none";
                    document.getElementById("sec7").style = "display : none";
                    document.getElementById("sec8").style = "display : none";
                    document.getElementById("sec9").style = "display : none";
                    document.getElementById("sec10").style = "display : none";
                    document.getElementById("sec11").style = "display : none";
                    document.getElementById("sec12").style = "display : none";
                    document.getElementById("sec13").style = "display : none";
                    document.getElementById("sec14").style = "display : none";
                    break;
                case 4:
                    document.getElementById("sec2").style = "display : none";
                    document.getElementById("sec3").style = "display : none";
                    document.getElementById("sec4").style = "display : none";
                    document.getElementById("sec5").style = "display : none";
                    document.getElementById("sec6").style = "display : block";
                    document.getElementById("sec7").style = "display : none";
                    document.getElementById("sec8").style = "display : none";
                    document.getElementById("sec9").style = "display : none";
                    document.getElementById("sec10").style = "display : none";
                    document.getElementById("sec11").style = "display : none";
                    document.getElementById("sec12").style = "display : none";
                    document.getElementById("sec13").style = "display : none";
                    document.getElementById("sec14").style = "display : none";
                    break;
                case 5:
                    document.getElementById("sec2").style = "display : none";
                    document.getElementById("sec3").style = "display : none";
                    document.getElementById("sec4").style = "display : none";
                    document.getElementById("sec5").style = "display : none";
                    document.getElementById("sec6").style = "display : none";
                    document.getElementById("sec7").style = "display : block";
                    document.getElementById("sec8").style = "display : none";
                    document.getElementById("sec9").style = "display : none";
                    document.getElementById("sec10").style = "display : none";
                    document.getElementById("sec11").style = "display : none";
                    document.getElementById("sec12").style = "display : none";
                    document.getElementById("sec13").style = "display : none";
                    document.getElementById("sec14").style = "display : none";
                    break;
                case 6:
                    document.getElementById("sec2").style = "display : none";
                    document.getElementById("sec3").style = "display : none";
                    document.getElementById("sec4").style = "display : none";
                    document.getElementById("sec5").style = "display : none";
                    document.getElementById("sec6").style = "display : none";
                    document.getElementById("sec7").style = "display : none";
                    document.getElementById("sec8").style = "display : block";
                    document.getElementById("sec9").style = "display : none";
                    document.getElementById("sec10").style = "display : none";
                    document.getElementById("sec11").style = "display : none";
                    document.getElementById("sec12").style = "display : none";
                    document.getElementById("sec13").style = "display : none";
                    document.getElementById("sec14").style = "display : none";
                    break;
                case 7:
                    document.getElementById("sec2").style = "display : none";
                    document.getElementById("sec3").style = "display : none";
                    document.getElementById("sec4").style = "display : none";
                    document.getElementById("sec5").style = "display : none";
                    document.getElementById("sec6").style = "display : none";
                    document.getElementById("sec7").style = "display : none";
                    document.getElementById("sec8").style = "display : none";
                    document.getElementById("sec9").style = "display : block";
                    document.getElementById("sec10").style = "display : none";
                    document.getElementById("sec11").style = "display : none";
                    document.getElementById("sec12").style = "display : none";
                    document.getElementById("sec13").style = "display : none";
                    document.getElementById("sec14").style = "display : none";
                    break;
                case 8:
                    document.getElementById("sec2").style = "display : none";
                    document.getElementById("sec3").style = "display : none";
                    document.getElementById("sec4").style = "display : none";
                    document.getElementById("sec5").style = "display : none";
                    document.getElementById("sec6").style = "display : none";
                    document.getElementById("sec7").style = "display : none";
                    document.getElementById("sec8").style = "display : none";
                    document.getElementById("sec9").style = "display : none";
                    document.getElementById("sec10").style = "display : block";
                    document.getElementById("sec11").style = "display : none";
                    document.getElementById("sec12").style = "display : none";
                    document.getElementById("sec13").style = "display : none";
                    document.getElementById("sec14").style = "display : none";
                    break;
                case 9:
                    document.getElementById("sec2").style = "display : none";
                    document.getElementById("sec3").style = "display : none";
                    document.getElementById("sec4").style = "display : none";
                    document.getElementById("sec5").style = "display : none";
                    document.getElementById("sec6").style = "display : none";
                    document.getElementById("sec7").style = "display : none";
                    document.getElementById("sec8").style = "display : none";
                    document.getElementById("sec9").style = "display : none";
                    document.getElementById("sec10").style = "display : none";
                    document.getElementById("sec11").style = "display : block";
                    document.getElementById("sec12").style = "display : none";
                    document.getElementById("sec13").style = "display : none";
                    document.getElementById("sec14").style = "display : none";
                    break;
                case 10:
                    document.getElementById("sec2").style = "display : none";
                    document.getElementById("sec3").style = "display : none";
                    document.getElementById("sec4").style = "display : none";
                    document.getElementById("sec5").style = "display : none";
                    document.getElementById("sec6").style = "display : none";
                    document.getElementById("sec7").style = "display : none";
                    document.getElementById("sec8").style = "display : none";
                    document.getElementById("sec9").style = "display : none";
                    document.getElementById("sec10").style = "display : none";
                    document.getElementById("sec11").style = "display : none";
                    document.getElementById("sec12").style = "display : block";
                    document.getElementById("sec13").style = "display : none";
                    document.getElementById("sec14").style = "display : none";
                    break;
                case 11:
                    document.getElementById("sec2").style = "display : none";
                    document.getElementById("sec3").style = "display : none";
                    document.getElementById("sec4").style = "display : none";
                    document.getElementById("sec5").style = "display : none";
                    document.getElementById("sec6").style = "display : none";
                    document.getElementById("sec7").style = "display : none";
                    document.getElementById("sec8").style = "display : none";
                    document.getElementById("sec9").style = "display : none";
                    document.getElementById("sec10").style = "display : none";
                    document.getElementById("sec11").style = "display : none";
                    document.getElementById("sec12").style = "display : none";
                    document.getElementById("sec13").style = "display : block";
                    document.getElementById("sec14").style = "display : none";
                    break;
                case 12:
                    document.getElementById("sec2").style = "display : none";
                    document.getElementById("sec3").style = "display : none";
                    document.getElementById("sec4").style = "display : none";
                    document.getElementById("sec5").style = "display : none";
                    document.getElementById("sec6").style = "display : none";
                    document.getElementById("sec7").style = "display : none";
                    document.getElementById("sec8").style = "display : none";
                    document.getElementById("sec9").style = "display : none";
                    document.getElementById("sec10").style = "display : none";
                    document.getElementById("sec11").style = "display : none";
                    document.getElementById("sec12").style = "display : none";
                    document.getElementById("sec13").style = "display : none";
                    document.getElementById("sec14").style = "display : block";
                    break;
            }
        }
    </script>
</head>


<body>
<!--import js-->
<script src="vendors/jquery-3.4.1.min.js"></script>
<script src="vendors/bootstrap.min.js"></script>
<script src="main.js"></script>
<!--import js-->


<div class="wrapper">
    <section class="section1">
        <div class="titre"> Espace Administrateur</div>
        <div class="sec">
            <span>Bonjour</span>
            <?php
            echo $_SESSION['nom'] . " " . $_SESSION['prenom'];
            ?>

        </div>
    </section>

    <!--NAV LIST-->
    <!-- Navigation -->
    <nav class="main-nav">
        <div id="#btn1">
            <button class="btn btn-primary" onclick="afficher(0)">Info</button>
        </div>
        <div class="dropdown" id="#btn2">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Utilisateurs
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#" onclick="afficher(1)">Afficher utilisateurs</a></li>
                <li><a href="#" onclick="afficher(4)">Ajouter utilisateurs</a></li>
                <li><a href="#" onclick="afficher(7)">Modifier utilisateurs</a></li>
                <li><a href="#" onclick="afficher(10)">Supprimer utilisateurs</a></li>
            </ul>
        </div>
        <div class="dropdown" id="#btn3">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Administrateurs
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#" onclick="afficher(2)">Afficher Administrateurs</a></li>
                <li><a href="#" onclick="afficher(5)">Ajouter Administrateurs</a></li>
                <li><a href="#" onclick="afficher(8)">Modifier Administrateurs</a></li>
                <li><a href="#" onclick="afficher(11)">Supprimer Administrateurs</a></li>
            </ul>
        </div>
        <div class="dropdown" id="#btn4">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Quiz
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#" onclick="afficher(3)">Afficher Quiz</a></li>
                <li><a href="#" onclick="afficher(6)">Ajouter Quiz</a></li>
                <li><a href="#" onclick="afficher(9)">Modifier Quiz</a></li>
                <li><a href="#" onclick="afficher(12)">Supprimer Quiz</a></li>
            </ul>
        </div>
        <div id="#btn5">
            <button class="btn btn-primary" OnClick="window.location.replace('destroy_session.php')">Logout</button>
        </div>
    </nav>

    <section class="section2" id="sec2">
        <p class="info">
            <a style="color:#337ab7; font-size: 40px;text-decoration : none;"
               href="../partie base/index.php">PROGQUIZ </a>
            est un site de développeurs Web, avec des didacticiels et des références sur les langages de développement
            Web
            tels que HTML, CSS, JavaScript, PHP, Java, couvrant la plupart aspects de la programmation Web.<br><br>
            Le site tire son nom du PROGQUIZ (PROGRAMMATION QUIZ), mais n'est pas.<br><br>
            Il a été créé à l'origine en 2020 par IKKOU YOUNESS ET MOHAMED ELYOUSFI, deux étudiants a l’Ecole Supérieure
            de technologie Oujda.
        </p>
        <img src="https://image.ibb.co/kYJK8x/showcase.jpg" class="image">
    </section>

    <section class="section3" id="sec3" style="display : none;">
        <!-- Utilisateurs -->
        <h2 class="titre2">Les utilisateurs connecter au site web PROGQUIZ</h2><br>
        <table border="1" cellspacing="0" width="900" height="800" class="table">
            <thead>
            <tr id="col1">
                <th style="text-align:center;" scope="col">Id-Utilisateur</th>
                <th style="text-align:center;" scope="col">Nom Utilisateur</th>
                <th style="text-align:center;" scope="col">Prenom Utilisateur</th>
                <th style="text-align:center;" scope="col">Email Utilisateur</th>
                <th style="text-align:center;" scope="col">Mot de passe d'utilisateur</th>
            </tr>
            <?php
            $connexion = mysqli_connect("localhost", "root", "");
            if (!$connexion) {
                echo "Desolé, connexion a localhost impossible";
                exit;
            }
            if (!mysqli_select_db($connexion, 'site_bd')) {
                echo "Desolé, connexion a la base site_bd impossible";
                exit;
            }
            $resultat = mysqli_query($connexion, "SELECT * FROM utilisateur");
            if ($resultat) {
                while ($ligne = mysqli_fetch_row($resultat)) {
                    $id = $ligne[0];
                    echo '<tr align="center"><td>' . $ligne[0] . '</td><td>' . $ligne[1] . '</td><td>' . $ligne[2] . '</td><td>' . $ligne[3] . '</td><td>' . $ligne[4] . '</td></tr>';
                }
            } else {
                echo "Erreur dans l'execution de la requete ." . mysqli_error($connexion);
            }
            mysqli_close($connexion);

            ?>
            </thead>
        </table>
    </section>

    <section class="section4" id="sec4" style="display : none;">
        <!-- Administrateurs -->
        <h2 class="titre2">Les Administrateurs du site web PROGQUIZ</h2><br>
        <table border="1" cellspacing="0" width="900" height="800" class="table">
            <thead>
            <tr id="col1">
                <th style="text-align:center;" scope="col">Id-Admin</th>
                <th style="text-align:center;" scope="col">Nom Admin</th>
                <th style="text-align:center;" scope="col">Prenom Admin</th>
                <th style="text-align:center;" scope="col">Email Admin</th>
                <th style="text-align:center;" scope="col">Mot de passe d'admin</th>
            </tr>
            <?php
            $connexion = mysqli_connect("localhost", "root", "");
            if (!$connexion) {
                echo "Desolé, connexion a localhost impossible";
                exit;
            }
            if (!mysqli_select_db($connexion, 'site_bd')) {
                echo "Desolé, connexion a la base site_bd impossible";
                exit;
            }
            $resultat = mysqli_query($connexion, "SELECT * FROM admin");
            if ($resultat) {
                while ($ligne = mysqli_fetch_row($resultat)) {
                    $id = $ligne[0];
                    echo '<tr align="center"><td>' . $ligne[0] . '</td><td>' . $ligne[1] . '</td><td>' . $ligne[2] . '</td><td>' . $ligne[3] . '</td><td>' . $ligne[4] . '</td></tr>';
                }
            } else {
                echo "Erreur dans l'execution de la requete ." . mysqli_error($connexion);
            }
            mysqli_close($connexion);

            ?>
            </thead>
        </table>
    </section>

    <section class="section5" id="sec5" style="display : none;">
        <!-- Quiz -->
        <h2 class="titre2" id="quiz">Les Quiz du site web PROGQUIZ</h2><br>
        <table border="1" cellspacing="0" width="900" height="800" class="table">
            <thead>
            <tr id="col1">
                <th style="text-align:center;" scope="col">Id-Quiz</th>
                <th style="text-align:center;" scope="col">Langage du Quiz</th>
                <th style="text-align:center;" scope="col">Question</th>
                <th style="text-align:center;" scope="col">Wrong ans 1</th>
                <th style="text-align:center;" scope="col">Wrong ans 2</th>
                <th style="text-align:center;" scope="col">Wrong ans 3</th>
                <th style="text-align:center;" scope="col">Correct ans</th>
            </tr>
            <?php
            $connexion = mysqli_connect("localhost", "root", "");
            if (!$connexion) {
                echo "Desolé, connexion a localhost impossible";
                exit;
            }
            if (!mysqli_select_db($connexion, 'site_bd')) {
                echo "Desolé, connexion a la base site_bd impossible";
                exit;
            }
            $resultat = mysqli_query($connexion, "SELECT * FROM quiz");
            if ($resultat) {
                while ($ligne = mysqli_fetch_row($resultat)) {
                    $id = $ligne[0];
                    echo '<tr align="center"><td>' . $ligne[0] . '</td><td>' . $ligne[1] . '</td><td>' . $ligne[2] . '</td><td>' . $ligne[3] . '</td><td>' . $ligne[4] . '</td><td>' . $ligne[5] . '</td><td>' . $ligne[6] . '</td></tr>';
                }
            } else {
                echo "Erreur dans l'execution de la requete ." . mysqli_error($connexion);
            }
            mysqli_close($connexion);

            ?>
            </thead>
        </table>
    </section>

    <section class="section6" id="sec6" style="display : none;">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align : center;">AJOUTER UTILISATEUR</h3>
                    </div>
                    <div class="panel-body">
                        <form name="fr1" method="post">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" class="form-control input-sm"
                                               placeholder="NOM" REQUIRED>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name" class="form-control input-sm"
                                               placeholder="PRENOM" REQUIRED>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control input-sm"
                                       placeholder="Email Address" REQUIRED>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control input-sm"
                                               placeholder="Password" REQUIRED><br>
                                        <input type="password" name="indice" class="form-control input-sm"
                                               placeholder="Indice" REQUIRED>
                                    </div>
                                </div>

                            </div>

                            <input type="submit" value="INSCRIRE" class="btn btn-info btn-block" name="enregistrer">

                        </form>
                        <?php
                        if (isset($_POST['enregistrer'])) {
                            if (!$connect = mysqli_connect("localhost", "root", "")) {
                                exit("Desolé, Connexion a localhost impossible");
                            }
                            if (!mysqli_select_db($connect, 'site_bd')) {
                                exit("Desolé, l'acces a la base de donnee Administrateur  impossible");
                            }
                            $nom = trim($_POST["first_name"]);
                            $prenom = trim($_POST["last_name"]);
                            $email = trim($_POST["email"]);
                            $pwd = trim(MD5($_POST["password"]));
                            $indice = trim($_POST["indice"]);
                            $reg = mysqli_query($connect, "SELECT * From utilisateur WHERE EMAIL_USER='$email'");
                            $rows = mysqli_num_rows($reg);
                            if ($rows == 0) {
                                mysqli_query($connect, "INSERT INTO `utilisateur` (`NOM_USER`, `PNOM_USER`, `EMAIL_USER`, `PWD_USER`,`indice`) VALUES ('$nom', '$prenom', '$email', '$pwd', '$indice');");
                                echo "<script>window.location.replace(\"success.php\");</script>";
                            } else {
                                echo "<script>window.location.replace(\"failed.php\");</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section7" id="sec7" style="display : none;">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align : center;">AJOUTER ADMINISTRATEUR</h3>
                    </div>
                    <div class="panel-body">
                        <form name="fr2" method="post">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name_a" class="form-control input-sm"
                                               placeholder="NOM" REQUIRED>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name_a" class="form-control input-sm"
                                               placeholder="PRENOM" REQUIRED>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email_a" class="form-control input-sm"
                                       placeholder="Email Address" REQUIRED>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="password_a" class="form-control input-sm"
                                               placeholder="Password" REQUIRED><br>
                                        <input type="password" name="indice_a" class="form-control input-sm"
                                               placeholder="Indice" REQUIRED>

                                    </div>
                                </div>

                            </div>

                            <input type="submit" value="INSCRIRE" class="btn btn-info btn-block" name="enregistrer_a">

                        </form>
                        <?php
                        if (isset($_POST['enregistrer_a'])) {
                            if (!$connect = mysqli_connect("localhost", "root", "")) {
                                exit("Desolé, Connexion a localhost impossible");
                            }
                            if (!mysqli_select_db($connect, 'site_bd')) {
                                exit("Desolé, l'acces a la base de donnee Administrateur  impossible");
                            }
                            $nom_a = trim($_POST["first_name_a"]);
                            $prenom_a = trim($_POST["last_name_a"]);
                            $email_a = trim($_POST["email_a"]);
                            $pwd_a = trim($_POST["password_a"]);
                            $indice_a = trim($_POST["indice_a"]);
                            $reg_a = mysqli_query($connect, "SELECT * From admin WHERE EMAIL_ADMIN='$email_a'");
                            $rows_a = mysqli_num_rows($reg_a);
                            if ($rows_a == 0) {
                                mysqli_query($connect, "INSERT INTO `admin` (`NOM_ADMIN`, `PNOM_ADMIN`, `EMAIL_ADMIN`, `PWD_ADMIN`,`indice`) VALUES ('$nom_a', '$prenom_a', '$email_a', '$pwd_a', '$indice_a');");
                                echo "<script>window.location.replace(\"success.php\");</script>";
                            } else {
                                echo "<script>window.location.replace(\"failed.php\");</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section8" id="sec8" style="display : none;">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align : center;">AJOUTER QUIZ</h3>
                    </div>
                    <div class="panel-body">
                        <form name="fr3" method="post">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="lang_quiz" class="form-control btn-default"
                                               placeholder="LANGAGE_QUIZ">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="question" class="form-control btn-default"
                                       placeholder="QUESTION (sans caractere speciaux)" REQUIRED>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="WRONG_ANSWER1" class="form-control btn-danger"
                                               placeholder="WRONG_ANSWER1 (sans caractere speciaux)" REQUIRED><br>
                                        <input type="text" name="WRONG_ANSWER2" class="form-control btn-danger"
                                               placeholder="WRONG_ANSWER2 (sans caractere speciaux)" REQUIRED><br>
                                        <input type="text" name="WRONG_ANSWER3" class="form-control btn-danger"
                                               placeholder="WRONG_ANSWER3 (sans caractere speciaux)" REQUIRED><br>
                                        <input type="text" name="CORRECT_ANSWER" class="form-control btn-success"
                                               placeholder="CORRECT_ANSWER (sans caractere speciaux)" REQUIRED>
                                    </div>
                                </div>

                            </div>

                            <input type="submit" value="INSCRIRE" class="btn btn-info btn-block" name="enregistrer_q">

                        </form>
                        <?php
                        if (isset($_POST['enregistrer_q'])) {
                            if (!$connect = mysqli_connect("localhost", "root", "")) {
                                exit("Desolé, Connexion a localhost impossible");
                            }
                            if (!mysqli_select_db($connect, 'site_bd')) {
                                exit("Desolé, l'acces a la base de donnee Administrateur  impossible");
                            }
                            $lang_quiz = trim($_POST["lang_quiz"]);
                            $question = trim($_POST["question"]);
                            $WRONG_ANSWER1 = trim($_POST["WRONG_ANSWER1"]);
                            $WRONG_ANSWER2 = trim($_POST["WRONG_ANSWER2"]);
                            $WRONG_ANSWER3 = trim($_POST["WRONG_ANSWER3"]);
                            $CORRECT_ANSWER = trim($_POST["CORRECT_ANSWER"]);
                            mysqli_query($connect, "INSERT INTO `quiz` (`LANG_QUIZ`, `QUESTION`, `WRONG_ANSWER1`, `WRONG_ANSWER2`, `WRONG_ANSWER3`, `CORRECT_ANSWER`) VALUES ('$lang_quiz', '$question', '$WRONG_ANSWER1', '$WRONG_ANSWER2', '$WRONG_ANSWER3', '$CORRECT_ANSWER');");
                            echo "<script>window.location.replace(\"success.php\");</script>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section9" id="sec9" style="display : none;">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align : center;">Modifier UTILISATEUR</h3>
                    </div>
                    <div class="panel-body">
                        <span>*Remplisser juste les champs que vous voulez modifier</span><br><br>
                        <form name="fr4" method="post">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <input type="text" name="id_uu" class="form-control input-sm"
                                           placeholder="Id User (que vous voulez modifier)" REQUIRED><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name_uu" class="form-control input-sm"
                                               placeholder="NOM">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name_uu" class="form-control input-sm"
                                               placeholder="PRENOM">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email_uu" class="form-control input-sm"
                                       placeholder="Email Address">
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="password_uu" class="form-control input-sm"
                                               placeholder="Password"><br>
                                        <input type="password" name="indice_uu" class="form-control input-sm"
                                               placeholder="Indice">
                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="INSCRIRE" class="btn btn-info btn-block" name="enregistrer_uu">

                        </form>
                        <?php
                        if (isset($_POST['enregistrer_uu'])) {

                            if (!$connect = mysqli_connect("localhost", "root", "")) {
                                exit("Desolé, Connexion a localhost impossible");
                            }

                            if (!mysqli_select_db($connect, 'site_bd')) {
                                exit("Desolé, l'acces a la base de donnee Administrateur  impossible");
                            }
                            $id_uu = $_POST["id_uu"];
                            $data_uu = mysqli_query($connect, "SELECT `NOM_USER`, `PNOM_USER`, `EMAIL_USER`, `PWD_USER`,`indice` From utilisateur WHERE ID_USER='$id_uu'");
                            $rows_uu = mysqli_num_rows($data_uu);
                            if ($rows_uu == 0) {
                                echo "<script>window.location.replace(\"rien.php\");</script>";
                            } else {
                                $ligne = mysqli_fetch_row($data_uu);
                                if ($_POST["first_name_uu"] == "") {
                                    $nom_uu = $ligne[0];
                                } else {
                                    $nom_uu = trim($_POST["first_name_uu"]);
                                }
                                if ($_POST["last_name_uu"] == "") {
                                    $prenom_uu = $ligne[1];
                                } else {
                                    $prenom_uu = trim($_POST["last_name_uu"]);
                                }
                                if ($_POST["email_uu"] == "") {
                                    $email_uu = $ligne[2];
                                } else {
                                    $email_uu = trim($_POST["email_uu"]);
                                }
                                if ($_POST["password_uu"] == "") {
                                    $password_uu = MD5($ligne[3]);
                                } else {
                                    $password_uu = trim(MD5($_POST["password_uu"]));
                                }
                                if ($_POST["indice_uu"] == "") {
                                    $indice_uu = $ligne[4];
                                } else {
                                    $indice_uu = trim($_POST["indice_uu"]);
                                }
                                mysqli_query($connect, "UPDATE `utilisateur` SET `NOM_USER` = '$nom_uu',`PNOM_USER` = '$prenom_uu',`EMAIL_USER` = '$email_uu',`PWD_USER` = '$password_uu',`indice` = '$indice_uu' WHERE `utilisateur`.`ID_USER` = '$id_uu';");
                                echo "<script>window.location.replace(\"success.php\");</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section10" id="sec10" style="display : none;">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align : center;">Modifier Administrateur</h3>
                    </div>
                    <div class="panel-body">
                        <span>*Remplisser juste les champs que vous voulez modifier</span><br><br>
                        <form name="fr5" method="post">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <input type="text" name="id_aaa" class="form-control input-sm"
                                           placeholder="Id User (que vous voulez modifier)" REQUIRED><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name_aaa" class="form-control input-sm"
                                               placeholder="NOM">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name_aaa" class="form-control input-sm"
                                               placeholder="PRENOM">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email_aaa" class="form-control input-sm"
                                       placeholder="Email Address">
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="password_aaa" class="form-control input-sm"
                                               placeholder="Password"><br>
                                        <input type="password" name="indice_aaa" class="form-control input-sm"
                                               placeholder="Indice">
                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="INSCRIRE" class="btn btn-info btn-block" name="enregistrer_aaa">

                        </form>
                        <?php
                        if (isset($_POST['enregistrer_aaa'])) {

                            if (!$connect = mysqli_connect("localhost", "root", "")) {
                                exit("Desolé, Connexion a localhost impossible");
                            }

                            if (!mysqli_select_db($connect, 'site_bd')) {
                                exit("Desolé, l'acces a la base de donnee Administrateur  impossible");
                            }
                            $id_aaa = $_POST["id_aaa"];
                            $data_aaa = mysqli_query($connect, "SELECT `NOM_ADMIN`, `PNOM_ADMIN`, `EMAIL_ADMIN`, `PWD_ADMIN`,`indice` From admin WHERE ID_ADMIN='$id_aaa'");
                            $rows_aaa = mysqli_num_rows($data_aaa);
                            if ($rows_aaa == 0) {
                                echo "<script>window.location.replace(\"rien.php\");</script>";
                            } else {
                                $ligne = mysqli_fetch_row($data_aaa);
                                if ($_POST["first_name_aaa"] == "") {
                                    $nom_aaa = $ligne[0];
                                } else {
                                    $nom_aaa = trim($_POST["first_name_aaa"]);
                                }
                                if ($_POST["last_name_aaa"] == "") {
                                    $prenom_aaa = $ligne[1];
                                } else {
                                    $prenom_aaa = trim($_POST["last_name_aaa"]);
                                }
                                if ($_POST["email_aaa"] == "") {
                                    $email_aaa = $ligne[2];
                                } else {
                                    $email_aaa = trim($_POST["email_aaa"]);
                                }
                                if ($_POST["password_aaa"] == "") {
                                    $password_aaa = $ligne[3];
                                } else {
                                    $password_aaa = trim($_POST["password_aaa"]);
                                }
                                if ($_POST["indice_aaa"] == "") {
                                    $indice_aaa = $ligne[4];
                                } else {
                                    $indice_aaa = trim($_POST["indice_aaa"]);
                                }
                                mysqli_query($connect, "UPDATE `admin` SET `NOM_ADMIN` = '$nom_aaa',`PNOM_ADMIN` = '$prenom_aaa',`EMAIL_ADMIN` = '$email_aaa',`PWD_ADMIN` = '$password_aaa',`indice` = '$indice_aaa' WHERE `admin`.`ID_ADMIN` = '$id_aaa';");
                                echo "<script>window.location.replace(\"success.php\");</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section11" id="sec11" style="display : none;">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align : center;">MODIFIER QUIZ</h3>
                    </div>
                    <div class="panel-body">
                        <span>*Remplisser juste les champs que vous voulez modifier</span><br><br>
                        <form name="fr6" method="post">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="id_qqq" class="form-control btn-default"
                                               placeholder="ID_QUIZ (que vous voulez modifier)" REQUIRED>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="lang_quiz_qqq" class="form-control btn-default"
                                               placeholder="LANGAGE_QUIZ">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="question_qqq" class="form-control btn-default"
                                       placeholder="QUESTION (sans caractere speciaux)">
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="WRONG_ANSWER1_qqq" class="form-control btn-danger"
                                               placeholder="WRONG_ANSWER1 (sans caractere speciaux)"><br>
                                        <input type="text" name="WRONG_ANSWER2_qqq" class="form-control btn-danger"
                                               placeholder="WRONG_ANSWER2 (sans caractere speciaux)"><br>
                                        <input type="text" name="WRONG_ANSWER3_qqq" class="form-control btn-danger"
                                               placeholder="WRONG_ANSWER3 (sans caractere speciaux)"><br>
                                        <input type="text" name="CORRECT_ANSWER_qqq" class="form-control btn-success"
                                               placeholder="CORRECT_ANSWER (sans caractere speciaux)">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="INSCRIRE" class="btn btn-info btn-block" name="enregistrer_qqq">
                        </form>
                        <?php
                        if (isset($_POST['enregistrer_qqq'])) {

                            if (!$connect = mysqli_connect("localhost", "root", "")) {
                                exit("Desolé, Connexion a localhost impossible");
                            }

                            if (!mysqli_select_db($connect, 'site_bd')) {
                                exit("Desolé, l'acces a la base de donnee Administrateur  impossible");
                            }
                            $id_qqq = $_POST["id_qqq"];
                            $data_qqq = mysqli_query($connect, "SELECT `LANG_QUIZ`, `QUESTION`, `WRONG_ANSWER1`, `WRONG_ANSWER2`, `WRONG_ANSWER3`, `CORRECT_ANSWER` From quiz WHERE ID_QUIZ='$id_qqq'");
                            $rows_qqq = mysqli_num_rows($data_qqq);
                            if ($rows_qqq == 0) {
                                echo "<script>window.location.replace(\"rien.php\");</script>";
                            } else {
                                $ligne = mysqli_fetch_row($data_qqq);
                                if ($_POST["lang_quiz_qqq"] == "") {
                                    $lang_quiz_qqq = $ligne[0];
                                } else {
                                    $lang_quiz_qqq = trim($_POST["lang_quiz_qqq"]);
                                }
                                if ($_POST["question_qqq"] == "") {
                                    $question_qqq = $ligne[1];
                                } else {
                                    $question_qqq = trim($_POST["question_qqq"]);
                                }
                                if ($_POST["WRONG_ANSWER1_qqq"] == "") {
                                    $WRONG_ANSWER1_qqq = $ligne[2];
                                } else {
                                    $WRONG_ANSWER1_qqq = trim($_POST["WRONG_ANSWER1_qqq"]);
                                }
                                if ($_POST["WRONG_ANSWER2_qqq"] == "") {
                                    $WRONG_ANSWER2_qqq = $ligne[3];
                                } else {
                                    $WRONG_ANSWER2_qqq = trim($_POST["WRONG_ANSWER2_qqq"]);
                                }
                                if ($_POST["WRONG_ANSWER3_qqq"] == "") {
                                    $WRONG_ANSWER3_qqq = $ligne[4];
                                } else {
                                    $WRONG_ANSWER3_qqq = trim($_POST["WRONG_ANSWER3_qqq"]);
                                }
                                if ($_POST["CORRECT_ANSWER_qqq"] == "") {
                                    $CORRECT_ANSWER_qqq = $ligne[5];
                                } else {
                                    $CORRECT_ANSWER_qqq = trim($_POST["CORRECT_ANSWER_qqq"]);
                                }
                                mysqli_query($connect, "UPDATE `quiz` SET `LANG_QUIZ` = '$lang_quiz_qqq', `QUESTION` = '$question_qqq', `WRONG_ANSWER1` = '$WRONG_ANSWER1_qqq', `WRONG_ANSWER2` = '$WRONG_ANSWER2_qqq', `WRONG_ANSWER3` = '$WRONG_ANSWER3_qqq', `CORRECT_ANSWER` =  '$CORRECT_ANSWER_qqq' WHERE `quiz`.`ID_QUIZ` = '$id_qqq';");
                                echo "<script>window.location.replace(\"success.php\");</script>";
                            }
                        }
                        ?>
    </section>

    <section class="section12" id="sec12" style="display : none;">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align : center;">SUPPRIMER UTILISATEUR</h3>
                    </div>
                    <div class="panel-body">
                        <form name="fr7" method="post">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email_u" class="form-control btn-default"
                                               placeholder="EMAIL">
                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="INSCRIRE" class="btn btn-info btn-block" name="enregistrer_u">
                        </form>
                        <?php
                        if (isset($_POST['enregistrer_u'])) {
                            if (!$connect = mysqli_connect("localhost", "root", "")) {
                                exit("Desolé, Connexion a localhost impossible");
                            }
                            if (!mysqli_select_db($connect, 'site_bd')) {
                                exit("Desolé, l'acces a la base de donnee Administrateur  impossible");
                            }
                            $email_u = trim($_POST["email_u"]);
                            $reg_u = mysqli_query($connect, "SELECT * From utilisateur WHERE EMAIL_USER='$email_u'");
                            $rows_u = mysqli_num_rows($reg_u);
                            if (!$rows_u == 0) {
                                mysqli_query($connect, "DELETE FROM `utilisateur` WHERE `utilisateur`.`EMAIL_USER` = '$email_u'");
                                echo "<script>window.location.replace(\"success.php\");</script>";
                            } else {
                                echo "<script>window.location.replace(\"rien.php\");</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>

<section class="section13" id="sec13" style="display : none;">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align : center;">SUPPRIMER ADMINISTRATEUR</h3>
                </div>
                <div class="panel-body">
                    <form name="fr8" method="post">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email_aa" class="form-control btn-default"
                                           placeholder="EMAIL">
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="INSCRIRE" class="btn btn-info btn-block" name="enregistrer_aa">
                    </form>
                    <?php
                    if (isset($_POST['enregistrer_aa'])) {
                        if (!$connect = mysqli_connect("localhost", "root", "")) {
                            exit("Desolé, Connexion a localhost impossible");
                        }
                        if (!mysqli_select_db($connect, 'site_bd')) {
                            exit("Desolé, l'acces a la base de donnee Administrateur  impossible");
                        }
                        $email_aa = trim($_POST["email_aa"]);
                        $reg_aa = mysqli_query($connect, "SELECT * From admin WHERE EMAIL_ADMIN='$email_aa'");
                        $rows_aa = mysqli_num_rows($reg_aa);
                        if (!$rows_aa == 0) {
                            mysqli_query($connect, "DELETE FROM `admin` WHERE `admin`.`EMAIL_ADMIN` = '$email_aa'");
                            echo "<script>window.location.replace(\"success.php\");</script>";
                        } else {
                            echo "<script>window.location.replace(\"rien.php\");</script>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="section14" id="sec14" style="display : none;">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align : center;">SUPPRIMER QUIZ</h3>
                </div>
                <div class="panel-body">
                    <form name="fr9" method="post">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="id_qq" class="form-control btn-default"
                                           placeholder="ID_QUIZ">
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="INSCRIRE" class="btn btn-info btn-block" name="enregistrer_qq">
                    </form>
                    <?php
                    if (isset($_POST['enregistrer_qq'])) {
                        if (!$connect = mysqli_connect("localhost", "root", "")) {
                            exit("Desolé, Connexion a localhost impossible");
                        }
                        if (!mysqli_select_db($connect, 'site_bd')) {
                            exit("Desolé, l'acces a la base de donnee Administrateur  impossible");
                        }
                        $id_qq = trim($_POST["id_qq"]);
                        $reg_qq = mysqli_query($connect, "SELECT * From quiz WHERE ID_QUIZ='$id_qq'");
                        $rows_qq = mysqli_num_rows($reg_qq);
                        if (!$rows_qq == 0) {
                            mysqli_query($connect, "DELETE FROM `quiz` WHERE `quiz`.`ID_QUIZ` = '$id_qq'");
                            echo "<script>window.location.replace(\"success.php\");</script>";
                        } else {
                            echo "<script>window.location.replace(\"rien.php\");</script>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<footer>
    <p>PROGQUIZ &copy; 2020</p>
</footer>

</div>
</body>
</html>