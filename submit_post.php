<?php session_start(); ?>
<?php include_once('connexion.php');
//include_once('verification.php');
//include('variables.php'); 

if(isset($_POST['post']) && !empty($_POST['post'])); {
    $post = htmlspecialchars($_POST['post']);
    $id_user = $_SESSION['id_user']; 
    $id_acteur = htmlspecialchars($_GET['id']);
    $date_add = date("Y/m/d");
    if ($post !== "") { 
        
        $sqlQuery = 'INSERT INTO post(id_user, id_acteur, date_add, post) VALUES (:id_user, :id_acteur, :date_add, :post)';
        $postStatement = $mysqlClient->prepare($sqlQuery);
        $postStatement ->execute(array(
            ':id_user' => $id_user,
            ':id_acteur' => $id_acteur,
            ':date_add' => $date_add,
            ':post' => htmlspecialchars($post),
        ));
        header('Location: index.php');
          //  $postStatement = $post;
        //$post = 'Commentaire envoyé';
    
        }
    }
    ?> 

/*
    
    acteur.php?id= . $id_acteur
    $id_user = $mysqlClient -> lastInsertId($id_user);
        $id_acteur = $mysqlClient -> lastInsertId($id_acteur);
    
    $id_acteur = filter_var($_GET['id'], FILTER_VALIDATE_INT);
        $id_user = filter_var($_GET['id'], FILTER_VALIDATE_INT);

    $sqlQuery = 'INSERT INTO post SELECT (post, date_add) LEFT JOIN account WHERE post.id_user = account.id_user  id_acteur=:idActeur VALUES (:post, :date_add)';
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
*/