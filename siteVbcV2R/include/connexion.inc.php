<?php 
var_dump($_POST);
require_once 'inc.dtbase';
$cnn = getConnexion('sitevolley');

// Vérification des identifiants
$stmt = $cnn->prepare('SELECT numero FROM tbladmin WHERE email = :email AND motdepasse = :motdepasse');
$stmt->execute(array(
    'email' => $email,
    'motdepasse' => $motdepasse));

var_dump($motdepasse);
$resultat = $stmt->fetch();
var_dump($resultat);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['email'] = $email;
    header ('location : ./Administration.php');
}








?>

