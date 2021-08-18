<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit;
}
?>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "movie project");

// Check connection
if ($link === false) {
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$country_code = mysqli_real_escape_string($link, $_REQUEST['countryId']);
$country_name = mysqli_real_escape_string($link, $_REQUEST['countryName']);

// Attempt insert query execution
$sql = "INSERT INTO country (countryId, countryName) VALUES ('$country_code', '$country_name')";
if (mysqli_query($link, $sql)) {
  echo "Records added successfully.";
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/png" href="Icons/Copy of Movie.png">
  <link rel="stylesheet" href="Style.css">
  <title>Success</title>
</head>

<body class="text-white bg-dark">
  <div class="my-5">
    <a class="btn btn-danger" href="ShowCountryTable.php">View country?</a>
  </div>
  <!-- Footer -->
  <!-- Copyright -->
  <div class="text-white text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="https://www.facebook.com/mezbah.meraz/">Mazbaur Rashid (192-15-2837)</a>
  </div>
</body>

</html>