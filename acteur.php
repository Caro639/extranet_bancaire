<?php session_start(); ?>

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
                include_once('connexion.php');
                $idActeur = filter_var($_GET['id'], FILTER_VALIDATE_INT);
                $sqlQuery = 'SELECT * FROM acteur WHERE id_acteur=:idActeur;';
                $acteurStatement = $mysqlClient->prepare($sqlQuery);
                $acteurStatement->execute(array(
                    ':idActeur' => $idActeur,
                ));
                $acteur = $acteurStatement->fetch();
                ?>
                    <h2><?php echo $acteur['acteur']; ?></h2>
        
                <p>
                    <img src="images/<?php echo $acteur['logo']; ?>" alt="Logo <?php echo $acteur['acteur']; ?>" />
                </p>
                <p><?php echo $acteur['description']; ?></p>

            </div>
            
        </section>
             <section>
        <article> <!--les commentaires-->
                 <h2>Commentaires</h2>

                <div id="commentaire">
                <?php $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);?>
                <button><a href="post.php?id=<?php echo $id?>" type="href" class="btn btn-primary">Nouveau<br />commentaire</a></button>

                <?php $votes = 1 ?>
                <button><a href="action.php?id=1&votes=<?php echo $votes?>"><img src="images/like.png" id=like/></a></button> (15) (<?= $votes ?>)
            
                <button><a href="action.php?id=2&votes=<?php echo $votes ?>"><img src="images/dislike.png" id=dislike /></a></button> (2) (<?= $votes ?>)
            
                </div>
            <div id="posts">

            <?php include('variables.php'); ?>
            <?php
                $sqlQuery = 'SELECT * FROM post LEFT JOIN account ON post.id_user = account.id_user WHERE id_acteur=:idActeur;';
                $queryStatement = $mysqlClient->prepare($sqlQuery);
                $queryStatement->execute(array(
                    ':idActeur' => $idActeur,
                ));
                $posts = $queryStatement->fetchAll();
                ?>
            <?php foreach($posts as $post) { ?>
            <?php /* print_r($post); */ ?>   
            <i><?php echo $post['username']; ?></i>
            <i><?php echo $post['prenom']; ?></i>
            <i><?php echo $post['date_add']; ?></i>
            <p><?php echo $post['post']; ?></p>
                <?php } ?>
        </div>
            
        </article>
            </section>



        <?php include('footer.php'); ?>
    
    </body>
</html>