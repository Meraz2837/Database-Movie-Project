<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "movie project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$country_code = mysqli_real_escape_string($link, $_REQUEST['directorId']);
$country_name = mysqli_real_escape_string($link, $_REQUEST['Director_name']);

// Attempt insert query execution
$sql = "INSERT INTO director (directorId, Director_name) VALUES ('$country_code', '$country_name')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>