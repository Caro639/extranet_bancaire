<?php session_start(); 
 include_once('connexion.php');
//include_once('verification.php');
//include('variables.php'); 


if (isset($_POST['vote']) && !empty($_POST['vote'])); {
    $vote = htmlspecialchars($_POST['vote']);
    $id_user = $_SESSION['id_user'];
    $id_acteur = htmlspecialchars($_GET['id']);
    
        if ($vote !== "") {
            
            $sqlQuery = 'INSERT INTO vote( id_user, id_acteur, vote) VALUES ( :id_user, :id_acteur, :vote)';
            $voteStatement = $mysqlClient->prepare($sqlQuery);
            $voteStatement->execute(array(
                ':id_user' => $id_user,
                ':id_acteur' => $id_acteur,
                ':vote' => htmlspecialchars($vote),
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
            <form action="acteur.php?id=<?php echo $id ?>" method="POST">
                <h1>Votre avis a bien été pris en compte. Merci !</h1>

                <label><b>Votre avis</b></label>
                <input type="text" placeholder=<?php echo htmlspecialchars($vote); ?> name="vote" size="100%">

                <input type="submit" id='submit' value='PAGE ACTEUR'>
            </form>
        </div>
        <!-- footer -->
        <?php include('footer.php'); ?>

</body>

</html>
