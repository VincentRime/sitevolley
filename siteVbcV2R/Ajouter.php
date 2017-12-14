<?php
function Ajouter($table,$numero,$change) {
       try {
           $stmt = $cnn->prepare('INSERT INTO :table VALUES titre= :change WHERE numero = :numero');
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
