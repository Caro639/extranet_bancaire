
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

    <header>
        <div id="logo">
            <img src="images/logo_gbaf.png" alt="Logo de GBAF" />
        </div>

        <div id="profil">
            <img src="images/profil.png" alt="Photo de profil" class="profil" />

           
                <p><?php echo $account['username'] ?></p>
        </div>    
        </header>
    <div class="menu">     
        <nav>
            <ul>
                <li><a href="index.php">Acteurs</a></li>
                <li><a href="compte.php">Mon compte</a></li>
                <li><a href='index.php?deconnexion=true'><span>Se déconnecter</span></a></li>
            </ul>
    </div>    
