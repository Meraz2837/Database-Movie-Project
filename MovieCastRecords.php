<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/png" href="Icons/Copy of Movie.png">
  <title>Moviebuzz - Moviecast Delete</title>
</head>
<body>
  <h2>Movie Cast Details</h2>
  <table border="2">
    <tr>
      <td>Movie Cast ID</td>
      <td>Movie ID</td>
      <td>Name</td>
      <td>Delete</td>
    </tr>

    <?php

    include "dbConn.php"; // Using database connection file here

    $records = mysqli_query($db, "SELECT * FROM moviecast"); // fetch data from database

    while ($data = mysqli_fetch_array($records)) {
    ?>
      <tr>
        <td><?php echo $data['moviecastId']; ?></td>
        <td><?php echo $data['movieId']; ?></td>
        <td><?php echo $data['Castname']; ?></td>
        <td><a href="MovieCastDelete.php?id=<?php echo $data['moviecastId']; ?>">Delete</a></td>
      </tr>
    <?php
    }
    ?>
  </table>

</body>

</html>