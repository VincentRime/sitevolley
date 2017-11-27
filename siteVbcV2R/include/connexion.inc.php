<?php 
require_once 'inc.dtbase';
    
// Vérification des identifiants
$stmt = $cnn->prepare('SELECT * FROM tbladmin WHERE email = :email AND motdepasse = :motdepasse');
$stmt->execute(array(
    'email' => $email,
    'motdepasse' => $motdepasse));

$resultat = $stmt->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['email'] = $email;
    header ('location : Administration.php');
}








?>

