<?php

require "./Tietokanta-ohjelmointi-harjoitus/dbconnection.php";
$dbcon = createDbConnection();

$invoice = "invoice_id";

$sql = "ALTER TABLE invoice_items DROP COLUMN $invoice"; 
$dbcon->exec($sql);