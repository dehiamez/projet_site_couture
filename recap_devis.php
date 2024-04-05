<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="coutureforyou.css" />
    <link rel="icon" href="logo_couture.jpg" type="image/x-icon" />
    <title>Récapitulatif du devis</title>
</head>

<body class="recap">

    <?php

        if (isset($_POST["devis"])) {

            $description = $_POST["description"];
            $vetements = $_POST["vetements"];
            $tissu = $_POST["tissu"];
            $taille = $_POST["taille"];
            $service = $_POST["service"];
    
            $message = "<h3>Récapitulatif de votre devis</h3>";
            $message .= "Voici le récapitulatif de votre devis :<br>";
            $message .= "Description : $description<br>";
            $message .= "Type de vêtements : $vetements<br>";
            $message .= "Type de tissu : $tissu<br>";
            $message .= "Taille : $taille<br>";
            $message .= "Services : $service<br>";
            echo $message;}
?>
</body>

</html>