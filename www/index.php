<html><body>
<h4>String Play</h4>
Add something to the database by typing it into the box below.<br>
<br>
<form method="post">
New String: <input name="newstring" type="text" />
<input type="submit" value="Add" />
</form>

<?php

$servername = "docker.walker.home";
$database = "vibrato";
$username = "vibratotest";
$password = "MySuperSecureUserPassword";

$mysqli = new mysqli('docker.walker.home', 'vibratotest', 'MySuperSecureUserPassword', 'vibrato');

$newstring = $_POST['newstring'];
if (!empty($newstring)) {
    $sql = "INSERT INTO mystrings (string) VALUES ('$newstring')";
    if (!$mysqli->query($sql) === TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT * FROM mystrings";
$result = $mysqli->query($sql);
while ($line = $result->fetch_assoc()) {
    echo $line["string"]. "<br>";
}

$mysqli->close();
$result->free();

?>
</body></html>
