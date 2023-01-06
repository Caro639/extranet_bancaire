<?php
session_start();
include_once('connexion.php');
if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);


    if ($username !== "" && $password !== "") {
        $sqlQuery = 'SELECT * FROM account WHERE username=:username AND password=:password ';
        $accountStatement = $mysqlClient->prepare($sqlQuery);
        $accountStatement->execute(array(
            ':username' => $username, ':password' => $password,
        ));
        $account = $accountStatement->fetch();

        $_SESSION['username'] = $account['username'];
        $_SESSION['id_user'] = $account['id_user'];

        setcookie(
            'id_user',
            [
                'expires' => time() + 365 * 24 * 3600,
                'secure' => true,
                'httponly' => true,
            ]
        );

        header('Location: index.php');
    } else {
        header('Location: connecter.php?erreur=1');
    }
} else {
    header('Location: connecter.php');
}


mysqli_close($db);
?>
    <?php include('variables.php'); ?>


