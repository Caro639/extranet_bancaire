<?php session_start(); ?>
<?php include_once('connexion.php'); ?>
<h1>Votre commentaire a bien été pris en compte !</h1>
<div class="card">
    <div class="card-body">
        <h2 class="card-title">Rappel de votre demande</h2>
        <p class="card-text"><b>Pseudo</b> : <?php echo $_POST['username']; ?></p>
        <p class="card-text"><b>Commentaire</b> : <?php echo $_POST['post']; ?></p>
    </div>
</div>

<?php
$postData = $_POST;

if (!isset($postData['post']) )
{
        echo('Veuillez soumettre votre avis.');
    return;
}

$post = $postData['post'];

?>



