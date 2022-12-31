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
<!-- creation d'un formulaire pour commenter un acteur -->

<?php include('header.php'); ?>
<div id="container">

<form action="submit_post.php" method="POST">
    <h1>Nouveau commentaire</h1>

    <label><b>Ecrivez votre commentaire</b></label>
    <input type="text" placeholder="Ecrivez votre commentaire" name="post" size="100%" required>

    <input type="submit" id='submit' value='ENVOYER'>
    <?php
    if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1 || $err==2)
        echo "<p style='color:red'>Commentaire invalide</p>";
    }
    ?>
</form>
</div>
             <!-- footer -->
             <?php include('footer.php'); ?>
    
    </body>
</html>



