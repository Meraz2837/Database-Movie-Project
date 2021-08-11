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
  <title>Moviebuzz - Director</title>
</head>

<body>

  <h2>Director Details</h2>

  <table border="2">
    <tr>
      <td>Director ID</td>
      <td>Director Name</td>
    </tr>

    <?php

    include "dbConn.php"; // Using database connection file here

    $records = mysqli_query($db, "SELECT * FROM director"); // fetch data from database

    while ($data = mysqli_fetch_array($records)) {
    ?>
      <tr>
        <td><?php echo $data['directorId']; ?></td>
        <td><?php echo $data['Director_name']; ?></td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>