<?php

$servername = "docker.walker.home";
$database = "vibrato";
$username = "vibratotest";
$password = "MySuperSecureUserPassword";

$mysqli = new mysqli('docker.walker.home', 'vibratotest', 'MySuperSecureUserPassword', 'vibrato');

$newstring = "alice";
$sql = "INSERT INTO mystrings (string) VALUES ('$newstring')";
if (!$mysqli->query($sql) === TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM mystrings";
$result = $mysqli->query($sql);
while ($line = $result->fetch_assoc()) {
    echo $line["string"]. "<br>";
}

$mysqli->close();

?>
