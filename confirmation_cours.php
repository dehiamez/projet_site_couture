<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="coutureforyou.css" />
    <link rel="icon" href="logo_couture.jpg" type="image/x-icon" />
    <title>Récapitulatif inscription à un cours</title>
</head>

<body>
    <h3>Récapitulatif de votre inscription au cours</h3>
    <?php 
        $cours = [
            "cours_debutants"=>"cours pour débutants",
            "cours_patron"=> "cours avec patrons",
            "cours_avancees"=>"cours avancés"
            ];
        ?>
    <div class="container recap">
        <div class="elements row">
            <div>
                <h6><?= htmlspecialchars($_SESSION['nom'])?> <?=htmlspecialchars($_SESSION['prenom'])?> (
                    <?= htmlspecialchars($_SESSION['email'])?> ) est
                    bien inscrit au
                    <?=htmlspecialchars($cours[$_SESSION['cours']])?>.</h6>
                <p>Vous ne pouvez pas vous inscrire à un autre cours en parallèle.</p>

                <button class="btn btn-outline-primary" onclick="window.location.href='COUTUREFORYOU.php'">Retour
                    à la page d'accueil</button>
            </div>
        </div>
    </div>

</body>
<?php include("footer_couture.php")?>

</html>