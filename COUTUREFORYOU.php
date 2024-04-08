<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="coutureforyou.css" />
    <link rel="icon" href="logo_couture.jpg" type="image/x-icon" />
    <title>COUTURE FOR YOU</title>
</head>

<body>
    <?php include("nav_couture.php") ?>
    <main>
        <div class="container">
            <div class="row elements">
                <div class="d-flex justify-content-center align-items-center">
                    <h3 id="accueil">Accueil</h3>
                    <img src="logo_couture.jpg" alt="logo_couture" id="partiedroite" />
                </div>
                <div id="services">
                    <h4>Les services proposés</h4>
                    <h6>
                        Conception sur mesure , retouches et
                        ajustements
                    </h6>
                    <p>
                        Création de vêtements sur mesure selon
                        les spécifications et les préférences
                        du client et modification de vêtements
                        existants pour un ajustement parfait.
                    </p>
                    <h6>
                        Cours de couture et conseils en style
                    </h6>
                    <p>
                        Organisation de cours de couture pour
                        enseigner aux clients les techniques
                        de base ou avancées de
                        couture,fourniture de conseils et de
                        recommandations aux clients sur le
                        choix des vêtements en fonction de
                        leur morphologie, de leur couleur de
                        peau, de leurs préférences
                        personnelles.
                    </p>
                    <h6>Services de consultation en mariage</h6>
                    <p>
                        Fourniture de services de consultation
                        et de conception de robes de mariée
                        sur mesure, ainsi que des conseils sur
                        le choix des tenues pour la fête de
                        mariage.
                    </p>
                </div>
                <!-- Partie avis provenant de la table Avis de la base de données-->
                <div id="temoignages">
                    <?php if(isset($_SESSION['loggedin'])){include("temoignages.php");}?>
                </div>

                <form action="" method="POST" id=avis>
                    <h5>Les témoignages de clients</h5>
                    <label for=" commentaire">Ajoutez votre avis : </label><br />
                    <textarea name="commentaire" id="commentaire" class="form-control"></textarea>
                    <br><input type="submit" name="temoigne" value="Partager mon avis" class="btn btn-outline-primary">
                </form>

            </div>
        </div>
    </main>
</body>
<?php include("footer_couture.php") ?>


</html>