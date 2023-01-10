<?php session_start(); ?>
<?php include_once('connexion.php');
//include_once('verification.php');
//include('variables.php'); 

if (isset($_POST['post']) && !empty($_POST['post'])); {
    $post = htmlspecialchars($_POST['post']);
    $id_user = $_SESSION['id_user'];
    $id_acteur = htmlspecialchars($_GET['id']);
    $date_add = date("Y/m/d");
    if ($post !== "") {

        $sqlQuery = 'INSERT INTO post(id_user, id_acteur, date_add, post) VALUES (:id_user, :id_acteur, :date_add, :post)';
        $postStatement = $mysqlClient->prepare($sqlQuery);
        $postStatement->execute(array(
            ':id_user' => $id_user,
            ':id_acteur' => $id_acteur,
            ':date_add' => $date_add,
            ':post' => htmlspecialchars($post),
        ));

    }
    
}
    
?>

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
        <?php $id = filter_var($_GET['id'], FILTER_VALIDATE_INT); ?>
            <form action= "acteur.php?id=<?php echo $id ?>" method="POST">
                <h1>Votre commentaire a bien été pris en compte. Merci !</h1>

                <label><b>Votre commentaire</b></label>
                <input type="text" placeholder=<?php echo strip_tags($post); ?> name="post" size="100%">

                <input type="submit" id='submit' value='PAGE ACCUEIL'>
            </form>
        </div>
        <!-- footer -->
        <?php include('footer.php'); ?>

</body>

</html>
