<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/png" href="Icons/Copy of Movie.png">
    <title>Moviebuzz - Inner Join</title>
</head>

<body>

    <h2>Inner Join</h2>

    <table border="2">
        <tr>
            <td>Movie Title</td>
            <td>Genre</td>
        </tr>

        <?php

        include "dbConn.php"; // Using database connection file here

        $records = mysqli_query($db, "select movie.title, moviegenre.genreName from movie inner join moviegenre on movie.movieid=moviegenre.movieid"); // fetch data from database

        while ($data = mysqli_fetch_array($records)) {
        ?>
            <tr>
                <td><?php echo $data['title']; ?></td>
                <td><?php echo $data['genreName']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <!-- Footer -->
    <!-- Copyright -->
    <div class="text-white text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="https://www.facebook.com/mezbah.meraz/">Mazbaur Rashid (192-15-2837)</a>
    </div>
</body>

</html>