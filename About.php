<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>ABOUT PROGQUIZ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--important pour la largeur pour tout les devices et le zoom j'ai le met en 1-->
    <link rel="stylesheet" href="vendors/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="style sheets/style2.css">
	<style>
			body
			{
				background-image : url("images/background.jpg");
			}
	</style>
</head>
<body>
<!--logo-->
<div class="logo" style="padding-bottom: 35px;">
    <div class="area1"><span class="nom1"><a href="index.php" id="progquiz">PROGQUIZ</span><span
                class="nom2">.com</span></a></div>
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
<section class="sectionAbout" id="sec2">
    <p class="infoAbout">
        <a style="color:#337ab7; font-size: 40px;text-decoration : none;" href="../partie base/index.php">PROGQUIZ </a>
        est un site de développeurs Web, avec des didacticiels et des références sur les langages de développement Web
        tels que HTML, CSS, JavaScript, PHP, Java, couvrant la plupart aspects de la programmation Web.<br><br>
        Le site tire son nom du PROGQUIZ (PROGRAMMATION QUIZ), mais n'est pas.<br><br>
        Il a été créé à l'origine en 2020 par IKKOU YOUNESS ET MOHAMED ELYOUSFI, deux étudiants a l’Ecole Supérieure de
        technologie Oujda.
    </p>
    <img src="https://image.ibb.co/kYJK8x/showcase.jpg" class="imageAbout">
</section>
<footer>
    <p>PROGQUIZ &copy; 2020</p>
</footer>
</body>
</html>