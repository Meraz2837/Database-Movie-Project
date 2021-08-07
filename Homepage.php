<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Style.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="Style.css">
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
      background: #0f6efd;
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
      <a class="navbar-brand" href="#"><img class="img-fluid icon" src="Icons/Copy of Movie.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-primary" aria-current="page" href="#">Home</a>
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
          <li class="nav-item">
            <a class="nav-link" href="SQLOperation.php">SQL Operations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
        <div class="search-box">
          <input type="text" autocomplete="off" placeholder="Search movie" />
          <div class="result"></div>
        </div>
      </div>
    </div>
  </nav>


  <div class="container bg-dark">
    <div class="row">
      <div style="padding:25% 0; padding-right:20px; border-right: 5px solid #ccc;" class="col-md-6 text-white">
        <h1>Welcome</h1>
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
          </ul>
          <div style="text-align: right; padding:20% 47.7%">
            <a class="btn text-danger" href="logout.php">Log out</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <!-- Copyright -->
  <div class="text-white text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="https://www.facebook.com/mezbah.meraz/">Mazbaur Rashid (192-15-2837)</a>
  </div>
  <!-- Copyright -->
  </footer>
  <!-- Footer -->
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