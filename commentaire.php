
<?php session_start(); ?>
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

<form action="submit_post.php" method="POST">
    <div class="post">
        <label for="post" class= "form-label">Nouveau commentaire</label>
        <textarea class="form-control" placeholder="Votre commentaire" id="post" name="post"></textarea>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
</form>

             <!-- footer -->
             <?php include('footer.php'); ?>
        </div>
    </body>
</html>