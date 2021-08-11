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
  <title>Moviebuzz - Subquery (Bangladesh)</title>
</head>

<body>

  <h2>Movies Released in Bangladesh</h2>

  <table border="5">
    <tr>
      <td>Movie Name</td>
      <td>Country</td>
    </tr>

    <?php

    include "dbConn.php"; // Using database connection file here

    $records = mysqli_query($db, "SELECT countryName, title FROM country, movie WHERE movie.countryId = country.countryId AND country.countryId = (SELECT countryId FROM country WHERE countryName = 'Bangladesh')"); // fetch data from database

    while ($data = mysqli_fetch_array($records)) {
    ?>
      <tr>
        <td><?php echo $data['countryName']; ?></td>
        <td><?php echo $data['title']; ?></td>
      </tr>
    <?php
    }
    ?>
  </table>