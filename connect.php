
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>compte</title>
    </head>

    <body>
             <div id="bloc_page">
            
                <!-- header -->
            <?php include('header.php'); ?>
    
            <div id="compte">
            <p>
            <form method="post" action="submit_contact.php">
                <fieldset>
                    <h2><legend>Créez votre compte !</legend></h2>
                    <br />
                    <label for="nom">Votre nom :</label>
                    <input type="text" name="nom" id="nom" placeholder="nom" size="70" maxlength="40" />
                    <br />
                    <label for="prenom">Votre prénom :</label>
                    <input type="text" name="prenom" id="prenom"/>
                    <br />
                    <label for="username">Votre pseudo :</label>
                    <input type="text" name="username" id="username"/>
                    <br />
                    <label for="password">Votre mot de passe :</label>
                    <input type="password" name="pass" id="password"/>
                    <br />
                    <label for="question">Quelle est votre question secrète ?</label>
                    <input type="text" name="question" id="question"/>
                    <br />
                    <label for="reponse">Quelle est la réponse à votre question secrète ?</label>
                    <input type="text" name="reponse" id="reponse"/>
                    <br />
                    <input type="submit" value="Envoyer"/>
                </fieldset> 
            </form>

            </p>
            </div>
            <p><a href="index2.php" class="button">Page Accueil</a></p>
             <!-- footer -->
        <?php include('footer.php'); ?>
    </div>
    </body>
</html>