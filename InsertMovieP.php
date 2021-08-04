<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "movie project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Movie_ID = mysqli_real_escape_string($link, $_REQUEST['movieId']);
$Country_ID = mysqli_real_escape_string($link, $_REQUEST['countryId']);
$Director_ID = mysqli_real_escape_string($link, $_REQUEST['directorId']);
$Budget = mysqli_real_escape_string($link, $_REQUEST['budget']);
$Year = mysqli_real_escape_string($link, $_REQUEST['year']);
$IMDB_Rating = mysqli_real_escape_string($link, $_REQUEST['IMDBrating']);
$Run_Time = mysqli_real_escape_string($link, $_REQUEST['runtime']);
$Name = mysqli_real_escape_string($link, $_REQUEST['title']);

// Attempt insert query execution
$sql = "INSERT INTO movie (movieId, countryId, directorId, budget, year, IMDBrating, runtime, title) VALUES ('$Movie_ID', '$Country_ID', '$Director_ID', '$Budget', '$Year', '$IMDB_Rating', '$Run_Time', '$Name')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="Style.css">
  <title>Success</title>
</head>
<body class="text-white bg-dark">
  
</body>
</html>