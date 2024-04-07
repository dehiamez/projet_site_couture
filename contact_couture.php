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
    <title>Contact - COUTUREFORYOU</title>
</head>
<?php include ("nav_couture.php") ?>

<body>
    <!-- Formulaire de contact -->
    <div class="container">
        <div class="row">
            <!-- Nous avons essayé de faire envoyer le mail mais on n'a pas réussi. L'action "mailto" n'était pas la bonne. -->
            <form action="mailto:coutureForYou@mail.com" method="POST" class="form-control">
                <h3>Contact</h3>
                <label for="name">Nom et Prénom :</label>
                <input type="text" id="name" class="form-control" pattern="[A-Za-z\ ]+" required>
                <br>
                <label for="numero">Numéro de téléphone :</label>
                <input type="tel" name="numero" id="numero" class="form-control" pattern="[0-9]{10}" required>
                <br>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" class="form-control" required>
                <br>
                <p>Posez votre question :</p>
                <textarea name="question" id="question" cols="40" rows="10" class="form-control"
                    required></textarea><br>
                <input type="submit" value="Soumettre ma demande" class="btn btn-outline-primary">
            </form>
        </div>
    </div>
    <!-- Coordonnées de l'entreprise -->
    <div class="contact container">
        <div class="row">
            <h6>Pour nous contacter : </h6>
            <p>Numero de téléphone : +33 9 46 34 75 28 | Adresse mail : coutureForYou@mail.com</p>
        </div>
    </div>
</body>
<?php include ("footer_couture.php")?>

</html>