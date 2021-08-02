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

$sql = "SELECT * FROM movie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Movie ID</th><th>Country ID</th><th>Director ID</th><th>Budget</th><th>Year</th><th>IMDB Rating</th><th>Runtime</th><th>Title</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["movieId"]."</td><td>".$row["countryId"]."</td><td>".$row["directorId"]."</td><td>".$row["budget"]."</td><td>".$row["year"]."</td><td>".$row["IMDBrating"]."</td><td>".$row["runtime"]."</td><td>".$row["title"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>