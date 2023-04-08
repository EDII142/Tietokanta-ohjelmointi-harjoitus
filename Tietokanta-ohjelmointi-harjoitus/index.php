<?php

require "dbconnection.php";
$dbcon = createDbConnection();

require "../remove_invoice.php";
require "../get_playlist.php";
require "../remove_artist.php";
require "../get_artist_info.php";
require "../add_artist_info.php";