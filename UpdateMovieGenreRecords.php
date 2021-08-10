<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" type="image/png" href="Icons/Copy of Movie.png">
  <title>Moviebuzz - Update Movie Genre</title>
</head>

<body>

  <h2>Country Details</h2>

  <table border="2">
    <tr>
      <td>Movie ID</td>
      <td>Genre Name</td>
      <td>Edit</td>
    </tr>

    <?php

    include "dbConn.php"; // Using database connection file here

    $records = mysqli_query($db, "select * from moviegenre"); // fetch data from database

    while ($data = mysqli_fetch_array($records)) {
    ?>
      <tr>
        <td><?php echo $data['movieId']; ?></td>
        <td><?php echo $data['genreName']; ?></td>
        <td><a href="UpdateMovieGenre.php?id=<?php echo $data['movieId']; ?>">Edit</a></td>
      </tr>
    <?php
    }
    ?>
  </table>

</body>

</html>