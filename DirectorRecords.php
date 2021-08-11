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
        <td><a href="DirectorDelete.php?id=<?php echo $data['directorId']; ?>">Delete</a></td>
      </tr>
    <?php
    }
    ?>
  </table>
  <!-- Footer -->
  <!-- Copyright -->
  <div class="text-white text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="https://www.facebook.com/mezbah.meraz/">Mazbaur Rashid (192-15-2837)</a>
  </div>
</body>

</html>