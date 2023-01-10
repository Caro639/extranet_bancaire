<?php session_start(); ?>
<?php include_once('connexion.php'); ?>
<?php include_once('variables.php'); ?>
    
    <?php
      if (isset($_GET['connexion'])) {
        if ($_GET['connexion'] == true) {
        }
    } else if ($_SESSION['username'] !== "") {
        $username = $_SESSION['username'];
        
        echo " Bienvenue $username sur le site de la GBAF, vous pouvez modifier vos paramètres !";
    }
    ?>
    <?php
  
    
  $sqlQuery = 'SELECT username FROM account WHERE username';
  $accountStatement = $mysqlClient->prepare($sqlQuery);
  $accountStatement->execute(array(
    ':username' => $username,));
  $account = $accountStatement->fetchAll();
  
?>

<?php 
        $sqlQuery = 'SELECT nom, prenom, username, password, question, reponse FROM account WHERE username=:username AND nom=:nom AND prenom=:prenom AND password=:password AND question=:question AND reponse=:reponse';
        $accountStatement = $mysqlClient->prepare($sqlQuery);
        $accountStatement -> execute(array(
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':username' => $username,
            ':password' => $password,
            ':question' => $question,
            ':reponse' => $reponse,
        ));
        $accounts = $accountStatement ->fetchAll();
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

        <?php include('header.php'); ?>

        <a href='index.php?deconnexion=true'><span>Se déconnecter</span></a>
        <section>
            <div id="compte">

                <h2>Paramétres de votre compte</h2>

                <nav>
                    <ul>
                    
                    <?php foreach ($accounts as $account); {  ?>
                
                        <p><a href="#">Votre nom: <?php echo $nom ?></a></p>
                        <li><a href="#">Votre prénom: <?php echo $prenom ?></a></li>
                        <li><a href="#">Votre pseudo: <?php echo $username ?></a></li>
                        <li><a href="#">Votre mot de passe: <?php echo $password ?></a></li>
                        <li><a href="#">Votre question secrète: <?php echo $question ?></a></li>
                        <li><a href="#">Votre réponse: <?php echo $reponse ?></a></li>
                        <?php } ?>
                </nav>
                <button><a href="index.php" type="href" class="btn btn-primary">Retour<br />Page Acteurs</a></button>
            </div>
    </div>
    <?php include('footer.php'); ?>

</body>

</html>

<a href="inscription.php" type="href" class="btn btn-primary">Modifier votre nom</a></button>