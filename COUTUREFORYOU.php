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
                <div class="col-sm-9" id="premiergaucheinfo">
                    <h3 id="accueil">Accueil</h3>
                    <h5>Les services proposés</h5>
                    <h5>
                        Conception sur mesure , retouches et
                        ajustements
                    </h5>
                    <p>
                        Création de vêtements sur mesure selon
                        les spécifications et les préférences
                        du client et modification de vêtements
                        existants pour un ajustement parfait.
                    </p>
                    <h5>
                        Cours de couture et conseils en style
                    </h5>
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
                    <h5>Services de consultation en mariage</h5>
                    <p>
                        Fourniture de services de consultation
                        et de conception de robes de mariée
                        sur mesure, ainsi que des conseils sur
                        le choix des tenues pour la fête de
                        mariage.
                    </p>
                    <br />
                    <div>
                        <h5>Les témoignages de clients</h5>
                        <label for="commentaire">Ajoutez votre avis : </label><br />
                        <textarea name="commentaire" id="commentaire"></textarea>
                    </div>
                </div>
                <div class="col-sm-3">
                    <img src="logo_couture.jpg" alt="logo_couture" id="partiedroite" />
                </div>
            </div>
        </div>
    </main>
    <?php include("footer_couture.php") ?>
</body>

</html>