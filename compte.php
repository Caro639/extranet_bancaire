<?php session_start(); ?>
<?php include_once('connexion.php'); ?>
<?php include_once('variables.php'); ?>
    
<?php if(isset($_SESSION['id_user']) && $_SESSION['id_user'] !== ''){ ?>
  
    <?php
        $sqlQuery = 'SELECT * FROM account WHERE username=:username ';
        $accountStatement = $mysqlClient->prepare($sqlQuery);
        $accountStatement->execute(array(
            ':username' => $_SESSION['username'],
        ));
        $account = $accountStatement->fetch(); 
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

        <?php include('header.php'); ?>

        <section>
            
            <div id="compte">
                <h2>Paramétres de votre compte</h2>
                    <a href="index.php" type="href" class="btn btn-primary"><img src="images/retour.png" alt="retour" id="retour"/></a>
                    <ul>
                        <label>Votre nom: <?php echo $account['nom'] ?>
                        <input type="text" name="nom" value="<?php echo $account['nom'] ?>" required>
                        <label>Votre prénom: <?php echo $account['prenom'] ?></label>
                        <input type="text" name="prenom" value="<?php echo $account['prenom'] ?>" required>
                        <label>Votre pseudo: <?php echo $account['username'] ?></label>
                        <input type="text" name="username" value="<?php echo $account['username'] ?>" required>
                        <label>Votre mot de passe: <?php echo $account['password'] ?></label>
                        <input type="text" name="password" value="<?php echo $account['password'] ?>" required>
                        <label>Votre question secrète: <?php echo $account['question'] ?></label>
                        <input type="text" name="question" value="<?php echo $account['question'] ?>" required>
                        <label>Votre réponse: <?php echo $account['reponse'] ?></label>
                        <input type="text" name="reponse" value="<?php echo $account['reponse'] ?>" required>
                    </ul>
            
            </div>
    </div>
    <?php include('footer.php'); ?>

</body>

</html>
