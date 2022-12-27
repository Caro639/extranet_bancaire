// soumission commentaire
<?php
$postData = $_POST;

if (!isset($postData['post']) )
{
        echo('Veuillez soumettre votre avis.');
    return;
}

$post = $postData['post'];

?>

