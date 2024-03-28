<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="coutureforyou.css" />
    <link rel="icon" href="logo_couture.jpg" type="image/x-icon" />
    <title>Login - COUTUREFORYOU</title>
</head>

<body>
    <?php include ("nav_couture.php") ?>
    <div class="container">
        <div class="row elements">
            <div class="col-sm-6" id="leftpart">
                <form method="post" action="#" class="form-control">
                    <h2 class="log">Se connecter</h2>
                    <label for="email">Adresse Email:</label>
                    <br />
                    <input type="email" name="email" id="email" value="adresse@mail.com" class="form-control"
                        required />
                    <br />
                    <label for="mdp">Mot de passe :</label>
                    <br />
                    <input type="password" name="mot de passe" id="mdp" class="form-control" required />
                    <br>
                    <input type="submit" value="Se connecter" name="connect" class="btn btn-outline-primary" />
                </form>
            </div>
            <div class="col-sm-6" id="rightpart">
                <form methid="POST" action="#" class="form-control">
                    <h2 class="log">Créer un nouveau compte</h2>
                    <label for="nom">Nom :</label>
                    <br />
                    <input type="text" name="nom" id="nom" class="form-control" required />
                    <br />
                    <label for="prenom">Prénom :</label>
                    <br />
                    <input type="text" name="prenom" id="prenom" class="form-control" required />
                    <br />
                    <label for="birthdate">Date de Naissance :</label>
                    <br />
                    <input type="date" name="birthdate" id="birthdate" class="form-control" required />
                    <br />
                    <label for="email">Adresse Email :</label>
                    <br />
                    <input type="email" value="adresse@mail.com" class="form-control" required />
                    <br />
                    <label for="password">Mot de passe:</label>
                    <br />
                    <input type="password" id="password" name="psswrd" class="form-control" required /><br>
                    <input type="submit" value="S'inscrire" class="btn btn-outline-primary" />
                </form>
            </div>
        </div>
    </div>

    <!-- code php permettant de créer son propre compte utilisateur et y accéder avec un mot de passe etc... -->

    <?php

$hote = "localhost";
$login = "mezianedehia";
$pass = "899136";
$nomBD = "nomMail";

try{
    $connexion = new PDO("mysql:host=$hote;dbname=$nomBD" , $login, $pass);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie <br>";

    $sql_code = "CREATE TABLE clients(
        Nom VARCHAR(50),
        Email VARCHAR(70)
    )";
    $connexion->exec($sql_code);

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        
        $sql_insert_data = "INSERT INTO Donnees (Nom, Email) VALUES ('$nom', '$email')";
        $connexion->exec($sql_insert_data);

        echo 'Données insérées avec succès';

    }
}
catch (PDOException $e){
    echo "Erreur :". $e->getMessage();
}

$connexion = null;
?>
</body>
<?php include("footer_couture.php")?>

</html>