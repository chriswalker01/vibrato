<?php

$servername = "docker.walker.home";
$database = "vibrato";
$username = "vibratotest";
$password = "MySuperSecureUserPassword";

$mysqli = new mysqli("$servername", "$username", "$password", "$database");

$sql = "SELECT * FROM mystrings";
$result = $mysqli->query($sql);
$line = $result->fetch_assoc();
echo $line['string'];

$mysqli->close();

?>
