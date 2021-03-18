<?php
ob_start();
session_start();
if (!$connect = mysqli_connect("localhost", "root", "")) {
    exit("Desolé, Connexion a localhost impossible");
}
if (!mysqli_select_db($connect, 'site_bd')) {
    exit("Desolé, l'acces a la base de donnee Administrateur  impossible");
}
$id_user = $_SESSION['id_user'];


if ($_SESSION['lang'] == "html" && $_SESSION['html'] == 0) {
    $_SESSION['html'] = 1;
    $score_html = $_REQUEST["cor"];
    mysqli_query($connect, "UPDATE utilisateur SET SCORE_HTML = '$score_html' WHERE ID_USER = '$id_user' ");
}


if ($_SESSION['lang'] == "css" && $_SESSION['css'] == 0) {
    $_SESSION['css'] = 1;
    $score_css = $_REQUEST["cor"];
    mysqli_query($connect, "UPDATE utilisateur SET SCORE_CSS = '$score_css' WHERE ID_USER = '$id_user' ");
}


if ($_SESSION['lang'] == "php" && $_SESSION['php'] == 0) {
    $_SESSION['php'] = 1;
    $score_php = $_REQUEST["cor"];
    mysqli_query($connect, "UPDATE utilisateur SET SCORE_PHP = '$score_php' WHERE ID_USER = '$id_user' ");
}


if ($_SESSION['lang'] == "js" && $_SESSION['js'] == 0) {
    $_SESSION['js'] = 1;
    $score_js = $_REQUEST["cor"];
    mysqli_query($connect, "UPDATE utilisateur SET SCORE_JS = '$score_js' WHERE ID_USER = '$id_user' ");
}


if ($_SESSION['lang'] == "java" && $_SESSION['java'] == 0) {
    $_SESSION['java'] = 1;
    $score_java = $_REQUEST["cor"];
    mysqli_query($connect, "UPDATE utilisateur SET SCORE_JAVA = '$score_java' WHERE ID_USER = '$id_user' ");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--important pour la largeur pour tout les devices et le zoom j'ai le met en 1-->
    <link rel="stylesheet" href="vendors/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
        #panel1, #panel2 {
            margin: 20px;
        }

        .btn {
            margin-left: 20px;
        }
    </style>
    <script>
        function redirect() {
            window.location.replace("profile.php");
        }
    </script>
</head>
<body>
<div class="panel panel-success" id="panel1">
    <div class="panel-heading"> les reponses correctes</div>
    <div class="panel-body"> <?php echo $_REQUEST["cor"]; ?> </div>
</div>
<div class="panel panel-danger" id="panel2">
    <div class="panel-heading"> les reponses fautes</div>
    <div class="panel-body"> <?php echo $_REQUEST["wro"]; ?> </div>
</div>
<input type="button" class="btn btn-success" value="Votre Profile" onclick="redirect()">

</body>
</html>