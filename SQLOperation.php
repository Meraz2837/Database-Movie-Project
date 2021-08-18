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
  <link rel="shortcut icon" type="image/png" href="Icons/Copy of Movie.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="Style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Moviebuzz - SQL Operation</title>
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
  <section>
    <nav style="background-color: rgba(0, 0, 0, 0.2) !important;" class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img class="img-fluid icon" src="Icons/Copy of Movie.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
                <li><a class="dropdown-item active text-danger" href="SQLOperation.php">SQL Operations</a></li>
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
                <h5 class="text-center text-white"><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h5>
              </li>
              <hr class="text-white">
              <li><a class="dropdown-item" href="logout.php">Log out</a></li>
              <li><a class="dropdown-item" href="reset-password.php">Reset Password</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </section>


  <Section>
    <div class="container text-center mt-3">
      <h1 class="text-white">SQL Join</h1>
      <hr class="text-white">
      <ul class="list border border-danger">
        <h4 class="text-white mt-3">Do Join Operation</h4>
        <li>
          <a class="btn btn-danger mt-5 btnw" href="InnerJoin.php">Inner Join</a>
        </li>
        <li>
          <a class="btn btn-danger my-5 btnw" href="LeftJoin.php">Left Join</a>
        </li>
      </ul>
    </div>
  </Section>

  <section>
    <div class="container text-center mt-3">
      <h1 class="text-white">Asc Dsc</h1>
      <hr class="text-white">
      <ul class="list border border-danger">
        <h4 class="text-white mt-3">Re-arrange Movies in Ascending or Descending Order</h4>
        <li>
          <a class="btn btn-danger mt-5 btnw" href="MovieAsc.php">Ascending Order</a>
        </li>
        <li>
          <a class="btn btn-danger my-5 btnw" href="MovieDesc.php">Descending Order</a>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div class="container text-center mt-3">
      <h1 class="text-white">Group By</h1>
      <hr class="text-white">
      <ul class="list border border-danger">
        <h4 class="text-white mt-3">Count movie in each year from Database</h4>
        <li>
          <a class="btn btn-danger my-5 btnw" href="GroupByMovies.php">Group By</a>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div class="container text-center mt-3">
      <h1 class="text-white">Max Min</h1>
      <hr class="text-white">
      <ul class="list border border-danger">
        <h4 class="text-white mt-3">Find out Maximum and Minimum Budget</h4>
        <li>
          <a class="btn btn-danger mt-5 btnw" href="MaximumMovieBudget.php">Maximum</a>
        </li>
        <li>
          <a class="btn btn-danger my-5 btnw" href="MinimumMovieBudget.php">Minimum</a>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div class="container text-center mt-3">
      <h1 class="text-white">Distinct</h1>
      <hr class="text-white">
      <ul class="list border border-danger">
        <h4 class="text-white mt-3">Find out Data without duplication</h4>
        <li>
          <a class="btn btn-danger mt-5 btnw" href="Distinct1.php">Year from movie</a>
        </li>
        <li>
          <a class="btn btn-danger my-5 btnw" href="Distinct2.php">Cast name from moviecast</a>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div class="container text-center mt-3">
      <h1 class="text-white">Subquery</h1>
      <hr class="text-white">
      <ul class="list border border-danger">
        <li>
          <a class="btn btn-danger mt-5 btnw" href="Subquery.php">Movies in Bangladesh</a>
        </li>
        <li>
          <a class="btn btn-danger my-5 btnw" href="Subquery2.php">Highest Budget Country</a>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div class="container text-center mt-3">
      <h1 class="text-white">Average</h1>
      <hr class="text-white">
      <ul class="list border border-danger">
        <h4 class="text-white mt-3">Find Average IMDB Ratings</h4>
        <li>
          <a class="btn btn-danger m-5 btnw" href="Average.php">Average IMDB Rating</a>
        </li>
      </ul>
    </div>
  </section>

  <section>
    <div class="container text-center mt-3">
      <h1 class="text-white">Other Operations</h1>
      <hr class="text-white">
      <ul class="list border border-danger">
        <li>
          <h4 class="text-white m-3">Showing movies records of Muicize and Foster</h4>
          <a class="btn btn-danger btnw" href="Or.php">OR</a>
        </li>
        <hr class="text-white">
        <li>
          <h4 class="text-white m-3">Showing movies without Muicize and Foster</h4>
          <a class="btn btn-danger btnw" href="NotIn.php">NOT IN</a>
        </li>
        <hr class="text-white">
        <li>
          <h4 class="text-white m-3">Showing movies From 2015 to 2019</h4>
          <a class="btn btn-danger mb-3 btnw" href="Between.php">BETWEEN</a>
        </li>
      </ul>
    </div>
  </section>



  <!-- Footer -->
  <section>
    <div style="background-color: rgba(0, 0, 0, 0.2);" class="Footer mt-5">
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


  <div class="text-white text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="https://www.facebook.com/mezbah.meraz/">Mazbaur Rashid (192-15-2837)</a>
  </div>


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