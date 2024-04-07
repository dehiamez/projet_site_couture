<?php
    session_start();
?>
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

<body>
    <h3>Récapitulatif de votre devis</h3>
    <div class="container recap">
        <div class="row elements ">
            <?php

            $description = $_POST["description"];
            $vetements = $_POST["vetements"];
            $tissu = $_POST["tissu"];
            $taille = $_POST["taille"];
            $service = $_POST["service"];
    ?>
            <h5>Voici le récapitulatif de votre devis :</h5>
            <p>Description : <?= htmlspecialchars($description)?></p><br>
            <p>Type de vêtements : <?= htmlspecialchars($vetements)?></p><br>
            <p>Type de tissu : <?= htmlspecialchars($tissu)?></p><br>
            <p>Taille : <?= htmlspecialchars($taille)?></p><br>
            <p>Services : <?= htmlspecialchars($service)?></p>

            <button class="btn btn-outline-primary" onclick="window.location.href='COUTUREFORYOU.php'">Retour
                à la page d'accueil</button>
        </div>
    </div>
</body>

<?php include("footer_couture.php")?>

</html>