<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" type="image/png" href="Icons/Copy of Movie.png">
  <title>Moviebuzz - Movie</title>
</head>

<body style="background: #212529; color:white;">

<h2 align = "center">Movie Details</h2>

  <table align="center" border="5" BORDERCOLOR=WHITE>
      <tr border = "1" BORDERCOLOR=WHITE>
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

    $records = mysqli_query($db, "SELECT * FROM movie"); // fetch data from database

    while ($data = mysqli_fetch_array($records)) {
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