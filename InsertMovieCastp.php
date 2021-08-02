<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "movie project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$MovieCastID = mysqli_real_escape_string($link, $_REQUEST['moviecastId']);
$MovieID = mysqli_real_escape_string($link, $_REQUEST['movieId']);
$Cast_name = mysqli_real_escape_string($link, $_REQUEST['Castname']);
// Attempt insert query execution
$sql = "INSERT INTO moviecast (moviecastId, movieId, Castname) VALUES ('$MovieCastID', '$MovieID', '$Cast_name')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>