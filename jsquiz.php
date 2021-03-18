<?php
ob_start();
session_start();
if (!isset($_SESSION['id_user'])) {
    echo "
  <script> 
	window.location.replace(\"pleaseconnect.php\"); 
  </script>";
    exit;
} else {
    $_SESSION['lang'] = "js";
    if (!isset($_SESSION['js'])) {
        $_SESSION['js'] = 0;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>js quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--important pour la largeur pour tout les devices et le zoom j'ai le met en 1-->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="vendors/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="style sheets/style2.css">
    <style>
		body{
			background-image : url("images/background.jpg");
		}
        .panel-heading {
            font-weight: bold;
        }

        p {
            display: inline;
        }
    </style>
    <script>/*
        let cor_ansr = 0, wro_ansr = 0;

        function verifierQuestion(correct, reponse, id, id2, id_speciale) {
            let id_h = id;
            index = 4;
            if (correct == reponse) {
                document.getElementById(id_speciale).style = "color : white;background-color :#5cb85c ;padding : 3px;border-radius : 5px;";
                cor_ansr++;
            } else {
                document.getElementById(id2).style = "color : white;background-color:#d43f3a;padding : 3px;border-radius : 5px;";
                document.getElementById(id_speciale).style = "color : white;background-color :#5cb85c ;padding : 3px;border-radius : 5px;";
                wro_ansr++;
            }
            document.getElementById(id++).disabled = true;
            document.getElementById(id++).disabled = true;
            document.getElementById(id++).disabled = true;
            document.getElementById(id++).disabled = true;
            document.fr.cor.value = cor_ansr;
            document.fr.wro.value = wro_ansr;
        }*/
    </script>
</head>
<body>

<!--start import js-->
<script src="vendors/jquery-3.4.1.min.js"></script>
<script src="vendors/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!--end import js-->


<div class="wrapper">
    <!--logo-->
    <div class="logo">
        <div class="area1"><span class="nom1"><a href="#">PROGQUIZ</span><span class="nom2">.com</span></a></div>
        <div class="area2"><span class="text">Let's change the world</span></div>
        <i class="icon fa fa-bars fa-2x"></i>
    </div>
    <form name="fr" method="POST" action="quizresult.php">
        <?php
        /* navbar des utilisateurs connecté */
        include("nav_connect.php");

        if (!$connect = mysqli_connect("localhost", "root", "")) {
            exit("Desolé, Connexion a localhost impossible");
        }
        if (!mysqli_select_db($connect, "site_bd")) {
            exit("Desolé, l'acces a la base site_bd impossible");
        }
        $data = mysqli_query($connect, "SELECT * From quiz WHERE LANG_QUIZ='js'");
        $nbrlignes = mysqli_num_rows($data);
        $nbr = 0;
        $id = 0;
        $id2 = 100;
        $id_speciale = 999;
        while ($ligne = mysqli_fetch_row($data)) // l'affichage des questions
        {
            $id++;
            $id_help = $id;
            $nbr++;
            echo "<div class=\"panel panel-default\" id=\"panel\">  
								<div class=\"panel-heading\">Question $nbr/$nbrlignes</div>
									<div class=\"panel-body\">";
            echo "<b>" . $ligne[2] . "</b>";
            $id2++;
            $correct = $ligne[6];
            $i1 = rand(3, 6);
            $id_speciale++;
            echo "<br><input type=\"radio\" id=\"$id\" name=\"$correct\"  value=\"$ligne[$i1]\" onClick=\"verifierQuestion(this.name,this.value,$id_help,$id2,$id_speciale)\" required>";

            if ($correct == $ligne[$i1])
                echo "<p id=\"$id_speciale\">" . trim($ligne[$i1]) . "</p>";
            else
                echo "<p id=\"$id2\">" . trim($ligne[$i1]) . "</p>";

            do {
                $i2 = rand(3, 6);
            } while ($i1 == $i2);
            $id++;
            $id2++;
            echo "<br><input type=\"radio\" id=\"$id\" name=\"$correct\"  value=\"$ligne[$i2]\" onClick=\"verifierQuestion(this.name,this.value,$id_help,$id2,$id_speciale)\" required>";

            if ($correct == $ligne[$i2])
                echo "<p id=\"$id_speciale\" >" . trim($ligne[$i2]) . "</p>";
            else
                echo "<p id=\"$id2\" >" . trim($ligne[$i2]) . "</p>";

            do {
                $i3 = rand(3, 6);
            } while ($i1 == $i3 || $i2 == $i3);
            $id++;
            $id2++;
            echo "<br><input type=\"radio\" id=\"$id\" name=\"$correct\" value=\"$ligne[$i3]\" onClick=\"verifierQuestion(this.name,this.value,$id_help,$id2,$id_speciale)\" required>";

            if ($correct == $ligne[$i3])
                echo "<p id=\"$id_speciale\" >" . trim($ligne[$i3]) . "</p>";
            else
                echo "<p id=\"$id2\" >" . trim($ligne[$i3]) . "</p>";

            do {
                $i4 = rand(3, 6);
            } while ($i1 == $i4 || $i2 == $i4 || $i3 == $i4);
            $id++;
            $id2++;
            echo "<br><input type=\"radio\"  id=\"$id\" name=\"$correct\"  value=\"$ligne[$i4]\" onClick=\"verifierQuestion(this.name,this.value,$id_help,$id2,$id_speciale)\" required>";

            if ($correct == $ligne[$i4])
                echo "<p id=\"$id_speciale\" >" . trim($ligne[$i4]) . "</p>";
            else
                echo "<p id=\"$id2\" >" . trim($ligne[$i4]) . "</p>";
            echo "		</div>
								</div>					
							   ";
        }
        echo "<input type=\"text\" name=\"cor\" style=\"display : none;\">"; // pour recuperer la valeur de cor_ansr de javascript
        echo "<input type=\"text\" name=\"wro\" style=\"display : none;\">"; // pour recuperer la valeur de wro_ansr de javascript
        echo "<input type=\"submit\" class=\"btn btn-success\" value=\"Submit\">";
        mysqli_close($connect);
        ?>
    </form>
</div>
</body>
</html>