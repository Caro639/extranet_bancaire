<?php session_start(); ?>
<?php include_once('connexion.php'); ?>
<?php include('variables.php'); ?>
<?php
$isAllowedToEnter = "true";
function isAllowedToEnter(array $account) : bool
{
    if (array_key_exists('is_enabled', $account)) {
        $isEnabled = $account['is_enabled'];
    } else {
        $isEnabled = false;
    }
    return $isEnabled;
}

// si on a l'autorisation d'entrer
if ($isAllowedToEnter == "true") {
    echo "GBAF vous souhaite la bienvenue !";
    // instru à executer acces au site
}
    // si autorisation fausse alors
elseif ($isAllowedToEnter == "false") {
    echo "Veuillez-vous connecter !";
    // on execute le msg de se créer un compte
}
    // sinon la variable n'affiche ni oui ni non alors
else {
    echo "Veuillez-vous connecter ou créer votre compte, s'il vous plaît !";
}
?>


// verifier post
<?php

function isValidPost(array $post) : bool
{
    if (array_key_exists('is_enabled', $post)) {
        $isEnabled = $post['is_enabled'];
    } else {
        $isEnabled = false;
    }
    return $isEnabled;
}
//affiche nom date post

function displayUsername(string $usernamePost, array $account) : string
{
    for ($i = 0; $i < count($account); $i++) {
        $username = $account[$i];
        if ($usernamePost === $username['post']) {
            return $username['username'] . '(' . $username['post'] . ' (' . $username['date_add'];
        }
    }
}
?>

// boucle for pour un seul post par acteur 
    <ul>
<?php for ($post = 0; $post <= 1; $post++): ?>
    <li><?php echo $post[$post][0] . ' (' . $_POST[$post][1] . ')'; ?></li>
<?php endfor; ?>
    </ul>

//

//fonction date ajout posts
<?php
$day = date('d');
$month = date('m');
$year = date('Y');

$hour = date('H');
$minut = date('i');

//affiche date au commentaire
echo 'posté le' . $day . '/' . $month . '/' . $year . 'à' . $hour . 'h' . $minut;
?>

