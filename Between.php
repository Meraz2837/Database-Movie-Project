<!DOCTYPE html>
<html>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<head>
  <link rel="shortcut icon" type="image/png" href="Icons/Copy of Movie.png">
  <title>Moviebuzz - BETWEEN</title>
</head>
<body>

<h2>Movie Details</h2>

<table border="5">
  <tr>
    <td>Movie Code</td>
    <td>Country Code</td>
    <td>Director Code</td>
    <td>Budget</td>
    <td>Year</td>
    <td>IMDB Rating</td>
    <td>Runtime</td>
    <td>Movie Title</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here
$records = mysqli_query($db,"SELECT * FROM movie WHERE year BETWEEN 2015 AND 2019"); // fetch data from database
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
  <td><?php echo $data['movieId']; ?></td> 
    <td><?php echo $data['countryId']; ?></td>
    <td><?php echo $data['directorId']; ?></td>   
    <td><?php echo $data['budget']; ?></td>   
    <td><?php echo $data['year']; ?></td>   
    <td><?php echo $data['IMDBrating']; ?></td>   
    <td><?php echo $data['runtime']; ?></td>   
    <td><?php echo $data['title']; ?></td>   
  </tr>	
<?php
}
?>
</table>

</body>
</html>