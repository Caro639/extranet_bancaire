
<?php session_start(); ?>
<?php include_once('connexion.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>GBAF</title>
    </head>

    <body>
    <div id="bloc_page">
            
            <!-- header -->
        <?php include('header.php'); ?>

<!-- creation d'un formulaire pour commenter un acteur -->
        <?php include('variables.php'); ?>
<form action="submit_post.php" method="post">
    <div class="posts">
        <label for="post" class= "form-label">Nouveau commentaire</label>
        <textarea class="form-control" placeholder="Votre commentaire" id="post" name="post" size= "400" maxlength="400"></textarea>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
</form>

             <!-- footer -->
             <?php include('footer.php'); ?>
        </div>
    </body>
</html>