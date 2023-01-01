<?php session_start(); ?>
<?php include_once('connexion.php');

if(isset($_POST['post']) && !empty($_POST['post'])) {
    $post = htmlspecialchars($_POST['post']);
    if ($post !== "") { 
        
    
    $sqlQuery = 'INSERT INTO post (post) LEFT JOIN account ON post.id_user = account.id_user WHERE id_acteur=:idActeur VALUES (:post)';
    $insertPost = $mysqlClient->prepare($sqlQuery);
    $insertPost->execute(array(
        ':post' => $post,)); 
        {
            $post= $insertPost;
            $post = 'Commentaire envoyé';
        }
}
} include('variables.php'); 
    include('fonctions.php');
?>



username' => $username,'idActeur' => $idActeur,

, :date_ad(date(string $format [,int $timestamp = time(void)
$dateAdd = $timestamp;

'username' => $username, 'idActeur' => $idActeur,