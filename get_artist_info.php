<?php

require "./Tietokanta-ohjelmointi-harjoitus/dbconnection.php";
$dbcon = createDbConnection();

$artists = array();

$artist = new stdClass();

$sql = "SELECT Name FROM artists";
$statement = $dbcon->prepare($sqlQuery);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

$artist->name = $rows;



$sql = "SELECT * FROM albums";
$statement = $dbcon->prepare($sqlQuery);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

$artist = array($rows);



$artists[] = $artist;

$json = json_encode($artists);

header("Content-type: application/json");
echo $json;