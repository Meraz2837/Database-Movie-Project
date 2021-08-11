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
  <title>Moviebuzz - Movie Genre</title>
</head>

<body style="background: #212529; color:white;">

<h2 align = "center">Genre Details</h2>

  <table align="center" border="5" BORDERCOLOR=WHITE>
      <tr border = "1" BORDERCOLOR=WHITE>
      <td>Movie ID</td>
      <td>Movie Genre Name</td>
    </tr>

    <?php

    include "dbConn.php"; // Using database connection file here

    $records = mysqli_query($db, "SELECT * FROM moviegenre"); // fetch data from database

    while ($data = mysqli_fetch_array($records)) {
    ?>
      <tr>
        <td><?php echo $data['movieId']; ?></td>
        <td><?php echo $data['genreName']; ?></td>
      </tr>
    <?php
    }
    ?>
  </table>

</body>

</html>