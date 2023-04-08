<?php

require "./Tietokanta-ohjelmointi-harjoitus/dbconnection.php";
$dbcon = createDbConnection();

/*
$playlist = "playlist_id";

$sql = "SELECT Name, Composer FROM playlists, playlist_track, tracks WHERE PlaylistId = $playlist, playlists.PlayListId = playlist_track.PlayListId, playlist_track.TrackId = tracks.TrackId";
$statement = $dbcon->prepare($sqlQuery);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row){
    echo $rows["Name"]."<br>".$rows["Composer"];
}
*/


$playlist = "playlist_id";

$sql = "SELECT * FROM playlists WHERE PlaylistId = $playlist";
$statement1 = $dbcon->prepare($sqlQuery);
$statement1->execute();

$playlistsRow = $statement1->fetch(PDO::FETCH_ASSOC);
$PlayListId = $playlistsRow["PlayListId"];



$sql = "SELECT * FROM playlist_track WHERE PlaylistId = $PlayListId";
$statement2 = $dbcon->prepare($sqlQuery);
$statement2->execute();

$playlist_trackRow = $statement2->fetch(PDO::FETCH_ASSOC);
$TrackId = $playlist_trackRow["TrackId"];



$sql = "SELECT * FROM tracks WHERE TrackId = $TrackId";
$statement3 = $dbcon->prepare($sqlQuery);
$statement3->execute();

$ComposerRow = $statement3->fetch(PDO::FETCH_ASSOC);
$Composer = $ComposerRow["Composer"];



$rows = $statement1->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row){
    echo "<h2>".$playlistsRow["Name"]."</h2>"."<br>".$playlist_trackRow["Composer"]."<br>";
}