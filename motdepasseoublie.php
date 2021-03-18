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
</head>

<body>


<!--import js-->
<script src="vendors/jquery-3.4.1.min.js"></script>
<script src="vendors/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script>
    elmnt = document.getElementById("changepassword");
</script>
<!--import js-->

<div class="wrapper">

    <!--logo-->
    <div class="logo">
        <div class="area1"><span class="nom1"><a href="index.php">PROGQUIZ</span><span class="nom2">.com</span></a>
        </div>
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
                            <form role="form" method="POST" name="fr">

                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control input-sm"
                                           placeholder="Email Address" required>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="indice" id="indice"
                                                   class="form-control input-sm" placeholder="Entrer L'indice" required>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" value="VALIDER" class="btn btn-info btn-block"
                                       name="connecte"><br>


                                <?php
                                if (isset($_POST['connecte'])) {
                                    $email = trim($_POST['email']);
                                    $indice = trim($_POST['indice']);
                                    if (!$connect = mysqli_connect("localhost", "root", "")) {
                                        exit("Desolé, Connexion a localhost impossible");
                                    }
                                    if (!mysqli_select_db($connect, 'site_bd')) {
                                        exit("Desolé, l'acces a la base site bd impossible");
                                    }
                                    $data = mysqli_query($connect, "SELECT * FROM utilisateur");
                                    if ($data) {

                                        while ($ligne = mysqli_fetch_row($data)) {

                                            if ($email == $ligne[3] && $indice == $ligne[10] && $number = 1) {
                                                echo "<script> window.location.replace(\"changepass.php\"); </script>";
                                            }
                                        }

                                        echo "<br><span class=\"err\" >indice ou Email incorrect. Réessayez !</span>";
                                        exit;
                                    }

                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>