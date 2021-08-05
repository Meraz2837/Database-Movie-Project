<!DOCTYPE html>
<html>

<head>
    <title>Display all records from Database</title>
</head>

<body>

    <h2>Left Join</h2>

    <table border="2">
        <tr>
            <td>Movie ID</td>
            <td>Title</td>
        </tr>

        <?php

        include "dbConn.php"; // Using database connection file here

        $records = mysqli_query($db, "select movie.movieid, movie.title from movie left join moviegenre on movie.movieid=moviegenre.movieid"); // fetch data from database

        while ($data = mysqli_fetch_array($records)) {
        ?>
            <tr>
                <td><?php echo $data['movieid']; ?></td>
                <td><?php echo $data['title']; ?></td>
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