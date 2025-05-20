<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $message = $_POST['message'];
        
        $to = "47nathan.barbat@laposte.net"; // Remplacez par votre adresse email
        $subject = "Nouveau message de contact depuis votre portfolio";
        
        $email_content = "Nom: $nom\n";
        $email_content .= "Prénom: $prenom\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Téléphone: $telephone\n\n";
        $email_content .= "Message:\n$message\n";
        
        $headers = "From: $email";
        
        mail($to, $subject, $email_content, $headers);
    }
    ?>