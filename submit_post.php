<?php session_start(); ?>
<?php include_once('connexion.php');

if(isset($_POST['post']) && !empty($_POST['post'])) {
    $sqlQuery = "INSERT * INTO post LEFT JOIN account ON post.id_user = account.id_user WHERE id_acteur=:idActeur VALUES (:id_post)";
    $queryStatement = $mysqlClient->prepare($sqlQuery);
    $queryStatement->execute(array(
        ':idActeur' => $idActeur,)); 
        {
            $posts= $queryStatement;
            $posts = 'Commentaire envoyé';
        }
}
?>



