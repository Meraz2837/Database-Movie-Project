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

$qry = mysqli_query($db,"SELECT * FROM movie WHERE movieId='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $movieID = $_POST['movieId'];
    $CountryID = $_POST['countryId'];
    $DirectorID = $_POST['directorId'];
    $Budget = $_POST['budget'];
    $Year = $_POST['year'];
    $IMDBRating = $_POST['IMDBrating'];
    $Runtime = $_POST['runtime'];
    $Title = $_POST['title'];
	
    $edit = mysqli_query($db,"update movie set movieId='$movieID', countryId='$CountryID', directorId='$DirectorID', budget='$Budget', year='$Year', IMDBrating='$IMDBRating', runtime='$Runtime', title='$Title' where movieId='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:UpdateMovieRecords.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($db);
    }    	
}
?>

<h3>Update Data</h3>
<p>We recommend you not to change Movie ID, Country ID, Director ID. Because You may find an error (Cannot delete or update a parent row: a foreign key constraint fails)</p>

<form method="POST">
  <input type="text" name="movieId" value="<?php echo $data['movieId'] ?>" placeholder="Enter Movie ID" Required>
  <input type="text" name="countryId" value="<?php echo $data['countryId'] ?>" placeholder="Enter Country ID" Required>
  <input type="text" name="directorId" value="<?php echo $data['directorId'] ?>" placeholder="Enter Director ID" Required>
  <input type="text" name="budget" value="<?php echo $data['budget'] ?>" placeholder="Enter Budget" Required>
  <input type="text" name="year" value="<?php echo $data['year'] ?>" placeholder="Enter Year" Required>
  <input type="text" name="IMDBrating" value="<?php echo $data['IMDBrating'] ?>" placeholder="Enter IMDB Rating" Required>
  <input type="text" name="runtime" value="<?php echo $data['runtime'] ?>" placeholder="Enter Runtime" Required>
  <input type="text" name="title" value="<?php echo $data['title'] ?>" placeholder="Enter Title" Required>
  
  <input type="submit" name="update" value="Update">
</form>