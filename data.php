<?php
$servername = "localhost";
$username = "USERNAME";
$password = "PASSWORD";
$dbname = "DATABASE";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COLUMNNAME1, COLUMNNAME2, COLUMNNAME3 FROM TABLENAME";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> One: ". $row["COLUMNNAME1"]. " - Two: ". $row["COLUMNNAME2"]. " - Three: ". $row["COLUMNNAME3"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
