<?php
require_once 'include/inc.dtbase';
$cnn = getConnexion('sitevolley');

 function Modifier($table,$numero,$change) {
        try {
            $stmt = $cnn->prepare('UPDATE :table SET titre= :change WHERE numero = :numero');
            $stmt->execute(array(
                'table' => $table,
                'numero' => $numero,
                'change' => $change ));
        //    return $dbh;
        } catch (PDOException $e) {
            echo 'Connection faildes: ', $e->getMessage();
        }
    }
    ?>

