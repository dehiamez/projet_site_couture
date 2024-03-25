<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - COUTUREFORYOU</title>
</head>

<body>
    <?php include ("nav_couture.php") ?>
    <div class="container">
        <div class="row elements">
            <div class="col-sm-6" id="leftpart">
                <form method="post" action="#">
                    <h2>Se connecter</h2>
                    <label for="email">Adresse Email:</label>
                    <br />
                    <input type="email" name="email" id="email" value="adresse@mail.com" />
                    <br />
                    <label for="mdp">Mot de passe :</label>
                    <br />
                    <input type="password" name="mot de passe" id="mdp" />
                    <br />
                    <input type="submit" value="Se connecter" name="connect" class="connect_button" />
                </form>
            </div>
            <div class="col-sm-6" id="rightpart">
                <form>
                    <h2>Créer un nouveau compte</h2>
                    <label for="nom">Nom :</label>
                    <br />
                    <input type="text" name="nom" id="nom" />
                    <br />
                    <label for="prenom">Prénom :</label>
                    <br />
                    <input type="text" name="prenom" id="prenom" />
                    <br />
                    <label for="birthdate">Date de Naissance :</label>
                    <br />
                    <input type="date" name="birthdate" id="birthdate" />
                    <br />
                    <label for="email">Adresse Email :</label>
                    <br />
                    <input type="email" value="adresse@mail.com" />
                    <br />
                    <label for="password">Mot de passe:</label>
                    <br />
                    <input type="password" id="password" name="psswrd" /><br />
                    <input type="submit" value="S'inscrire" class="connect_button" />
                </form>
            </div>
        </div>
    </div>

</body>
<?php include("footer_couture.php")?>

</html>