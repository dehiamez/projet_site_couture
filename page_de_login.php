 <?php
    session_start();?>
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
                 <form method="POST" action="page_de_login.php" class="form-control">
                     <h2 class="log">Se connecter</h2>
                     <label for="email">Adresse Email:</label>
                     <br />
                     <input type="email" name="email_c" id="email_c" value="adresse@mail.com" class="form-control"
                         required />
                     <br />
                     <label for="mdp">Mot de passe :</label>
                     <br />
                     <input type="password" name="psswrd_c" id="psswrd_c" class="form-control" required />
                     <br>
                     <input type="submit" value="Se connecter" name="connexion" class="btn btn-outline-primary" />
                 </form>
                 <p id="login_error"></p>
             </div>

             <!-- formulaire d'inscription -->

             <div class="col-sm-6" id="rightpart">
                 <form method="POST" action="page_de_login.php" class="form-control">
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
     <?php include("footer_couture.php")?>
 </body>

 <?php 
    $_SESSION['loggedin'] = false;
    $hote = "localhost";
    $login = "root";
    $nameDB = "Couture";

    //code php pour l'inscription

    if ( isset($_POST["inscription"])){

    //verifie si la base de donnee existe deja
    try{
    $connexion = new PDO("mysql:host=$hote;dbname=$nameDB" , $login);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e){
    //créée la base de donnée si elle n'existe pas
    try{
    $connexion = new PDO("mysql:host=$hote", $login);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $codesql = "CREATE DATABASE Couture";
    $connexion->exec($codesql);
    }
    catch(PDOException $ex){
    echo "Erreur :".$ex ->getMessage();
    }
    }

    //se connecte à la base de données
    try{
    $connexion = new PDO("mysql:host=$hote;dbname=$nameDB" , $login);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //verification que la table n'existe pas déjà
    $check_table_query = $connexion->query("SHOW TABLES LIKE 'Utilisateurs'");

    //créée la table si elle n'existe pas
    if($check_table_query->rowCount()==0){

        $sql_code = "CREATE TABLE Utilisateurs(
        Nom VARCHAR(50),
        Prenom VARCHAR(50),
        Date_N DATE,
        Email VARCHAR(70),
        Mdp VARCHAR(100),
        Cours VARCHAR(50)
        )";
        $connexion->exec($sql_code);
    }

    //récupère les coordonnées de l'utilisateur
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $date_n = $_POST["birthdate"];
    $mdp = password_hash($_POST["psswrd"],PASSWORD_DEFAULT);
    $cours = "Aucun cours";
    
    $sql_check_email = $connexion->query("SELECT * FROM Utilisateurs WHERE Email = '$email'");

    //ajout d'un utilisateur si son adresse mail ne figure dans la base de données
    if (($sql_check_email->rowCount()) > 0 ){
    echo "<p style='color:#FFC300'>L'utilisateur $email existe déjà, connectez-vous ou inscrivez-vous avec une autre
        adresse e-mail.</p>";
    }
    else{
    $sql_insert_data = "INSERT INTO Utilisateurs (Nom,Prenom, Date_N, Email, Mdp,Cours) VALUES
    ('$nom','$prenom','$date_n','$email','$mdp','$cours')";
    $connexion->exec($sql_insert_data);

    $_SESSION['loggedin'] = true;

    $_SESSION['email'] = $email;
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['cours'] = $cours;
    
    header("Location: COUTUREFORYOU.php");
    exit;
    }
    }
    catch (PDOException $e){
    echo "Erreur :". $e->getMessage();
    }
    $connexion = null;
    }

    //code php pour la connexion

    if (isset($_POST["connexion"])){
    //connexion à la base de donnée
    try{
    $connexion = new PDO("mysql:host=$hote;dbname=$nameDB" , $login);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //vérification que l'utilisateur existe déjà dans la base de donnée
    $email = $_POST["email_c"];
    $mdp = $_POST["psswrd_c"];

    $sql_check_email = $connexion->query("SELECT * FROM Utilisateurs WHERE Email = '$email'");

    if (($sql_check_email->rowCount()) == 1 ){
    $hash = $connexion->query("SELECT Mdp FROM Utilisateurs WHERE Email = '$email'")->fetchColumn();

    // vérification du mot de passe
    if (password_verify($mdp,$hash)){
    $_SESSION['loggedin'] = true;
    
    $_SESSION['email'] = $email;
    $_SESSION['nom'] = $connexion->query("SELECT nom FROM Utilisateurs WHERE Email = '$email'")->fetchColumn();    
    $_SESSION['prenom'] = $connexion->query("SELECT prenom FROM Utilisateurs WHERE Email = '$email'")->fetchColumn();
    $_SESSION['cours'] = $connexion->query("SELECT cours FROM Utilisateurs WHERE Email = '$email'")->fetchColumn();

    header("Location: COUTUREFORYOU.php");
    exit;
    }
    else{
    echo "<p style='color:red'>Mot de passe incorrecte.</p>";
    }
    }
    else{
    echo "<p style='color:#FFC300'>L'utilisateur $email n'existe pas, inscrivez-vous.</p>";
    }
    }
    catch(PDOException $e){
    echo "Erreur :". $e->getMessage();
    }
    $connexion = null;
    }
 ?>

 </html>