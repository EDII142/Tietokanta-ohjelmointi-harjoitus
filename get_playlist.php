<?php

require "./Tietokanta-ohjelmointi-harjoitus/dbconnection.php";
$dbcon = createDbConnection();

$playlist = "playlist_id";

$Name = "SELECT Name FROM playlists WHERE $playlist = $playlist";
$Composer = "SELECT Composer FROM tracks WHERE $playlist = $playlist";

echo $Name. $Composer;