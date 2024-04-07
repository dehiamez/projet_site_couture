<?php
    session_start();
    // Connexion à la base de données
    $hote = "localhost";
    $login = "root";
    $nameDB = "Couture";
    
    $connexion = new PDO("mysql:host=$hote;dbname=$nameDB" , $login);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="coutureforyou.css" />
    <link rel="icon" href="logo_couture.jpg" type="image/x-icon" />
    <title>Cours - COUTUREFORYOU</title>
</head>

<body>
    <?php include ("nav_couture.php") ?>
    <h3>Cours</h3>
    <!-- Informations sur les cours -->
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
        <!-- code qui permet d'afficher les boutons d'inscription aux cours -->
        <?php        
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
            $cours = [
            "cours_debutants"=>"cours pour débutants",
            "cours_patron"=> "cours avec patrons",
            "cours_avancees"=>"cours avancés"
            ];
            // Si l'utilisateur est connecté, un bouton d'inscription s'ajoute pour chaque cours
            foreach ($cours as $cour => $nom_cours) {
                $boutons_cours = '<form action="confirmation_cours.php" method="POST"><input type="submit" name="'.$cour.'" value="S\'inscrire au '.$nom_cours.'" class="btn btn-outline-primary form-control"></form>';
                echo '<script>';
                echo 'document.querySelector(".'.$cour.' p").insertAdjacentHTML("afterend", "' . addslashes($boutons_cours) . '");';
                echo '</script>';
            }
            // Ajout du cours dans la table Utilisateurs
            foreach($cours as $cour=>$nom_cours){
                if (isset($_POST[$cour]) && $_SESSION['cours']=="Aucun cours"){
                    $email = $_SESSION['email'];
                    $sql_update_cours = "UPDATE Utilisateurs SET Cours = '$nom_cours' WHERE Email = '$email'";
                    $connexion->exec($sql_update_cours);
                }
            }
        }
        //Si l'utilisateur n'est pas connecté, ajout d'un bouton qui le renvoie sur la page de login
        else{
            $bouton_login = '<button class="btn btn-outline-primary" onclick="window.location.href=\'page_de_login.php\'">Me connecter pour accéder aux inscriptions</button>';
            echo $bouton_login;
        }     
        ?>
    </div>
</body>
<?php include("footer_couture.php")?>

</html>