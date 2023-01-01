<?php 
session_start();
include_once('connexion.php');
if(isset($_POST['username']) && isset($_POST['password'])) {

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);


    if($username !== "" && $password !== "")
    {   
    $sqlQuery = 'SELECT count(*) FROM account WHERE username and password '; 
    $accountStatement = $mysqlClient->prepare($sqlQuery);
    $accountStatement->execute(array(
        ':username' => $username, ':password' => $password,
    ));
    $account = $accountStatement->fetchAll();
   
    
        $_SESSION['username'] = $username;
        header('Location: index.php');
    }
    else
    {
        header('Location: connecter.php?erreur=1');
    }
    }
    else
    {
        header('Location: connecter.php');
    }
    
    
    mysqli_close($db);
    ?>
    <?php include('variables.php'); ?>

