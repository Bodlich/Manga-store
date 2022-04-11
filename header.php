<?php
// retenir l'email de la personne connectée pendant 1 an
setcookie(
    'LOGGED_USER',
    'utilisateur@exemple.com',
    [
        'expires' => time() + 365*24*3600,
        'secure' => true,
        'httponly' => true,
    ] 
);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="mangastyle.css" />
    <link rel="icon" type="image/x-icon" href="image/favicon.ico" />
    <title>Manga'Store | la référence en manga</title>
</head>

<body>
    <div id="bloc_page">
        <header>
            <div class="tete">
                <h1><a href="Manga'store.php">Manga'Store</a></h1>
                <a href="Manga'Store.php"><img src="image/logoManga.png" alt="logo manga store" class="logo" /></a>
                <h4>La Référence en Manga</h4>
            </div>
            <nav>
                <fieldset>
                    <legend> Connexion / Inscription </legend>
                    <form action="traitement.php" method="Post">
                        <label for="email">Email</label> : <input type="email" name="email" id="pseudo" /><br />
                        <label for="password">Password</label> : <input type="password" name="password" id="password" /><br />
                        <input type="submit" value="Connexion" />
                    </form>
                </fieldset>

                <ul>
                    <li><a href="manga-catalogue.php">Catalogue</a></li>
                    <li><a href="manga-actualite.php">Actualités</a></li>
                    <li><a href="manga-planning.php">Planning</a></li>
                </ul>
            </nav>
        </header>