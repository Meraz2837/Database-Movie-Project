<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from tblemp where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $Countrycode = $_POST['countryId'];
    $Countryname = $_POST['countryName'];
	
    $edit = mysqli_query($db,"update country set fullname='$Countrycode', age='$Countryname' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:all_records.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="countryId" value="<?php echo $data['countryId'] ?>" placeholder="Enter Country Code" Required>
  <input type="text" name="countryName" value="<?php echo $data['countryName'] ?>" placeholder="Enter Country Name" Required>
  <input type="submit" name="update" value="Update">
</form>