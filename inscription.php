<?php
include_once('connexion.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>GBAF</title>
</head>

<body>
    <?php include('header.php'); ?>
    <div id="container">

        <form action="verifcompte.php" method="POST">
            <h1>Créer un compte</h1>

            <label><b>Nom</b></label>
            <input type="text" placeholder="Entrer votre nom" name="nom" required>

            <label><b>Prénom</b></label>
            <input type="text" placeholder="Entrer votre prénom" name="prenom" required>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <label><b>Veuillez écrire une question secrète</b></label>
            <input type="text" placeholder="Entrer votre question" name="question" required>

            <label><b>Veuillez écrire la réponse à votre question</b></label>
            <input type="text" placeholder="Entrer votre réponse" name="reponse" required>

            <input type="submit" id='submit' value='VALIDER'>
            <?php
            if (isset($_GET['erreur'])) {
                $err = $_GET['erreur'];
                if ($err == 1 || $err == 2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
            }
            ?>
        </form>
        <a href="connecter.php">Se connecter</a>

</body>

</html>