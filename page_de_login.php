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

            <!-- formulaire de connexion  -->

            <div class="col-sm-6" id="leftpart">
                <form method="POST" action="COUTUREFORYOU.php" class="form-control">
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
                    <input type="submit" value="Se connecter" name="connection" class="btn btn-outline-primary" />
                </form>
            </div>

            <!-- formulaire d'inscription -->

            <div class="col-sm-6" id="rightpart">
                <form method="POST" action="COUTUREFORYOU.php" class="form-control">
                    <h2 class="log">Créer un nouveau compte</h2>
                    <label for="nom">Nom :</label>
                    <br />
                    <input type="text" name="nom" id="nom" class="form-control" pattern="[A-Za-z]+" required />
                    <br />
                    <label for="prenom">Prénom :</label>
                    <br />
                    <input type="text" name="prenom" id="prenom" class="form-control" pattern="[A-Za-z\ \-]+"
                        required />
                    <br />
                    <label for="birthdate">Date de Naissance :</label>
                    <br />
                    <input type="date" name="birthdate" id="birthdate" class="form-control" required />
                    <br />
                    <label for="email">Adresse Email :</label>
                    <br />
                    <input type="email" name="email" id="email" value="adresse@mail.com" class="form-control"
                        required />
                    <br />
                    <label for="password">Mot de passe:</label>
                    <br />
                    <input type="password" id="psswrd" name="psswrd" class="form-control" required /><br>
                    <input type="submit" name="inscription" value="S'inscrire" class="btn btn-outline-primary" />
                </form>
            </div>
        </div>
    </div>

    <!-- code php permettant de créer son propre compte utilisateur et y accéder avec un mot de passe etc... -->

    <?php
        $serveur = "localhost";
        $login = "root";
        $nomBD = "Couture";

        if (isset($_POST['inscription'])){

            // verification que la base de données n'existe pas déjà lorsqu'on souhaite s'inscrire
            try{
                $connexion = new PDO("mysql:host=$serveur;dbname=$nomBD",$login);
                $connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
                echo "La base de données existe déjà.";
            }
            catch(PDOException $e)
            {
                try{
                    $connexion = new PDO("mysql:host=$serveur",$login);
                    $connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                    $codesql = "CREATE DATABASE Couture";
                    $connexion->exec($codesql);

                    echo "BD bien créée";
                }
                catch (PDOException $ex){
                echo "Erreur :". $ex ->getMessage();
                }
            }

            // connexion à la base de données
            try{
                $connexion = new PDO("mysql:host=$serveur;dbname=$nomBD" , $login);
                $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //verification que la table n'existe pas déjà
        
                $check_table_query = $connexion->query("SHOW TABLES LIKE 'Utilisateurs'");
                
                if($check_table_query->rowCount()==0 ){
                    $sql_code = "CREATE TABLE Utilisateurs(
                        Nom VARCHAR(50),
                        Prenom VARCHAR(50),
                        Date_N DATE,
                        Email VARCHAR(70),
                        Mdp VARCHAR(100)
                        )";
                    $connexion->exec($sql_code);
                }
                //Insersion des infos de l'utilisateur dans la base de données
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $email = $_POST["email"];
                $date_n = $_POST["birthdate"];
                $mdp = password_hash($_POST["psswrd"],PASSWORD_DEFAULT);

                $sql_insert_data = "INSERT INTO Utilisateurs (Nom,Prenom,Email,Date_N,Mdp) VALUES ('$nom','$prenom','$email','$date_n','$mdp')";
                $connexion->exec($sql_insert_data);

                echo "Bienvenue '$prenom'";

                
            }
            catch (PDOException $e){
                echo "Erreur :". $e->getMessage();
            }

            $connexion = null;
        }
    ?>

    <?php include("footer_couture.php")?>
</body>

</html>