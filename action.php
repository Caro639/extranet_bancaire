<?php session_start(); ?>
<?php include_once('connexion.php');

if(isset($_GET['vote']) AND !empty($_GET['vote'])) {
    $gett = (int) $_GET['id'];

    $idActeur = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    $sqlQuery = 'SELECT * FROM vote LEFT JOIN account ON vote.id_user = account.id_user WHERE id_acteur=:idActeur';
    $queryStatement = $mysqlClient->prepare($sqlQuery);
    $queryStatement->execute(array(':vote' => $idUser,));
    $votes = $queryStatement -> fetchAll();

    if($vote->rowCount() == 1){
        if($gett == 1) {
           $queryStatement = 'INSERT INTO vote LEFT JOIN account ON vote.id_user = account.id_user WHERE id_acteur=:idActeur VALUES (?)';
           $queryStatement = $mysqlClient->prepare($sqlQuery);
            $queryStatement->execute(array(':vote' => $idUser,));

        } elseif($gett == 2) {
           $queryStatement = 'INSERT INTO vote LEFT JOIN account ON vote.id_user = account.id_user WHERE id_acteur=:idActeur VALUES (?)';
           $queryStatement = $mysqlClient->prepare($sqlQuery);
           $queryStatement->execute(array(':vote' => $idUser,));
        }
        header('Location: acteur.php?='.$votes);
    } else {
        exit('Errreur. <a href="acteur.php/")>Page accueil</a>');
        }
    } else {
        exit('Erreur. <a href="acteur.php/")>Page accueil</a>');
    }
    ?>
    

    
