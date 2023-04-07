<?php

require "./Tietokanta-ohjelmointi-harjoitus/dbconnection.php";
$dbcon = createDbConnection();

$invoice = "invoice_id";

$sqlQuery = "ALTER TABLE invoice_items DROP COLUMN $invoice"; 
$statement = $dbcon->prepare($sqlQuery);
$statement->execute();