<?php 
session_start();
include_once('connexion.php');
if(isset($_POST['username']) && isset($_POST['password'])) {

    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));


    if($username !== "" && $password !== "")
    {   
    $sqlQuery = 'SELECT COUNT(*) FROM account WHERE id_user = :idUser;';
    $queryStatement = $mysqlClient->prepare($sqlQuery);
    $queryStatement->execute(array(
        ':idUser' => $idUser,
    ));
    $queryStatement->fetch();
    $count =$idUser['COUNT(*)'];
    if($count!=1)
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
    }
    
    mysqli_close($db);
    ?>
    <?php include('variables.php'); ?>


    
    $sqlQuery = 'SELECT count(*) FROM account WHERE id_user = '".$username."' and password = '".$password."' ';
    $queryStatement = $mysqlClient->prepare($sqlQuery);
    $queryStatement->execute(); 
        foreach($accounts as $account)
        $count = $id_user['count(*)'];