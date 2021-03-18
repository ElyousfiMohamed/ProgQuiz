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
    <!-- Top Container -->
    <section class="top-container">

        <!--patie1 de header-->
        <header class="case1header" id="image1">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img style="height:500px; width:100%; border-radius:15px;" src="images/programmer.jpg">
                        <div class="carousel-caption" style="color:black;">
                            <h3>HTML</h3>
                            <p>Le HyperText Markup Language</p>
                        </div>
                    </div>

                    <div class="item" style="border-radius:15px;">
                        <img style="height:500px; width:100%; border-radius:15px;" src="images/programmer.jpg">
                        <div class="carousel-caption" style="color:black;">
                            <h3>CSS</h3>
                            <p>Les feuilles de style en cascade</p>
                        </div>
                    </div>

                    <div class="item" style="border-radius:15px;">
                        <img style="height:500px; width:100%; border-radius:15px;" src="images/programmer.jpg">
                        <div class="carousel-caption" style="color:black;">
                            <h3>JAVA SCRIPT</h3>
                            <p>JavaScript est un langage de programmation</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="border-radius:15px;">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next" style="border-radius:15px;">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </header>
        <div class="top-box top-box-a">
            <i class="fab fa-html5 fa-5x"></i>
            <h4>HTML</h4>
            <p class="formation">Tutorial</p>
            <a href="tutoriel/HTML/htmldef.php" class="btn">Start</a>
        </div>
        <!--BLOCK1-->


        <!--BLOCK2-->
        <div class="top-box top-box-b">
            <i class="fab fa-html5 fa-5x"></i>
            <h4>HTML</h4>
            <p class="formation">Quiz</p>
            <a href="htmlquiz.php" class="btn">Start</a>
        </div>
        <!--BLOCK2-->
        <!--patie2 de header-->

    </section>
    <!-- Top Container -->


    <!-- Boxes Section -->
    <section class="boxes">
        <div class="box">
            <i class="fab fa-js fa-5x"></i>
            <h3>JAVASCRIPT</h3><br>
            <a href="tutoriel/HTML/htmldef.php" class="btn">Cours</a>
            <a href="jsquiz.php" class="btn">Quiz</a>
        </div>
        <div class="box">
            <i class="fab fa-css3 fa-5x"></i>
            <h3>CSS</h3>
            <br>
            <a href="tutoriel/HTML/htmldef.php" class="btn">Cours</a>
            <a href="cssquiz.php" class="btn">Quiz</a>
        </div>
        <div class="box">
            <i class="fab fa-php fa-5x"></i>
            <h3>PHP</h3>
            <br>
            <a href="tutoriel/HTML/htmldef.php" class="btn">Cours</a>
            <a href="phpquiz.php" class="btn">Quiz</a>
        </div>
        <div class="box">
            <i class="fab fa-java fa-5x"></i>
            <h3>JAVA</h3>
            <br>
            <a href="tutoriel/HTML/htmldef.php" class="btn">Cours</a>
            <a href="javaquiz.php" class="btn">Quiz</a>
        </div>
        <div class="box">
            <i class="fab fa-python fa-5x"></i>
            <h3>python</h3>
            <br>
            <a href="#" class="btn">Cours</a>
            <a href="#" class="btn">Quiz</a>
        </div>
    </section>
    <!-- Boxes Section -->


    <!-- Info Section -->
    <section class="info">
        <img src="https://image.ibb.co/j4Qz8x/pic1.jpg" alt="">
        <div>
            <h2>Devenir un developpeur </h2>
            <p>Dans le domaine de l'informatique, la programmation, appelée aussi codage, est l'ensemble des activités
                qui permettent l'écriture des programmes informatiques.
                C'est une étape importante du développement de logiciels. Pour écrire un programme, on utilise un
                langage de programmation.</p>
            <a href="tutoriel/Developpeur/devenir developpeur.php" class="btn">Plus ...</a>
        </div>
    </section>
    <!-- Info Section -->


    <!-- Portfolio -->
    <section class="portfolio">
        <img src="https://source.unsplash.com/random/200x200" alt="">
        <img src="https://source.unsplash.com/random/201x200" alt="">
        <img src="https://source.unsplash.com/random/202x200" alt="">
        <img src="https://source.unsplash.com/random/203x200" alt="">
        <img src="https://source.unsplash.com/random/204x200" alt="">
        <img src="https://source.unsplash.com/random/205x200" alt="">
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


</div> <!-- Wrapper Ends -->


<!-- Wrapper Ends -->


</div>


</body>
</html>