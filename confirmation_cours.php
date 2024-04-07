<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="coutureforyou.css" />
    <link rel="icon" href="logo_couture.jpg" type="image/x-icon" />
    <title>Récapitulatif inscription à un cours</title>
</head>

<body class="recap">
    <?php 
        $cours = [
            "cours_debutants"=>"cours pour débutants",
            "cours_patron"=> "cours avec patrons",
            "cours_avancees"=>"cours avancés"
            ];
        
        $inscription = "<h3>Récapitulatif de votre inscription au cours</h3><br>";
        $inscription .= $_SESSION['nom']." ".$_SESSION['prenom']." ( ".$_SESSION['email'].") est bien inscrit au ".$cours[$_SESSION['cours']].".<br><br>";
        $inscription .= "Vous ne pouvez pas vous inscrire à un autre cours en parallèle.";
        echo $inscription; 
        
    ?>

</body>

</html>