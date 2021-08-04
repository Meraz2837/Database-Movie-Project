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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="Style.css">
  <title>Show Movie</title>
</head>
<body class="text-white">
  
</body>
</html>