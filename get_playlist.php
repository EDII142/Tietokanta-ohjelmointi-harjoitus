<?php

require "./Tietokanta-ohjelmointi-harjoitus/dbconnection.php";
$dbcon = createDbConnection();

$playlist = "playlist_id";

$sql = "SELECT Name, Composer FROM playlists, playlist_track, tracks WHERE PlaylistId = $playlist, playlists.PlayListId = playlist_track.PlayListId, playlist_track.TrackId = tracks.TrackId";
$statement = $dbcon->prepare($sqlQuery);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row){
    echo $row["Name"]."<br>".["Composer"];
}