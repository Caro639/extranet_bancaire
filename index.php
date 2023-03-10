<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>GBAF</title>
    </head>

    <body>

        <?php
            try {
                $mysqlClient = new PDO('mysql:host=localhost;dbname=extranet_gbaf;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
            }
            catch(Exception $e) {
                die('Erreur : '.$e->getMessage());
            }
            $sqlQuery = 'SELECT * FROM acteur';
            $acteurStatement = $mysqlClient->prepare($sqlQuery);
            $acteurStatement->execute();
            $acteurs = $acteurStatement->fetchAll();
        ?>

        <div id="bloc_page">
            
                <!-- header -->
            <?php include('header.php'); ?>

                <!-- formulaire de connexion au site -->
    <?php include_once('login.php'); ?> 

    <?php if(!isset($loggedAccount)): ?>
        <?php include_once('index.php'); ?>
    
    <section>  <!-- présentation -->
        <h1>Groupement Banque Assurance Français</h1>
                <br />
            <p>
                Le GBAF est une fédération représentant les six grands groupes français :
                <br />
        Le Groupement Banque Assurance Français est le représentant de la profession bancaire et des assureurs sur tous les axes de la réglementation finançière française. Sa mission est de promouvoir l'activité bancaire à l'échelle nationale.
            </p>
            <br />
            <p>
            <div id="groupes_bancaires">
                <img src="images/bnp.png" alt="Logo BNP" />
                <img src="images/bpce.png" alt="Logo BPCE" />
                <img src="images/credit_agricole.png" alt="Logo Crédit Agricole" />
                <img src="images/logo_gbaf.png" alt="Logo de GBAF" />
                <img src="images/credit_mutuel_cic.png" alt="Logo Crédit Mutuel CIC" />
                <img src="images/societe_generale.png" alt="Logo Société Générale" />
                <img src="images/banque_postale.png" alt="Logo La Banque Postale" />
            </p>
            </div>
    </section>

    <section>  <!-- acteurs_et_partenaires -->
        <h2>Acteurs et partenaires</h2>
            <br />
             <div id="acteurs">
                <p>
                Le GBAF souhaite proposer aux salariés des grands groupes français un point d'entrée unique, répertoriant un grand nombre d'informations sur les partenaires et acteurs du groupe ainsi que sur les produits et services bancaires et financiers. Chaque salarié peut ainsi poster un commentaire et donner son avis.
                </p>
            </div>

            <div id="partenaires">

            <?php include('variables.php'); ?>

            <?php foreach ($acteurs as $acteur) { ?>
                <h2><?php echo $acteur['acteur']; ?></h2>
               
                   <p><img src="images/<?php echo $acteur['logo']; ?>" alt="Logo <?php echo $acteur['acteur']; ?>" /></p>
        
                <p><?php echo $acteur['description']; ?></p>
                <p><a href="acteur.php?id=<?php echo $acteur['id_acteur']; ?>" class="button">Lire la suite</a></p>
            <?php } ?>
            <?php endif; ?>

            </div>
    </section>
    

             <!-- footer -->
        <?php include('footer.php'); ?>
        </div>
    </body>
</html>