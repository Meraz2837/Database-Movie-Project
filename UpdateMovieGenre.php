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

$qry = mysqli_query($db,"SELECT * FROM moviegenre WHERE movieId='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $MovieId = $_POST['movieId'];
    $GnrName = $_POST['genreName'];
	
    $edit = mysqli_query($db,"UPDATE moviegenre SET movieId='$MovieId', genreName='$GnrName' WHERE movieId='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:UpdateMovieGenreRecords.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($db);
    }    	
}
?>

<h3>Update Data</h3>
<p>We recommend you to change only genre name. Because other fields are foreign key. So you may find an error (Cannot delete or update a parent row: a foreign key constraint fails)</p>

<form method="POST">
  <input type="text" name="movieId" value="<?php echo $data['movieId'] ?>" placeholder="Enter Movie ID" Required>
  <input type="text" name="genreName" value="<?php echo $data['genreName'] ?>" placeholder="Enter Genre Name" Required>
  <input type="submit" name="update" value="Update">
</form>