<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Movie Cast Details</h2>

<table border="2">
  <tr>
    <td>Movie Cast ID</td>
    <td>Movie ID</td>
    <td>Name</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from moviecast"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['moviecastId']; ?></td>
    <td><?php echo $data['movieId']; ?></td> 
    <td><?php echo $data['Castname']; ?></td>   
  </tr>	
<?php
}
?>
</table>

</body>
</html>