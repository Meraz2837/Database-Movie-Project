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
  <title>Moviebuzz - Update Movie</title>
</head>

<body>

  <h2>Country Details</h2>

  <table border="2">
    <tr>
      <td>Movie ID</td>
      <td>Country ID</td>
      <td>Director ID</td>
      <td>Budget</td>
      <td>Year</td>
      <td>IMDB Rating</td>
      <td>Runtime</td>
      <td>Title</td>
      <td>Edit</td>
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
        <td><a href="UpdateMovies.php?id=<?php echo $data['movieId']; ?>">Edit</a></td>
      </tr>
    <?php
    }
    ?>
  </table>

</body>

</html>