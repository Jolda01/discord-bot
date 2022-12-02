<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discord Bot</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


</head>
<body>
<?php 
$a=file_get_contents('color.txt');
echo $a;
?>
    <div class="main" style="background-color:<?php echo $a;?>;">
        <div class="navbar">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
              </div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
            </div>
        </nav>
    </div>
        <div class="paragraph1" style="background-color:<?php echo $a;?>;">
            <h2 class="paragraph1-title">C'est quoi le Sida ?</h2><br>
            <p class="paragraph1-contenu">Maladie infectieuse, due à un virus transmis par voie sexuelle ou sanguine (en particulier placentaire) et provoquant un affaiblissement du système immunitaire, pouvant se manifester d'abord par des signes généraux (fièvre, asthénie, amaigrissement, diarrhée, gonflement ganglionnaire, etc.) et qui se caractérise essentiellement par la multiplication d'infections diverses (cutanées, intestinales, pulmonaires, cérébrales) et par des cancers, entraînant la mort (dans l'état actuel de la science).</p>
        </div>
        <br>
    </div>
    
</body>
</html>