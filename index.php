<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>GBAF</title>
    </head>

    <body>

    
    <div id="bloc_page">
            
            <!-- header -->
        <?php include('header.php'); ?>
        <?php
            include_once('connexion.php');

            if(isset($_GET['deconnexion']))
        {
            if($_GET['deconnexion']==true)
        {
            session_unset();
            header('location:connecter.php');
        }
        }
        else if($_SESSION['username'] !== "")
    {
        $username = $_SESSION['username'];
        echo " Bienvenue $username sur le site de la GBAF, vous êtes connectés !";
    }
    ?>
        <a href='index.php?deconnexion=true'><span>Se déconnecter</span></a>

        <?php
            $sqlQuery = 'SELECT * FROM acteur';
            $acteurStatement = $mysqlClient->prepare($sqlQuery);
            $acteurStatement->execute();
            $acteurs = $acteurStatement->fetchAll();
        ?>
 
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
    

            </div>
    </section>
    

             <!-- footer -->
        <?php include('footer.php'); ?>
        </div>
    </body>
</html>