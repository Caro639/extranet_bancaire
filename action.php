<?php session_start(); ?>


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

        <?php include_once('connexion.php'); ?>
        <?php $id = filter_var($_GET['id'], FILTER_VALIDATE_INT); ?>
            <form action="like.php?id=<?php echo $id ?>" method="POST">

            <h1>Donnez un avis</h1>

                <label><b>Votre avis !</b></label>
            <input type="text" placeholder="Donnez votre avis professionnel et constructif !" name="vote" required>

            <input type="submit" id='submit' value='ENVOYER'>
            <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                echo "<p style='color:red'>Avis non soumis !</p>";
            }
            ?>
            </form>
    </body>
</html>
