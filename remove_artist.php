<?php

require "./Tietokanta-ohjelmointi-harjoitus/dbconnection.php";
$dbcon = createDbConnection();

$aristId = "artist_id";

try {
    $dbcon->beginTransaction();

    $statement = $dbcon->prepare("DELETE FROM artists WHERE artistId = $aristId");
    $statement->execute(array($artistId));

    $dbcon->commit();
} catch(Exception $e) {
    $dbcon->rollBack();
    echo $e->getMessage();
}