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