<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/png" href="Icons/Copy of Movie.png">
  <title>Moviebuzz - Average</title>
</head>
<body>

<h2>Average IMDB Rating</h2>

<table border="2">
  <tr>
    <td>AVG</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"SELECT AVG (IMDBrating) FROM movie"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['AVG (IMDBrating)']; ?></td>
  </tr>	
<?php
}
?>
</table>
