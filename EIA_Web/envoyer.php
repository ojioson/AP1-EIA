<?php 
$to = "contact@eia.fr";
$sujet ="Formulaire de contact";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name= htmlspecialchars($_POST['name']);
$email= htmlspecialchars($_POST['email']);
$choix = htmlspecialchars($_POST['choix']);
$message = htmlspecialchars($_POST['message']);


// $headers = "From: $email\r\n";
// $headers .= "Reply-To: $email\r\n";
// $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
// $messagef = "Qui : $choix.\r\n";
// $messagef = "$message\r\n";

// mail($to,$sujet,$messagef,$headers);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci</title>
</head>
<body>
    <Section class="merci">
    <div class="bgmerci">
        <div>
            <img src="assets/img/contactr.png" alt="">
        </div>
        <div>
            <h1>Merci de nous avoir contacté <?php echo $name?>.</h1>
        <p>Nous vous répondrons dans les plus brefs délais.</p>
        <a class="btnhover" href="index.php">Retourner à l'Acceuil</a>
        </div>

    </div>
    </Section>
</body>
</html>

