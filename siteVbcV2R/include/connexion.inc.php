<?php 
require_once 'inc.dtbase';
$cnn = getConnexion('sitevolley');

var_dump($_POST);
$email = $_POST['username'];
$motdepasse = $_POST['password'];
// Vérification des identifiants
$stmt = $cnn->prepare('SELECT numero FROM tbladmin WHERE email = :email AND motdepasse = :motdepasse');
$stmt->execute(array(
    'email' => $email,
    'motdepasse' => $motdepasse));

$resultat = $stmt->fetch();

if (!$resultat)
{
    header ('Location: ../connexion.php');
    
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['email'] = $email; 
    header ('Location: ../Administration.php');
}








?>

