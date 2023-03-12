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
            <h1><?php echo $acteur['acteur']; ?></h1>

            <p>
                <img src="images/<?php echo $acteur['logo']; ?>" alt="Logo <?php echo $acteur['acteur']; ?>" />
            </p>
            <p><?php echo $acteur['description']; ?></p>

        </div>

    </section>
    <section>
        <article> <!--les commentaires-->
            <h3>Commentaires</h3>

            <div id="commentaire">

                    <a href="index.php" type="href" class="btn btn-primary"><img src="images/retour.png" alt="retour" id="retour"/></a>

                <?php
                $idActeur = filter_var($_GET['id'], FILTER_VALIDATE_INT);
                $id_vote = filter_var($_GET['id'], FILTER_VALIDATE_INT);
                $sqlQuery = 'SELECT vote FROM vote LEFT JOIN account ON vote.id_user = account.id_user WHERE id_acteur=:idActeur';
                $queryStatement = $mysqlClient->prepare($sqlQuery);
                $queryStatement->execute(array(
                    ':idActeur' => $idActeur,
                    ));
                $row = $queryStatement -> fetchAll();
                ?>
                <?php $id = filter_var($_GET['id'], FILTER_VALIDATE_INT); ?>
                    <a href="action.php?id=<?php echo $id ?>"><img src="images/like.png" id=like /></a>(<? echo (count($row)) ?>)
    
                    <a href="action.php?id=<?php echo $id ?>"><img src="images/dislike.png" id=dislike /></a>(<? echo (count($row)) ?>)

                    <?php $id = filter_var($_GET['id'], FILTER_VALIDATE_INT); ?>
                    <a href="post.php?id=<?php echo $id ?>" type="href" class="btn btn-primary" id="new">Nouveau<br />commentaire</a>
                        
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
            
                <?php foreach ($posts as $post) { ?>
                    <?php /* print_r($post); */ ?>
                    <p><i><?php echo $post['username']; ?></i>
                    <i><?php echo $post['prenom']; ?></i>
                    <i><?php echo $post['post']; ?></i>
                    <i><?php echo $post['date_add']; ?></i><br /></p>
                    
                <?php } ?>
            
            </div>

        </article>
    </section>



    <?php include('footer.php'); ?>

</body>

</html>