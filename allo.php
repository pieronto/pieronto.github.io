<link rel="stylesheet" href="style.css">
<div class="menu">
                <p>
                🏠&nbsp;<a href="index.php">Accueil</a> &emsp;&emsp; 📚&nbsp;<a href="reviews.php">Reviews</a>&emsp;&emsp; 📝&nbsp;<a href="articles.php">Articles</a>&emsp;&emsp; 📹&nbsp;<a href="https://www.youtube.com/channel/UCyxzFCnQ7XpdCGrxWxQL5yQ">Youtube</a>&emsp;&emsp;🎙 &nbsp;<a href="https://anchor.fm/bonzybuddy/">Podcast</a>&emsp;&emsp;📬&nbsp;<a href="contact.php">Contact</a>
            </p>
            </div>

<?php
if(isset($_POST['identite']) && isset($_POST['email']) && isset($_POST['message'])&& isset($_POST['sujet'])){
    if(!empty($_POST['identite']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $destinataire = "ilone.hayek@tutanota.com";
        $sujet = "Message Blog Ilone";
        $message .= "Nom : ".$_POST['identite']."\r\n";
        $message .= "Adresse email : ".$_POST['email']."\r\n";
        $message .= "Sujet : ".$_POST['sujet']."\r\n";
        $message .= "Message : ".$_POST['message']."\r\n";
        $entete = 'From: '.$_POST['email']."\r\n".
            'Reply-To: '.$_POST['email']."\r\n".
        'X-Mailer: PHP/'.phpversion();
        if (mail($destinataire,$sujet,$message,$entete)){
            echo "<h2>Merci !</br>Votre message a été correctement envoyé à Ilone Hayek.</h2>";?>

        } else {
            echo "<h2>Une erreur est survenue lors de l'envoi du formulaire par email</h2>";

        }
    }
}