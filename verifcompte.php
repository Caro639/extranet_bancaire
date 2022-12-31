
<?php
    include_once('connexion.php');

if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {

    if ((isset($_POST['nom']) && !empty($_POST['nom'])) && (isset($_POST['prenom']) && !empty($_POST['prenom']) && (isset($_POST['username']) && !empty($_POST['username']) && (isset($_POST['password']) && !empty($_POST['password'] && (isset($_POST['question']) && !empty($_POST['question']) && (isset($_POST['reponse']) && !empty($_POST['reponse'])))))))) ;
    $nom = mysqli_real_escape_string($db,htmlspecialchars($_POST['nom']));
    $prenom = mysqli_real_escape_string($db,htmlspecialchars($_POST['prenom']));
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    $question = mysqli_real_escape_string($db,htmlspecialchars($_POST['question']));
    $reponse = mysqli_real_escape_string($db,htmlspecialchars($_POST['reponse']));

    if($nom !== "" && $prenom !== "" && $username !== "" && $password !== "" && $question !== "" && $reponse !== "") {

    $sqlQuery = 'INSERT INTO account VALUES (:nom, :prenom, :username, :password, :question, :reponse)';
    $queryStatement = $mysqlClient->prepare($sqlQuery);
    $queryStatement->execute(array(
        ':idUser' => $idUser,)); 
    }
        if($account)
        {
            header('Location: index.php');
            $_SESSION = 'inscription réussie';
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