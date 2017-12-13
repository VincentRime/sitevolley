<?php
    require_once 'include/inc.dtbase';
    $cnn = getConnexion('sitevolley');
    var_dump($_GET['tbl']);
    if (isset($_GET['numero'])){
        $numero = $_GET['numero'];
        $tbl = $_GET['tbl'];

        $stmt = $cnn->prepare('DELETE FROM :tbl where numero = :no');
        $stmt->bindvalue(':no', $numero, PDO::PARAM_INT);
        $stmt->bindvalue(':tbl', $tbl, PDO::PARAM_INT);
        $stmt->execute();

        header("Location: Administration.php");
        die();
    } else {
        echo 'erreur';
    }
?>
