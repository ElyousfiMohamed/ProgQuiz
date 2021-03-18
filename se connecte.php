<?php
error_reporting(0);
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
    <link rel="stylesheet" type="text/css" href="style sheets/style1.css">
	<style>
			body
			{
				background-image : url("images/background.jpg");
			}
	</style>
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
        <i class="icon fa fa-bars fa-2x"></i>
    </div>
    <?php
    header_remove();
    include("nav_nonconnect.php");
    ?>
    <!-- FOMULAIRE-->
    <div class="inscrire">

        <div class="container">
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title" id="SECONNECTE">CONNEXION</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" name="fr" action="se connecte.php">

                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control input-sm"
                                           placeholder="Email Address" required>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="password" id="password"
                                                   class="form-control input-sm" placeholder="Password" required>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" value="CONNECTE" class="btn btn-info btn-block"
                                       name="connecte"><br>
                                <a href="motdepasseoublie.php" style="color:red;">Mot de passe oublié ?</a>
                            </form>
                            <?php
                            if (isset($_POST['connecte'])) {
                                $email = $_POST['email'];
                                $password = trim(MD5($_POST['password']));
                                if (!$connect = mysqli_connect("localhost", "root", "")) {
                                    exit("Desolé, Connexion a localhost impossible");
                                }
                                if (!mysqli_select_db($connect, 'site_bd')) {
                                    exit("Desolé, l'acces a la base site bd impossible");
                                }
                                $data = mysqli_query($connect, "SELECT * FROM utilisateur");
                                if ($data) {
                                    while ($ligne = mysqli_fetch_row($data)) {
                                        if ($email == $ligne[3] && $password == $ligne[4]) {
                                            session_start();
                                            $_SESSION['id_user'] = $ligne[0];
                                            $_SESSION['nom_user'] = $ligne[1];
                                            $_SESSION['pnom_user'] = $ligne[2];
                                            $_SESSION['correct_answers'] = $ligne[5];
                                            $_SESSION['wrong_answers'] = $ligne[6];
                                            echo "<script> window.location.replace(\"index.php\"); </script>";
                                            exit;
                                        }
                                    }
                                    echo "<br><span class=\"err\" >Email ou password incorrect. Réessayez !</span>";
                                    exit;
                                }

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>

</body>
</html>