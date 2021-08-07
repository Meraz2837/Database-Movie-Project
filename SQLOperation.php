<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SQL Operation</title>
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
                        <a class="nav-link" aria-current="page" href="Homepage.php">Home</a>
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
                        <a class="nav-link active text-danger" href="SQLOperation.php">SQL Operations</a>
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



    <Section>
        <div class="container text-center mt-3">
            <h1 class="text-white">SQL Join</h1>
            <hr class="text-white">
            <ul class="list border border-danger">
                <h4 class="text-white mt-3">Do Join Operation</h4>
                <li>
                    <a class="btn btn-danger mt-5" href="InnerJoin.php">Inner Join</a>
                </li>
                <li>
                    <a class="btn btn-danger my-5" href="LeftJoin.php">Left Join</a>
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
                    <a class="btn btn-danger mt-5" href="MovieAsc.php">Ascending Order</a>
                </li>
                <li>
                    <a class="btn btn-danger my-5" href="MovieDesc.php">Descending Order</a>
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
                    <a class="btn btn-danger my-5" href="GroupByMovies.php">Group By</a>
                </li>
            </ul>
        </div>
    </section>

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