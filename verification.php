<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password']))
{
    include_once('connexion.php');
}
$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username']));
$password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));

if($username !== "" && $password !== "")
{   
    $sqlQuery = "SELECT * FROM account WHERE username = '".$username."' and password = '".$password."' ";
    $queryStatement = $mysqlClient->prepare($sqlQuery);
    $queryStatement->execute(array(
        ':idUser' => $idUser,)); 
    
    if($account!=1)
    {
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