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

$qry = mysqli_query($db,"select * from director where directorId='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $Countrycode = $_POST['directorId'];
    $Countryname = $_POST['Director_name'];
	
    $edit = mysqli_query($db,"UPDATE director SET directorId='$Countrycode', Director_name='$Countryname' WHERE directorId='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:UpdateDirectorRecords.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($db);
    }    	
}
?>

<h3>Update Data</h3>
<p>We recommend you to change only Director Name not Director ID. Because You may find an error (Cannot delete or update a parent row: a foreign key constraint fails)</p>

<form method="POST">
  <input type="text" name="directorId" value="<?php echo $data['directorId'] ?>" placeholder="Enter Director ID" Required>
  <input type="text" name="Director_name" value="<?php echo $data['Director_name'] ?>" placeholder="Enter Director Name" Required>
  <input type="submit" name="update" value="Update">
</form>