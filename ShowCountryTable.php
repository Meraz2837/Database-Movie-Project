<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM country";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Country Code</th><th>Country Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["countryId"]."</td><td>".$row["countryName"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>