<?php session_start(); ?>

<?php
try
{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=extranet_gbaf;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
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
        </div>

        <section> <!--le partenaire-->
            <div id="partenaire">


                <?php
                $idActeur = $_GET['id'];
                $sqlQuery = 'SELECT * FROM acteur WHERE id_acteur=' . $idActeur;
                $acteurStatement = $mysqlClient->prepare($sqlQuery);
                $acteurStatement->execute();
                $acteur = $acteurStatement->fetch();
                ?>
                    <h2><?php echo $acteur['acteur']; ?></h2>
        
                <p>
                    <img src="images/<?php echo $acteur['logo']; ?>" alt="Logo <?php echo $acteur['acteur']; ?>" />
                </p>
                <p><?php echo $acteur['description']; ?></p>

            </div>
            
        </section>

        <article> <!--les commentaires-->
                 <h2>Commentaires</h2>

                <div id="commentaire">
                <button><a href="post.php" type="href" class="btn btn-primary">Nouveau<br />commentaire</a></button>

                </div>
            <div id="posts">

            <?php include('variables.php'); ?>

            <?php foreach ($posts as $post);?>

            <i><?php echo $post ['username']; ?></i>
            <p><?php echo $post ['date_add']; ?></p>
            <p><?php echo $post ['post']; ?></p>

        </div>
            
        </article>
        
        <?php include('footer.php'); ?>
    
    </body>
</html>