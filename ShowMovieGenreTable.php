<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Movie Genre Info</h2>

<table border="2">
  <tr>
    <td>Movie ID</td>
    <td>Movie Genre Name</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from moviegenre"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['movieId']; ?></td>
    <td><?php echo $data['genreName']; ?></td>   
  </tr>	
<?php
}
?>
</table>

</body>
</html>