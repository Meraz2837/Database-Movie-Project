<!DOCTYPE html>
<html>

<head>
    <title>Display all records from Database</title>
</head>

<body>

    <h2>Left Join</h2>
    <p>Ordering movies in Ascending order acording to year!</p>

    <table border="2">
        <tr>
            <td>Movie Code</td>
            <td>Country Code</td>
            <td>Director Code</td>
            <td>Budget</td>
            <td>Year</td>
            <td>IMDB Rating</td>
            <td>Runtime</td>
            <td>Movie Title</td>
        </tr>

        <?php

        include "dbConn.php"; // Using database connection file here

        $records = mysqli_query($db, "Select * from movie order by year"); // fetch data from database

        while ($data = mysqli_fetch_array($records)) {
        ?>
            <tr>
                <td><?php echo $data['movieId']; ?></td>
                <td><?php echo $data['countryId']; ?></td>
                <td><?php echo $data['directorId']; ?></td>
                <td><?php echo $data['budget']; ?></td>
                <td><?php echo $data['year']; ?></td>
                <td><?php echo $data['IMDBrating']; ?></td>
                <td><?php echo $data['runtime']; ?></td>
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