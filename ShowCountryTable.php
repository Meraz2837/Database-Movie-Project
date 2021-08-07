<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Country</h2>

<table border="2">
  <tr>
    <td>Country Code</td>
    <td>Country Name</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from country"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['countryId']; ?></td>
    <td><?php echo $data['countryName']; ?></td>   
  </tr>	
<?php
}
?>
</table>
<!-- Footer -->
  <!-- Copyright -->
</body>
</html>