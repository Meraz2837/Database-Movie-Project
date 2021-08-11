<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
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
  <title>Moviebuzz</title>
  <style>
    body {
      font-family: Arail, sans-serif;
    }

    /* Formatting search box */
    .search-box {
      width: 300px;
      position: relative;
      display: inline-block;
      font-size: 14px;
    }

    .search-box input[type="text"] {
      height: 32px;
      padding: 5px 10px;
      border: 1px solid #CCCCCC;
      font-size: 14px;
    }

    .result {
      color: white;
      background: #dc3545;
      position: absolute;
      z-index: 999;
      top: 100%;
      left: 0;
      transition: 0.6s ease;
    }

    .search-box input[type="text"],
    .result {
      width: 100%;
      box-sizing: border-box;
    }

    /* Formatting result items */
    .result p {
      margin: 0;
      padding: 7px 10px;
      border: 1px solid white;
      border-top: none;
      cursor: pointer;
    }

    .result p:hover {
      color: #000000;
      background: #f2f2f2;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.search-box input[type="text"]').on("keyup input", function() {
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if (inputVal.length) {
          $.get("backend-search.php", {
            term: inputVal
          }).done(function(data) {
            // Display the returned data in browser
            resultDropdown.html(data);
          });
        } else {
          resultDropdown.empty();
        }
      });

      // Set search input value on click of result item

      $(document).on("click", ".result p", function() {
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
      });
    });
  </script>
</head>

<body class="bg-dark">
  <nav style="background-color: rgba(0, 0, 0, 0.2) !important;" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="Homepage.php"><img class="img-fluid icon" src="Icons/Copy of Movie.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-danger" aria-current="page" href="Homepage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ShowDB.php">Show Database</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="AddTableOptions.php">Add to Database</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="UpdateTableOptions.php">Update Database</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="DeleteTableOptions.php">Delete From Database</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="SQLOperation.php">SQL Operations</a></li>
              <li><a class="dropdown-item" href="AboutDeveloper.php">About Developer</a></li>
            </ul>
          </li>


        </ul>
        <div class="search-box">
          <input type="text" autocomplete="off" placeholder="Search movie" />
          <div class="result"></div>
        </div>
        <div class="nav-item dropdown text white">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="img-fluid" style="width: 40px;" src="Icons/Profile.png" alt="PP">
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
            <hr>
            <li>
              <h5 class="text-center text-white">Mazbaur Rashid</h5>
            </li>
            <hr class="text-white">
            <li><a class="dropdown-item" href="logout.php">Log out</a></li>
            <li><a class="dropdown-item" href="reset-password.php">Reset Password</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Image Careosal -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Image/1.png" class="d-block w-100" alt="MovieImage1">
      </div>
      <div class="carousel-item">
        <img src="Image/2.png" class="d-block w-100" alt="MovieImage1">
      </div>
      <div class="carousel-item">
        <img src="Image/3.png" class="d-block w-100" alt="MovieImage1">
      </div>
      <div class="carousel-item">
        <img src="Image/4.png" class="d-block w-100" alt="MovieImage1">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <div class="container bg-dark">
    <div class="row">
      <div style="padding:39% 0; padding-right:20px; border-right: 5px solid #ccc;" class="col-md-6 text-white">
        <h1 class="text-danger">Welcome</h1>
        <h3>To the Biggest Movie Server</h3>
        <h5>By Mazbaur Rashid (192-15-2837)</h5>
      </div>
      <div class="col-md-6">
        <div>
          <h3 style="padding-top: 23%;" class="text-white text-center">You can do the Following with the Database</h3>
          <ul class="list text-center Button">
            <li>
              <a class="btn btn-danger mt-5" href="ShowDB.php">Show Database</a>
            </li>
            <li>
              <a class="btn btn-danger mt-5" href="AddTableOptions.php">Add to Database</a>
            </li>
            <li>
              <a class="btn btn-danger mt-5" href="UpdateTableOptions.php">Update Database</a>
            </li>
            <li>
              <a class="btn btn-danger mt-5" href="DeleteTableOptions.php">Delete From Database</a>
            </li>
            <li>
              <a class="btn btn-danger mt-5" href="SQLOperation.php">SQL Operations</a>
            </li>
            <li>
              <a class="btn btn-danger mt-5" href="AboutDeveloper.php">About Developer</a>
            </li>
          </ul>
          <div style="text-align: right; padding:20% 47.7%">
            <a class="btn text-danger" href="logout.php">Log out</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <section>
    <div style="background-color: rgba(0, 0, 0, 0.2);" class="Footer">
      <div class="container">
        <div class="row py-5 text-white">
          <div class="col-lg-3 col-md-12 col-12">
            <img class="img-fluid" src="Icons/Foot.png" alt="Footer Img">
            <p>
              Moviebuzz is an online movie information platform where you can find movie details easily. A project designed for learning purposes. This project is under Database Management System Lab.
            </p>
          </div>
          <div class="col-lg-3 col-md-12 col-12">
            <h4 class="mx-4">Important Links</h4>
            <ul style="list-style-type: none;" class="mt-2 text-danger">
              <li class="mt-2"><a class="text-danger" href="ShowDB.php">View</a></li>
              <li class="mt-2"><a class="text-danger" href="AddTableOptions.php">Insert</a></li>
              <li class="mt-2"><a class="text-danger" href="UpdateTableOptions.php">Update</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 col-12">
            <h4 class="mx-4">Important Links</h4>
            <ul style="list-style-type: none;" class="mt-2">
              <li class="mt-2"><a class="text-danger" href="DeleteTableOptions.php">Delete</a></li>
              <li class="mt-2"><a class="text-danger" href="SQLOperation.php">SQL Operations</a></li>
              <li class="mt-2"><a class="text-danger" href="AboutDeveloper.php">About Developer</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 col-12">
            <h4 class="mx-4">Get In Touch</h4>
            <ul style="list-style-type: none;" class="mt-2 text-danger">
              <li class="mt-2">Dhaka, Bangladesh</li>
              <li class="mt-2"> <a class="text-danger" href="mailto:mazbaur15-2837@diu.edu.bd">mazbaur15-2837@diu.edu.bd</a></li>
              <li class="mt-2">
                +8801796228391</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <hr class="text-white">
  <section>
    <!-- Copyright -->
    <div class="text-white text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" target="_blank" href="https://www.facebook.com/mezbah.meraz/">Mazbaur Rashid (192-15-2837)</a>
    </div>
    <!-- Copyright -->
  </section>


  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>