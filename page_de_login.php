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
                    <input type="email" name="email" id="email" value="adresse@mail.com" class="form-control" />
                    <br />
                    <label for="mdp">Mot de passe :</label>
                    <br />
                    <input type="password" name="mot de passe" id="mdp" class="form-control" />
                    <br>
                    <input type="submit" value="Se connecter" name="connect" class="btn btn-outline-primary" />
                </form>
            </div>
            <div class="col-sm-6" id="rightpart">
                <form methid="POST" action="#" class="form-control">
                    <h2 class="log">Créer un nouveau compte</h2>
                    <label for="nom">Nom :</label>
                    <br />
                    <input type="text" name="nom" id="nom" class="form-control" />
                    <br />
                    <label for="prenom">Prénom :</label>
                    <br />
                    <input type="text" name="prenom" id="prenom" class="form-control" />
                    <br />
                    <label for="birthdate">Date de Naissance :</label>
                    <br />
                    <input type="date" name="birthdate" id="birthdate" class="form-control" />
                    <br />
                    <label for="email">Adresse Email :</label>
                    <br />
                    <input type="email" value="adresse@mail.com" class="form-control" />
                    <br />
                    <label for="password">Mot de passe:</label>
                    <br />
                    <input type="password" id="password" name="psswrd" class="form-control" /><br>
                    <input type="submit" value="S'inscrire" class="btn btn-outline-primary" />
                </form>
            </div>
        </div>
    </div>

</body>
<?php include("footer_couture.php")?>

</html>