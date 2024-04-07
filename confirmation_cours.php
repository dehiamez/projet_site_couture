<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="coutureforyou.css" />
    <link rel="icon" href="logo_couture.jpg" type="image/x-icon" />
    <title>Récapitulatif inscription à un cours</title>
</head>

<body class="recap">
    <?php 
        $inscription = "<h3>Récapitulatif de votre inscription au cours</h3>";
        $inscription .= $_SESSION['nom']." ".$_SESSION['prenom']." ( ".$_SESSION['email'].") est bien inscrit au ".$_SESSION['cours'].".";
        echo $inscription; ?>

</body>

</html>