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
  <title>Moviebuzz - Director Delete</title>
</head>

<body style="background: #212529; color:white;">

<h2 align = "center">Director Details</h2>

  <table align="center" border="5" BORDERCOLOR=WHITE>
      <tr border = "1" BORDERCOLOR=WHITE>
      <td>Director ID</td>
      <td>Director Name</td>
      <td>Delete</td>
    </tr>

    <?php

    include "dbConn.php"; // Using database connection file here

    $records = mysqli_query($db, "SELECT * FROM director"); // fetch data from database

    while ($data = mysqli_fetch_array($records)) {
    ?>
      <tr>
        <td><?php echo $data['directorId']; ?></td>
        <td><?php echo $data['Director_name']; ?></td>
        <td><a style="color: #dc3545;" href="DirectorDelete.php?id=<?php echo $data['directorId']; ?>">Delete</a></td>
      </tr>
    <?php
    }
    ?>
  </table>
  <!-- Copyright -->
</body>

</html>