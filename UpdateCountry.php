<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from country where countryId='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $Countrycode = $_POST['countryId'];
    $Countryname = $_POST['countryName'];
	
    $edit = mysqli_query($db,"update country set countryId='$Countrycode', countryName='$Countryname' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:UpdateCountryRecords.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "Error deleting record";
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="countryId" value="<?php echo $data['countryId'] ?>" placeholder="Enter Country Code" Required>
  <input type="text" name="countryName" value="<?php echo $data['countryName'] ?>" placeholder="Enter Country Name" Required>
  <input type="submit" name="update" value="Update">
</form>