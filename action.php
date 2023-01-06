<?php session_start(); ?>
<?php include_once('connexion.php');

if (isset($_GET['vote']) and !empty($_GET['vote'])) {
    $gett = htmlspecialchars($_GET['vote']);

    $sqlQuery = 'SELECT COUNT(*) FROM vote LEFT JOIN account ON vote.id_user = account.id_user WHERE id_acteur=:idActeur';
    $queryStatement = $mysqlClient->prepare($sqlQuery);
    $queryStatement->execute(array(':vote' => $vote,));
    $votes = $queryStatement->fetch();
    $count = $votes;

    if ($vote->$count == 1) {
        if ($gett == 1) {
            $queryStatement = 'INSERT COUNT(*) INTO vote LEFT JOIN account WHERE vote.id_user = account.id_user AND id_acteur=:idActeur VALUES (?)';
            $queryStatement = $mysqlClient->prepare($sqlQuery);
            $queryStatement->execute(array(':vote' => $vote,));
        } elseif ($gett == 2) {
            $queryStatement = 'INSERT COUNT(*) INTO vote LEFT JOIN account WHERE vote.id_user = account.id_user AND id_acteur=:idActeur VALUES (?)';
            $queryStatement = $mysqlClient->prepare($sqlQuery);
            $queryStatement->execute(array(':vote' => $vote,));
        }
        header('Location: acteur.php?=' . $votes);
    } else {
        exit('Errreur. <a href="acteur.php/")>Page accueil</a>');
    }
} else {
    exit('Erreur. <a href="acteur.php/")>Page accueil</a>');
}
?>

$idActeur = filter_var($_GET['id'], FILTER_VALIDATE_INT);