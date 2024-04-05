<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="coutureforyou.css" />
    <link rel="icon" href="logo_couture.jpg" type="image/x-icon" />
    <title>Devis - COUTUREFORYOU</title>
</head>

<body>
    <?php include ("nav_couture.php")?>
    <div class="container">
        <div class="row element">
            <form action="devis_couture.php" method="post" class="form-control">
                <h3>Devis</h3>
                <p>Description : </p>
                <textarea name="description" id="description"></textarea>
                <p>Type de vêtements : </p>
                <label for="vetements"></label>
                <select name="vetements" id="vetements">
                    <option value="selection">
                        Selectionnez le type de
                        vêtements
                    </option>
                    <option value="t-shirt">
                        T-shirt
                    </option>
                    <option value="pantalon">
                        Pantalon
                    </option>
                    <option value="robe">Robe</option>
                    <option value="jupe">Jupe</option>
                    <option value="chemise">
                        Chemise
                    </option>
                </select>
                <p>Type de tissu :</p>
                <label for="tissu"></label>
                <select name="tissu" id="tissu">
                    <option value="selection">
                        Selectionnez le type de tissu
                    </option>
                    <option value="coton">Coton</option>
                    <option value="polyester">
                        Polyester
                    </option>
                    <option value="soie">Soie</option>
                    <option value="laine">Laine</option>
                    <option value="lin">Lin</option>
                </select>
                <p>Taille :</p>
                <label for="taille"></label>
                <select name="taille" id="taille">
                    <option value="xs">XS</option>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                    <option value="xxl">XXL</option>
                </select>
                <br />
                <p>Couleur :</p>
                <label for="couleur"></label>
                <input type="color" name="couleur" id="couleur" />
                <p>Services : </p>

                <input type="radio" id="ourlet" name="service" value="Ourlet" />
                <label for="ourlet">Ourlet (20.00 €)
                </label><br />
                <input type="radio" id="retouches" name="service" value="Retouches" />
                <label for="retouches">Retouches (30.00 €)</label><br />
                <input type="radio" id="OetR" name="service" value="Retouches et ourlet" />
                <label for="OetR">Retouches et ourlet (50.00 €)</label>
                <br><br>
                <input type="submit" name="devis" value="Envoyer mon devis" class="btn btn-outline-primary"><br>
            </form>
        </div>
    </div>
</body>
<?php include("footer_couture.php")?>

<!-- chat gpt à modifier !!! -->
<!-- <?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["devis"])) {
    // Capturer les données soumises dans le formulaire
    $description = $_POST["description"];
    $vetements = $_POST["vetements"];
    $tissu = $_POST["tissu"];
    $taille = $_POST["taille"];
    $couleur = $_POST["couleur"];
    $service = $_POST["service"];

    // Construire le contenu de l'e-mail
    $subject = "Récapitulatif de votre devis";
    $message = "Voici le récapitulatif de votre devis :\n\n";
    $message .= "Description : $description\n";
    $message .= "Type de vêtements : $vetements\n";
    $message .= "Type de tissu : $tissu\n";
    $message .= "Taille : $taille\n";
    $message .= "Couleur : $couleur\n";
    $message .= "Services : $service\n";

    // Adresse e-mail du client
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
        $email_client = $_SESSION['email'];
    }
    else{
        $bouton_login = '<button class="btn btn-outline-primary" onclick="window.location.href=\'page_de_login.php\'">Me connecter pour accéder aux inscriptions</button>';
        echo $bouton_login;
    }

    // Envoi de l'e-mail au client
    $from = "coutureForFun@mail.com";
    $headers = "From:" . $from;
    mail($email_client, $subject, $message, $headers);

    // Confirmation d'envoi
    echo "Le récapitulatif du devis a été envoyé à $email_client.";
}
?> -->

</html>