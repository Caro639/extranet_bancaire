
<?php
include_once('connexion.php');
if ((isset($_POST['nom']) && !empty($_POST['nom'])) && (isset($_POST['prenom']) && !empty($_POST['prenom']) && (isset($_POST['username']) && !empty($_POST['username']) && (isset($_POST['password']) && !empty($_POST['password'] && (isset($_POST['question']) && !empty($_POST['question']) && (isset($_POST['reponse']) && !empty($_POST['reponse'])))))))) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $question = htmlspecialchars($_POST['question']);
    $reponse = htmlspecialchars($_POST['reponse']);

    if ($nom !== "" && $prenom !== "" && $username !== "" && $password !== "" && $question !== "" && $reponse !== "") {

        $sqlQuery = 'INSERT INTO account (nom, prenom, username, password, question, reponse) VALUES (:nom, :prenom, :username, :password, :question, :reponse)';
        $accountStatement = $mysqlClient->prepare($sqlQuery);
        $accountStatement->execute(array(':nom' => $nom, ':prenom' => $prenom, ':username' => $username, ':password' => $password, ':question' => $question, ':reponse' => $reponse,));

        $_SESSION['username'] = $username;
        header('Location: connecter.php');
        $_SESSION = 'inscription réussie';
    } else {
        header('Location: connecter.php?erreur=1');
    }
} else {
    header('Location: connecter.php');
}

mysqli_close($db);
?>
    <?php include('variables.php'); ?>
    
   
