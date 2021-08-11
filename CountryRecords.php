<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" type="image/png" href="Icons/Copy of Movie.png">
  <title>Moviebuzz - Country</title>
</head>
<body>

  <h2>Country</h2>

  <table border="2">
    <tr>
      <td>Country Code</td>
      <td>Country Name</td>
      <td>Delete</td>
    </tr>

    <?php

    include "dbConn.php"; // Using database connection file here

    $records = mysqli_query($db, "SELECT * FROM country"); // fetch data from database

    while ($data = mysqli_fetch_array($records)) {
    ?>
      <tr>
        <td><?php echo $data['countryId']; ?></td>
        <td><?php echo $data['countryName']; ?></td>
        <td><a href="CountryDelete.php?id=<?php echo $data['countryId']; ?>">Delete</a></td>
      </tr>
    <?php
    }
    ?>
  </table>
  <!-- Footer -->
  <!-- Copyright -->
</body>

</html>