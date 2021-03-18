<!DOCTYPE html>
<html>
<head>
    <title></title>
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
    </section>
</div>

<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Se Connecter</h3>
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
                                    <input type="password" name="password" id="password" class="form-control input-sm"
                                           placeholder="Password" required>
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="Enregistrer" class="btn btn-info btn-block" name="btn"><br>

                        <a href="modifinfo.php" class="modif"> Mot de passe oublié ?</a><br>
                        <?php

                        if (isset($_POST['btn'])) {
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            if (!$connect = mysqli_connect("localhost", "root", "")) {
                                exit("Desolé, Connexion a localhost impossible");
                            }
                            if (!mysqli_select_db($connect, 'site_bd')) {
                                exit("Desolé, l'acces a la base de donnee Administrateur  impossible");
                            }
                            /* $name=mysqli_query($connect,"SELECT nom_admin FROM admin");
                              $prenom=mysqli_query($connect,"SELECT prenom_admin FROM admin");*/
                            $data = mysqli_query($connect, "SELECT EMAIL_ADMIN,PWD_ADMIN FROM admin");
                            $data2 = mysqli_query($connect, "SELECT NOM_ADMIN,PNOM_ADMIN FROM admin");
                            if ($data) {
                                while ($ligne = mysqli_fetch_row($data) and $ligne2 = mysqli_fetch_row($data2)) {
                                    if ($email == $ligne[0] && $password == $ligne[1]) {
                                        session_start();
                                        $_SESSION['nom'] = $ligne2[0];
                                        $_SESSION['prenom'] = $ligne2[1];
                                        header('location: admin.php');
                                        exit;
                                    }
                                }
                                echo "<br><span class=\"err\" style=\"color:red; text-align:center;\">Email ou password incorrect. Réessayez !</span>";
                            }
                        }

                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>