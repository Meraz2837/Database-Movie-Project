<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Style.css">
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="image/png" href="Icons/Copy of Movie.png">
    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Moviebuzz - ER Diagram</title>
</head>

<body class="bg-white">
    <section>
        <div class="container text-center my-5">
            <h1>ER Diagram</h1>
            <p>Where we just started</p>
            <hr class="text-danger">
            <img class="img-fluid" src="image/ER Moviebuzz.png" alt="">
            <a class="btn btn-danger mt-2" href="index.php">Back to home</a>
        </div>
    </section>
</body>

</html>