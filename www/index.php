<html><body>
<h4>String Play</h4>
Add something to the database by typing it into the box below.<br>
<br>
<form method="post">
New String: <input name="newstring" type="text" />
<input type="submit" value="Add" />
<input type="submit" value="Delete All" name="delete" />
</form>

<?php

// DB variables
$servername = "docker.walker.home";
$database = "vibrato";
$username = "vibratotest";
$password = "MySuperSecureUserPassword";

// Connect to database
$mysqli = new mysqli("$servername", "$username", "$password", "$database");
if ($mysqli->connect_errno) {
    echo "Failed to connect to database" . "<br>";
    exit;
}

// Get inputs from HTML section above
$newstring = $_POST['newstring'];
// Check to see if newstring has been set to anything.
if (!empty($newstring)) {
    // Add string to DB. Error if not successfull.
    $sql = "INSERT INTO mystrings (string) VALUES ('$newstring')";
    if (!$mysqli->query($sql) === TRUE) {
        echo "Failed to add string to DB." . "<br>";
    }
}

$sql = "SELECT * FROM mystrings";
$result = $mysqli->query($sql);
while ($line = $result->fetch_assoc()) {
    echo $line["string"]. "<br>";
}

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM mystrings";
    if ($result = $mysqli->query($sql)) {
        header("Refresh:0");
    }
}

$mysqli->close();
$result->free();

?>
</body></html>
