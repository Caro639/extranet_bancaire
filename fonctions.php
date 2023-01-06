// verifier post

<?php

function isValidPost(array $post): bool
{
    if (array_key_exists('is_enabled', $post)) {
        $isEnabled = $post['is_enabled'];
    } else {
        $isEnabled = false;
    }
    return $isEnabled;
}
//affiche nom date post une fois

function displayUsername(string $usernamePost, array $account): string
{
    for ($i = 0; $i < count($account); $i++) {
        $username = $account[$i];
        if ($usernamePost === $username['post']) {
            return $username['username'] . '(' . $username['post'] . ' (' . $username['date_add'];
        }
    }
}
?>

//boucle for pour un seul post par acteur
function
<?php for ($post = 0; $post <= 1; $post++) : ?>
    <?php echo $post[$post][0] . ' (' . $_POST[$post][1] . ')'; ?>
<?php endfor; ?>


<?php
if (isset($_POST['limit']) && is_numeric($_POST['limit'])) {
    $limit = (int) $_POST['limit'];
} else {
    $limit = 100;
}
?>


//fonction date ajout posts
<?php
$day = date('d');
$month = date('m');
$year = date('Y');


//affiche date au commentaire
echo 'posté le' . $day . '/' . $month . '/' . $year;
?>

//strlen calcul longueur chaine pr 1 ere phrase acteur

 var_dump(strlen(acteur));

$acteur = [
    'id_acteur' => '1',
    'description' => 'Formation&co est une association française présente sur tout le territoire.',

];
$length = strlen('description');

echo $length . PHP_EOL . $acteur;
?>