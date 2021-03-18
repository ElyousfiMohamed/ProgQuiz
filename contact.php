<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contactez Nous</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--important pour la largeur pour tout les devices et le zoom j'ai le met en 1-->
    <link rel="stylesheet" href="vendors/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style sheets/style2.css">
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
        <div class="area2"><span class="text">Let's change the world</span></div>
        <i class="icon fa fa-bars fa-2x"></i>
    </div>
    <?php
    session_start();
    if (isset($_SESSION['id_user'])) {
        include "nav_connect.php";
    } else {
        include "nav_nonconnect.php";
    }

    ?>
    <!--Section: Contact v.2-->
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contactez Nous</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Avez-vous des questions? N'hésitez pas à nous contacter
            directement. Notre équipe reviendra vers vous au sein d'une question d'heures pour vous aider</p>
        <hr style="min-width:85%; background-color:#a1a1a1 !important; height:1px;"/>
        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Nom</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Objet</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="4"
                                          class="form-control md-textarea" min=""></textarea>
                                <label for="message">Message</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->
                    <div class="text-center text-md-left">
                        <button class="btn btn-primary" name="submit" id="nonconnect"
                                onclick="document.getElementById('contact-form').submit();">Envoyer le message
                        </button>
                        <br><br>
                    </div>
                </form>
                <?php
                if (isset($_POST ['submit'])) {
                    $name = $_POST['name']; // le nom de l'emetteur
                    $subject = $_POST['subject']; // l'objet du message
                    $messageFrom = $_POST['email']; // email de l'emetteur
                    $message = $_POST['message']; // message

                    $messageTo = "ikkouetelyousfi@gmail.com"; // notre email
                    $source = "de: " . $messageFrom;
                    $txt = "vous avez reçu un e-mail de " . $name . ".\n\n" . $message;

                    mail($messageTo, $subject, $txt, $source);
                    header("Location: success.php");
                }
                ?>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>BP 473 Complexe universitaire Al Qods, Oujda 60000</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+2126 22 42 73 63<br>+2126 31 29 85 88</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>ikkouetelyousfi@gmail.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->

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