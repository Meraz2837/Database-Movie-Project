<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Country Details</h2>

<table border="2">
  <tr>
    <td>Director ID</td>
    <td>Director Name</td>
    <td>Edit</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from director"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['directorId']; ?></td>
    <td><?php echo $data['Director_name']; ?></td>  
    <td><a href="UpdateDirector.php?id=<?php echo $data['directorId']; ?>">Edit</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>