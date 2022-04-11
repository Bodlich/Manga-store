<?php include_once('header.php'); ?>

<?php

if (!isset($_POST['email']) || !isset($_POST['message'])) {
    echo ('Il faut un email et message pour soumettre le formulaire.');
    return;
}

$email = $_POST['email'];
$message = $_POST['message'];

?>
<div class="container2">

    <h2>Message bien reçu !</h2>

    <div class="contact_imput">
        <h4>Rappel de vos informations</h4>
        <p><b>Email</b> : <?php echo ($email); ?></p>
        <p><b>Message</b> : <?php echo strip_tags($message); ?></p>
    </div>
</div>
<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0) {
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['screenshot']['size'] <= 5000000) {
        // Testons si l'extension est autorisée
        $fileInfo = pathinfo($_FILES['screenshot']['name']);
        $extension = $fileInfo['extension'];
        $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
        if (in_array($extension, $allowedExtensions)) {
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' . basename($_FILES['screenshot']['name']));
            echo "<b>L'envoi a bien été effectué !</b>";
        }
    }
}
?>

<?php include_once('footer.php'); ?>