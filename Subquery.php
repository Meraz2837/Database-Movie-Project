<!DOCTYPE html>
<html>
<head>
  <title>Moviebuzz - Bangladesh</title>
</head>
<body>

<h2>Movies Released in Bangladesh</h2>

<table border="2">
  <tr>
    <td>Movie Name</td>
    <td>Country</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"SELECT countryName, title FROM country, movie WHERE movie.countryId = country.countryId AND country.countryId = (SELECT countryId FROM country WHERE countryName = 'Bangladesh')"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['countryName']; ?></td>
    <td><?php echo $data['title']; ?></td>   
  </tr>	
<?php
}
?>
</table>
