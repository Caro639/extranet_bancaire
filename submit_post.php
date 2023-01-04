<?php session_start(); ?>
<?php include_once('connexion.php');

if(isset($_POST['post']) && !empty($_POST['post'])); {
    $post = htmlspecialchars($_POST['post']);
    if ($post !== "") { 
        

        $id_acteur = filter_var($_GET['id'], FILTER_VALIDATE_INT);
        $id_user = filter_var($_GET['id'], FILTER_VALIDATE_INT);
        $sqlQuery = 'INSERT INTO post(id_user, id_acteur, date_add(DATE_FORMAT("%d/%m/%Y"), post,) VALUES (?,?, NOW(),?)';
        $postStatement = $mysqlClient->prepare($sqlQuery);
        $id_user = $mysqlClient -> lastInsertId($id_user);
        $id_acteur = $mysqlClient -> lastInsertId($id_acteur);
        $postStatement -> execute(array($id_user, $id_acteur, $post,));

            $post = 'Commentaire envoyé';
        
        }
} 
include('variables.php'); 
?>


    $sqlQuery = 'INSERT INTO post SELECT (post, DATE_FORMAT(date_add, "%d/%m/%Y") LEFT JOIN account ON post.id_user = account.id_user WHERE id_acteur=:idActeur VALUES (:post, :date_add)';
    $queryStatement = $mysqlClient->prepare($sqlQuery);
    $queryStatement->execute(array(':post' => $post,)); 




':post' => $post,)

$sqlQuery = 'SELECT * FROM post LEFT JOIN account ON post.id_user = account.id_user WHERE id_acteur=:idActeur;';
    $queryStatement = $mysqlClient->prepare($sqlQuery);
    $queryStatement->execute(array(
        ':idActeur' => $idActeur,
    ));
    $posts = $queryStatement->fetchAll();


include('fonctions.php');
username' => $username,'idActeur' => $idActeur,
':post' => $post,
, :date_ad(date(string $format [,int $timestamp = time(void)
$dateAdd = $timestamp;

'username' => $username, 'idActeur' => $idActeur,