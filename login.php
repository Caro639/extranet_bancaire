
<?php include('variables.php'); ?>

<?php
$postData = $_POST;
$postData = $account;
if (isset($postData['username']) && isset($postData['password'])) {
    foreach ($accounts as $account) {
        if (
            $account['username'] === $postData['username'] &&
            $account['password'] === $postData['password']
        ) {
            $loggedAccount = [
                'username' => $account['username'],
                ];

                /**
                 * cookie 
                 */
                setcookie(
                    'LOGGED_ACCOUNT',
                    $loggedAccount['username'],
                    [
                        'expires' => time() + 365*24*3600,
                        'secure' => true,
                        'httponly' => true,
                    ]
                    );

                    $_SESSION['LOGGED_ACCOUNT'] = $loggedAccount['username'];
                } else {
                     $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                        $postData['username'],
                        $postData['password']
                    );
            }
        }

    }

    
    

    // si cookie present ou session
    if (isset($_COOKIE['LOGGED_ACCOUNT']) || isset($_SESSION['LOGGED_ACCOUNT'])) {
        $loggedAccount = [
            'username' => $_COOKIE['LOGGED_ACCOUNT'] ?? $_SESSION['LOGGED_ACCOUNT'],
        ];
    }
?>


//sinon se connecter

<?php if(!isset($loggedAccount)): ?>
    <form action="index.php" method="post">

    <?php if(isset($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo ($errorMessage); ?>
        </div>
        <?php endif; ?>
        <div class="mb-3">
            <label for="username" class="form-label">Pseudo</label>
            <input type="username" class="form-control" id="username" name="username" aria-describedby="username-help" placeholder="username">
            <div id="username-help" class="form-text">Votre pseudo est utilisé pour créer votre compte.
        </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    <?php else: ?>
        <div class="alert alert-success" role="alert">
            GBAF <?php echo $loggedAccount['username']; ?> vous souhaite la bienvenue !
        </div>
<?php endif; ?>

// sinin creer un compte
<?php if(isset($errorMessage)) : ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $errorMessage; ?>
    </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="username" class="form-label">Pseudo</label>
        <input type="username" class="form-control" id="username" name="username" aria-describedby="username-help" placeholder="username">
        <div id="username-help" class="form-text">Votre pseudo est utilisé pour créer votre compte.
    </div>
        </div>
        <div class="mb=3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="prenom" class="form-control" id="prenom" name="prenom">
        </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="nom" class="form-control" id="nom" name="nom" >
            </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                    <div class="mb-3">
                        <label for="question" class="form-label">Veuillez choisir une question secrète</label>
                        <input type="question" class="form-control" id="question" name="question">
                    </div>
                        <div class="mb-3">
                            <label for="reponse" class="form-label">Quelle est la réponse</label>
                            <input type="reponse" class="form-control" id="reponse" name="reponse">
                        </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
</form>



