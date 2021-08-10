<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/png" href="Icons/Copy of Movie.png">
  <title>Moviebuzz - Movie Delete</title>
</head>
<body>
  <h2>Movie Details</h2>
  <table border="2">
    <tr>
      <td>Movie Code</td>
      <td>Country Code</td>
      <td>Director Code</td>
      <td>Budget</td>
      <td>Year</td>
      <td>IMDB Rating</td>
      <td>Runtime</td>
      <td>Movie Title</td>
      <td>Delete</td>
    </tr>

    <?php

    include "dbConn.php"; // Using database connection file here

    $records = mysqli_query($db, "select * from movie"); // fetch data from database

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
        <td><a href="MovieDelete.php?id=<?php echo $data['movieId']; ?>">Delete</a></td>
      </tr>
    <?php
    }
    ?>
  </table>

</body>

</html>