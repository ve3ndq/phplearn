<?php
phpinfo();


$servername = "localhost";
$username = "pi";
$password = "raspberry";
$dbname = "temper";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT temp,datetime,location FROM temper";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "temp: " . $row["temp"]. " - date: " . $row["datetime"]. " location " . $row["location"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
