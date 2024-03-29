<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="coutureforyou.css" />
    <link rel="icon" href="logo_couture.jpg" type="image/x-icon" />
    <title>Course - COUTUREFORYOU</title>
</head>

<body>
    <?php include ("nav_couture.php") ?>
    <h3>Cours</h3>
    <div class="container">
        <div class="row elements cours cours_debutants">
            <div class="col-sm-8" id="cours_debutants">
                <h5>Couture pour débutants</h5>
                <p>
                    Pour apprendre les
                    techniques de
                    base, telles que
                    l'utilisation de la
                    machine à coudre, la
                    réalisation
                    d'ourlets, la pose
                    de fermeture éclair, de boutons, etc.
                </p>
                <input type="submit" value="S'inscire à ce cours" class="btn btn-outline-primary form-control">
            </div>
            <div class="col-sm-4 info_cours">
                <p>
                    Responsable :
                    MICHELLE LEGRAND
                    coutière
                    professionnelle
                </p>
                <br />
                <p>
                    Durée : 4 semaines,
                    avec des cours en
                    ligne d'une heure
                    par semaine.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row elements cours cours_patron">
            <div class="col-sm-8" id="cours_patron">
                <h5>Couture avec patron</h5>
                <p>
                    Pour apprendre à
                    utiliser les
                    patrons. Le cours
                    offre des patrons de
                    base pour des
                    modèles de
                    pantalons, jupes et
                    pulls.
                </p>
            </div>
            <div class="col-sm-4 info_cours">
                <p>
                    Responsable : LUCAS
                    CHARDONS coutière
                    professionnelle
                </p>
                <p>
                    Durée : 6 semaines
                    avec des cours en
                    ligne d'une heure
                    par semaine
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row elements cours cours_avancees">
            <div class="col-sm-8" id="cours_avancees">
                <h5>Cours avancée</h5>
                <p>
                    Pour apprendre à
                    créer les patrons et
                    à coudre des modèles
                    plus difficiles.
                </p>
            </div>
            <div class="col-sm-4 info_cours">
                <p>
                    Responsable : MARION
                    MAI coutière
                    professionnelle
                </p>
                <p>
                    Durée : 10 semaines
                    avec des cours en
                    ligne d'une heure
                    par semaine.
                </p>
            </div>
        </div>
    </div>
</body>
<?php include("footer_couture.php")?>

</html>