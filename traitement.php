<?php

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    echo ('Il faut un email et mot de passe pour soumettre le formulaire.');
    return;
}

$email = $_POST['email'];
$password = $_POST['password'];

?>
<?php include_once('header.php'); ?>

<div class="container1">
    Bonjour <?php echo $_COOKIE['LOGGED_USER']; ?> !
    <h2>Message bien reçu !</h2>

    <div class="connexion_imput">
        <h4>Rappel de vos informations</h4>
        <p><b>Email</b> : <?php echo ($email); ?></p>
        <p><b>Password</b> : <?php echo strip_tags($password); ?></p>
    </div>
</div>

<?php include_once('footer.php'); ?>