<!DOCTYPE html>
<html>
<head>
    <title>success</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--important pour la largeur pour tout les devices et le zoom j'ai le met en 1-->
    <link rel="stylesheet" href="vendors/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="style sheets/SuccessFailedStyle.css">
    <script>
        function go() {
            window.location.replace("admin.php");
        }
    </script>
</head>
<body>
<div class="panel panel-default">
    <div class="panel-heading">Alerte</div>
    <div class="panel-body">
        <h5>opration reussi</h5>
        <p>Votre opération est complete avec succée</p>
        <button class="btn btn-primary" onclick="go()" id="btn"> retour</button>
    </div>
</div>
</body>
</html>