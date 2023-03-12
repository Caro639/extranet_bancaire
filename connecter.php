<?php session_start(); ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>GBAF</title>
    </head>

    <body>
        <div class="gbaf"><img src="images/logo_gbaf.png" alt="Logo de GBAF" />
            <button><a href="inscription.php">Créer un compte</a></button>
            <button><a href="form_mp.php">Mot de passe oublié</a></button>
           
        </div>
        <div id="container">

        <form action="verification.php" method="POST">
            <h1>Connexion</h1>
            <?php if(isset($_SESSION['id_user']) && $_SESSION['id_user'] !== ''){ ?>
                <p>Vous étes déja connecté</p>
                <p> <a href='index.php?deconnexion=true'><span>Se déconnecter</span></a></p>
            <?php } else { ?>
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='CONNECTER'>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                 
                ?>
            <?php  } ?>
            
        </form>
    </body>
</html>
