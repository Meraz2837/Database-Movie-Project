<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" type="image/png" href="Icons/Copy of Movie.png">
  <title>Moviebuzz - Update Country</title>
</head>

<body style="background: #212529; color:white;">

  <h2 align = "center">Country Details</h2>

  <div>
    <table align="center" border="5" BORDERCOLOR=WHITE>
      <tr border = "1" BORDERCOLOR=WHITE>
        <td>Country Code</td>
        <td>Country Name</td>
        <td>Update</td>
      </tr>

      <?php

      include "dbConn.php"; // Using database connection file here

      $records = mysqli_query($db, "SELECT * FROM country"); // fetch data from database

      while ($data = mysqli_fetch_array($records)) {
      ?>
        <tr>
          <td><?php echo $data['countryId']; ?></td>
          <td><?php echo $data['countryName']; ?></td>
          <td><a style="color: #dc3545;" href="UpdateCountry.php?id=<?php echo $data['countryId']; ?>">Update</a></td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>

</body>

</html>