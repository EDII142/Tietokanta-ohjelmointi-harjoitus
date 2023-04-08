<?php

require "./Tietokanta-ohjelmointi-harjoitus/dbconnection.php";
$dbcon = createDbConnection();

if(!isset($_POST["Name"]) || !isset($_POST["Album"])){
    echo "You're missing a parameter";
    exit;
}

$Name = $_POST['Name'];

$sql = "INSERT INTO artists VALUES (, $Name)";
$statement = $dbcon->prepare($sqlQuery);
$statement->execute();

$Album = $_POST['Album'];

$sql = "INSERT INTO albums VALUES (, $Album)";
$statement = $dbcon->prepare($sqlQuery);
$statement->execute();