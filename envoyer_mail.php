<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["devis"])) {
    // Capturer les données soumises dans le formulaire
    $description = $_POST["description"];
    $vetements = $_POST["vetements"];
    $tissu = $_POST["tissu"];
    $taille = $_POST["taille"];
    $couleur = $_POST["couleur"];
    $service = $_POST["service"];

    
    // Adresse e-mail du client
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']===true){
        $email_client = $_SESSION['email'];

        // Construire le contenu de l'e-mail
        $subject = "Récapitulatif de votre devis";
        $message = "Voici le récapitulatif de votre devis :\n\n";
        $message .= "Description : $description\n";
        $message .= "Type de vêtements : $vetements\n";
        $message .= "Type de tissu : $tissu\n";
        $message .= "Taille : $taille\n";
        $message .= "Couleur : $couleur\n";
        $message .= "Services : $service\n";

        // Envoi de l'e-mail au client
        $headers = "From : meziandehia@gmail.com" ;
        $headers.="Content-Type : text/html;charset=utf-8\r\n";
        
        if(mail($email_client, $subject, $message, $headers)){
            // Confirmation d'envoi
            echo "Le récapitulatif du devis a été envoyé à $email_client.";
        }
        else{
            echo"erreur lors de l'envoi à $email_client."
;       }
    }
    else{
        $bouton_login = '<button class="btn btn-outline-primary" onclick="window.location.href=\'page_de_login.php\'">Me connecter pour accéder aux inscriptions</button>';
        echo $bouton_login;
    }

    
}
?>