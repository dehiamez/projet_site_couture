<?php
    session_start();
    $hote = "localhost";
    $login = "root";
    $nameDB = "Couture";

    //code php pour l'inscription
    $connexion = new PDO("mysql:host=$hote;dbname=$nameDB" , $login);

    if ( isset($_POST["temoigne"]) && isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //verification que la table n'existe pas déjà
        $check_table_query = $connexion->query("SHOW TABLES LIKE 'Avis'");

        //créée la table si elle n'existe pas (cette partie bug, on ne sait pas pq)
        if($check_table_query->rowCount()==0){
            $sql_code = "CREATE TABLE Avis(
            Email VARCHAR(50),
            Comm VARCHAR(500)
            )";
            $connexion->exec($sql_code);
        }
        $comm = $_POST['commentaire'];
        $email = $_SESSION['email'];
        
        // ajout d'un commentaire dans la table
        $sql_insert_data = "INSERT INTO Avis (Email, Comm) VALUES
        ('$email','$comm')";
        $connexion->exec($sql_insert_data);
        
    }
    // affichage des avis à partir de la base de données
    $rqt = $connexion->query("SELECT * FROM Avis");
    $commentaires = $rqt->fetchAll(PDO::FETCH_ASSOC);

    foreach($commentaires as $commentaire){
        echo "<cite id='temoin'> - \"".$commentaire['Comm']."\"</cite><br>";   
    }
    $connexion = null;

?>