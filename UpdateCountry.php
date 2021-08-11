<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from country where countryId='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $Countrycode = $_POST['countryId'];
    $Countryname = $_POST['countryName'];
	
    $edit = mysqli_query($db,"update country set countryId='$Countrycode', countryName='$Countryname' where countryId='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:UpdateCountryRecords.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($db);
    }    	
}
?>

<h3>Update Data</h3>
<p>We recommend you to change only country name not country code. Because You may find an error (Cannot delete or update a parent row: a foreign key constraint fails)</p>

<form method="POST">
  <input type="text" name="countryId" value="<?php echo $data['countryId'] ?>" placeholder="Enter Country Code" Required>
  <input type="text" name="countryName" value="<?php echo $data['countryName'] ?>" placeholder="Enter Country Name" Required>
  <input type="submit" name="update" value="Update">
</form>