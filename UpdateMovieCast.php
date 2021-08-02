<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from moviecast where moviecastId='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $Moviecastid = $_POST['moviecastId'];
    $Movieid = $_POST['movieId'];
    $Castname = $_POST['Castname'];
	
    $edit = mysqli_query($db,"update moviecast set moviecastId = '$Moviecastid', movieId='$Movieid' , Castname='$Castname' where moviecastId='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:UpdateMovieCastRecords.php"); // redirects to all records page
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
  <input type="text" name="moviecastId" value="<?php echo $data['moviecastId'] ?>" placeholder="Enter Movie Cast ID" Required>
  <input type="text" name="movieId" value="<?php echo $data['movieId'] ?>" placeholder="Enter Movie ID" Required>
  <input type="text" name="Castname" value="<?php echo $data['Castname'] ?>" placeholder="Enter Cast Name" Required>
  <input type="submit" name="update" value="Update">
</form>