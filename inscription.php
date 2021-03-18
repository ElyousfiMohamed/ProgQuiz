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
                            <h3 class="panel-title" id="INSCRIPTION">INSCRIPTION</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="first_name" id="first_name"
                                                   class="form-control input-sm" placeholder="First Name" REQUIRED>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="last_name" id="last_name"
                                                   class="form-control input-sm" placeholder="Last Name" REQUIRED>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control input-sm"
                                           placeholder="Email Address" REQUIRED>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password" id="password"
                                                   class="form-control input-sm" placeholder="Password" REQUIRED>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation"
                                                   id="password_confirmation" class="form-control input-sm"
                                                   placeholder="Confirm Password" REQUIRED>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="indice" id="indice" class="form-control input-sm"
                                           placeholder="Entrer Votre indice" REQUIRED>
                                </div>


                                <input type="submit" value="INSCRIRE" class="btn btn-info btn-block" name="enregistrer">

                            </form>
                            <?php
                            if (isset($_POST["enregistrer"])) {
                                $nom = trim($_POST["last_name"]);
                                $prenom = trim($_POST["first_name"]);
                                $email = trim($_POST["email"]);
                                $password = trim(MD5($_POST["password"]));
                                $passwordconfirmation = MD5($_POST["password_confirmation"]);
                                $indice = $_POST["indice"];
                                if ($password == $passwordconfirmation) {
                                    if (!$connect = mysqli_connect("localhost", "root", "")) {
                                        exit("Desolé, Connexion a localhost impossible");
                                    }
                                    if (!mysqli_select_db($connect, "site_bd")) {
                                        exit("Desolé, l'acces a la base site_bd impossible");
                                    }

                                    $reg = mysqli_query($connect, "SELECT * From utilisateur WHERE EMAIL_USER='$email'");
                                    $rows = mysqli_num_rows($reg);
                                    if ($rows == 0) {
                                        $query = "INSERT INTO utilisateur (NOM_USER, PNOM_USER, EMAIL_USER, PWD_USER ,indice) VALUES ('$nom', '$prenom', '$email', '$password' , '$indice')";
                                        $result = mysqli_query($connect, $query);
                                        echo "<script> window.location.replace(\"se connecte.php\"); </script>";
                                        exit;
                                    } else {
                                        echo "<br><span style=\" font-weight:bold; color:red;\">Ce email deja inscrit</span>";
                                    }
                                } else {
                                    echo "<br><span style=\" font-weight:bold; color:red;\">les mots de passe ne sont pas identique</span>";
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