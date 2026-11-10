<?php

$host = "localhost";
$username = "adnan";
$password = "genji0804";
$database = "HGYmarket";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Databasanslutningen misslyckades: " . mysqli_connect_error());
}

?>
