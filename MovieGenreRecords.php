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
  <title>Moviebuzz - Movie Genre Delete</title>
</head>
<body>

  <h2>Movie Genre Info</h2>

  <table border="2">
    <tr>
      <td>Movie ID</td>
      <td>Movie Genre Name</td>
      <td>Delete</td>
    </tr>

    <?php

    include "dbConn.php"; // Using database connection file here

    $records = mysqli_query($db, "SELECT * FROM moviegenre"); // fetch data from database

    while ($data = mysqli_fetch_array($records)) {
    ?>
      <tr>
        <td><?php echo $data['movieId']; ?></td>
        <td><?php echo $data['genreName']; ?></td>
        <td><a href="MovieGenreDelete.php?id=<?php echo $data['movieId']; ?>">Delete</a></td>
      </tr>
    <?php
    }
    ?>
  </table>

</body>

</html>