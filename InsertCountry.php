<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="Icons/Copy of Movie.png">
    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Moviebuzz - Add country</title>
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
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ShowDB.php">Show Database</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-danger" href="AddTableOptions.php">Add to Database</a>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="AboutDeveloper.php">About Developer</a></li>
                        </ul>
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


    <form class="text-white text-center my-5" action="InsertCountryP.php" method="post">
        <p>
            <label for="countryCode">Country Code:</label>
            <input type="text" name="countryId" id="countryCode">
        </p>
        <p>
            <label for="Country_Name">Country Name:</label>
            <input type="text" name="countryName" id="Country_Name">
        </p>
        <input style="width: 300px;" class="btn btn-danger" type="submit" value="Submit">
    </form>
    <!-- Footer -->
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



    <!-- Copyright -->
    <div class="text-white text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="https://www.facebook.com/mezbah.meraz/">Mazbaur Rashid (192-15-2837)</a>
    </div>
</body>

</html>