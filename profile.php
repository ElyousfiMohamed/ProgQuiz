<?php
ob_start();
session_start();
$_SESSION['nom'] = 0;//on va l'utiliser pour l'affichage de message de modification
if (!isset($_SESSION['id_user'])) {
    echo "
  <script> 
  alert(\"Veuillez inscrire pour consulter les quiz\");
  window.location.replace(\"inscription.php\"); 
  </script>";
    exit;
} else {
    $_SESSION['lang'] = "html";
    if (!isset($_SESSION['html'])) {
        $_SESSION['html'] = 0;
    }
}
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style sheets/style2.css">
	<style>
			body
			{
				background-image : url("images/background.jpg");
			}
	</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        let a = 0;

        function modifieruser() {
            a++;
            let b = a % 2;
            $('.modif').slideToggle();
            if (b == 1) {
                $('.fa2').hide();
                $('.fa1').show();
            } else {
                $('.fa1').hide();
                $('.fa2').show();
            }

        }
    </script>
</head>
<body>

<!--import js-->
<script src="vendors/jquery-3.4.1.min.js"></script>
<script src="vendors/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!--import js-->
<div class="wrapper">
    <!--logo-->
    <div class="logo">
        <div class="area1"><span class="nom1"><a href="#">PROGQUIZ</span><span class="nom2">.com</span></a></div>
        <div class="area2"><span class="text">Let's change the world</span></div>
        <i class="icon fa fa-bars fa-2x"></i>
    </div>

    <div class="tout">
        <?php
        if (isset($_SESSION['id_user']))
            include("nav_connect.php");
        else
            include("nav_nonconnect.php");
        ?>
        <div style="background-color:#5cb85c; padding:10px; border-radius:5px;">

            <form action="modifieruser.php" method="post">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" style="color:white" ;>
                    <?php
                    echo strtoupper($_SESSION['nom_user'] . " " . $_SESSION['pnom_user']);
                    ?>
                </div>
                <br>
        </div>

        </form>

        <?php
        if (!$connect = mysqli_connect("localhost", "root", "")) {
            exit("Desolé, Connexion a localhost impossible");
        }
        if (!mysqli_select_db($connect, 'site_bd')) {
            exit("Desolé, l'acces a la base de donnee Administrateur  impossible");
        }
        $id_user = $_SESSION['id_user'];
        $lang = $_SESSION['lang'];
        if ($_SESSION['lang'] == "html") {
            $data = mysqli_query($connect, "SELECT * FROM `utilisateur` WHERE ID_USER = '$id_user' ");
            $ligne = mysqli_fetch_row($data);
            $score_html = $ligne[5];
            $score_css = $ligne[6];
            $score_php = $ligne[7];
            $score_js = $ligne[8];
            $score_java = $ligne[9];
            $data = mysqli_query($connect, "SELECT * FROM `quiz` WHERE LANG_QUIZ = '$lang' ");
            $ligne = mysqli_fetch_row($data);
            $nombredesquiz = count($ligne);
        }

        ?>

    </div>

    <div class="panel-body">
        <section class="boxes">
            <div class="box">
                <i class="fab fa-js fa-5x" style="color:#337ab7;"></i>
                <h3>JAVASCRIPT</h3>
                <p style="color:green; font-weight:bold;">LE SCORE DE JS EST :<?php echo $score_js; ?></p>
            </div>
            <div class="box">
                <i class="fab fa-html5 fa-5x" style="color:#337ab7;"></i>
                <h3>HTML</h3>
                <p style="color:green; font-weight:bold;">LE SCORE DE HTML EST :<?php echo $score_html; ?></p>
            </div>
            <div class="box">
                <i class="fab fa-css3 fa-5x" style="color:#337ab7;"></i>
                <h3>CSS</h3>
                <p style="color:green; font-weight:bold;">LE SCORE DE CSS EST :<?php echo $score_css; ?></p>
            </div>
            <div class="box">
                <i class="fab fa-php fa-5x" style="color:#337ab7;"></i>
                <h3>PHP</h3>
                <p style="color:green; font-weight:bold;">LE SCORE DE PHP EST :<?php echo $score_php; ?></p>
            </div>
            <div class="box">
                <i class="fab fa-java fa-5x" style="color:#337ab7;"></i>
                <h3>JAVA</h3>
                <p style="color:green; font-weight:bold;">LE SCORE DE JAVA EST :<?php echo $score_java; ?></p>
            </div>

        </section>


    </div>
    <!-- Trigger the modal with a button -->
    <div style="text-align:center;">
        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"
                id="buttonchange"
                style="background-color:#5cb85c;">Change mon profil
        </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm" style="width:500px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Changer Mon Profil</h4>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <!----------------------------------------->
                        <div class="row">
                            <div class="col-lg-9 col-xs-8 col-sm-8 col-md-8">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-sm"
                                           placeholder="nom">
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="submit" value="Modifier"
                                           style="border-radius:5px; background-color:white; color:green;"
                                           name="envoyer">
                                </div>
                            </div>
                        </div>

                        <!----------------------------------------->
                    </form>
                    <form method="post">
                        <!----------------------------------------->
                        <div class="row">
                            <div class="col-lg-9 col-xs-8 col-sm-8 col-md-8">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-sm"
                                           placeholder="prenom">
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="submit" value="Modifier"
                                           style="border-radius:5px; background-color:white; color:green;"
                                           name="envoyer">
                                </div>
                            </div>
                        </div>
                        <!----------------------------------------->
                    </form>
                    <form method="post">
                        <!----------------------------------------->
                        <div class="row">
                            <div class="col-lg-9 col-xs-8 col-sm-8 col-md-8">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control input-sm"
                                           placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="submit" value="Modifier"
                                           style="border-radius:5px; background-color:white; color:green;"
                                           name="envoyer">
                                </div>
                            </div>
                        </div>
                        <!----------------------------------------->
                    </form>
                    <form method="post">
                        <!----------------------------------------->
                        <div class="row">
                            <div class="col-lg-9 col-xs-8 col-sm-8 col-md-8">
                                <div class="form-group">
                                    <input type="text" name="code" id="code" class="form-control input-sm"
                                           placeholder="Mot de passe">
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="submit" value="Modifier"
                                           style="border-radius:5px; background-color:white; color:green;"
                                           name="envoyer">
                                </div>
                            </div>
                        </div>
                        <!----------------------------------------->
                    </form>
                    <!----------------------------------------->
                </div>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST["envoyer"])) {

        $nom = trim($_POST["last_name"]);
        $prenom = trim($_POST["first_name"]);
        $email = trim($_POST["email"]);
        $motdepasse = trim($_POST["code"]);
        $id_user = $_SESSION['id_user'];

        if (!$connect = mysqli_connect("localhost", "root", "")) {
            exit("Desolé, Connexion a localhost impossible");
        }
        if (!mysqli_select_db($connect, 'site_bd')) {
            exit("Desolé, l'acces a la base de donnee Administrateur  impossible");
        }
        $data = mysqli_query($connect, "SELECT ID_USER,NOM_USER,PNOM_USER,EMAIL_USER,PWD_USER FROM utilisateur");
        if ($data) {

            while ($ligne = mysqli_fetch_row($data)) {
                if ($id_user == $ligne[0]) {
                    if (empty($nom)) {
                        $nom = $ligne[1];

                    } else {
                        $_SESSION['nom'] = 1;
                    }
                    if (empty($prenom)) {
                        $prenom = $ligne[2];
                        $nombre = 2;
                    } else {
                        $_SESSION['nom'] = 2;
                    }
                    if (empty($email)) {
                        $email = $ligne[3];
                        $nombre = 3;
                    } else {
                        $_SESSION['nom'] = 3;
                    }
                    if (empty($motdepasse)) {
                        $motdepasse = trim(MD5($ligne[4] ));;
                        $nombre = 4;
                    } else {
                        $_SESSION['nom'] = 4;
                    }

                    $data = mysqli_query($connect, "UPDATE utilisateur SET NOM_USER = '$nom', PNOM_USER='$prenom' , EMAIL_USER='$email',PWD_USER='$motdepasse' WHERE ID_USER = '$id_user'");
                    header("Location:success.php");
                    exit;
                }
            }

        }

    }


    ?>
    <br><br><br>

    <!-- Portfolio -->
    <section class="portfolio">
        <img src="https://source.unsplash.com/random/206x200" alt="">
        <img src="https://source.unsplash.com/random/207x200" alt="">
        <img src="https://source.unsplash.com/random/208x200" alt="">
        <img src="https://source.unsplash.com/random/209x200" alt="">
        <img src="https://source.unsplash.com/random/210x200" alt="">
        <img src="https://source.unsplash.com/random/211x200" alt="">

    </section>
    <!-- Portfolio -->


    <!-- Footer -->
    <footer>
        <p>PROGQUIZ &copy; 2020</p>
    </footer>
    <!-- Footer -->
</div>
</body>
</html>