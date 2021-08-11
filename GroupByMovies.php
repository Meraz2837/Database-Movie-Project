<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/png" href="Icons/Copy of Movie.png">
    <title>Movibuzz - Group By</title>
</head>

<<body style="background: #212529; color:white;">

    <h2 align="center">Group by</h2>

    <table align="center" border="5" BORDERCOLOR=WHITE>
        <tr border="1" BORDERCOLOR=WHITE>
            <td>Number Of Movies</td>
            <td>Year</td>
        </tr>

        <?php

        include "dbConn.php"; // Using database connection file here

        $records = mysqli_query($db, "SELECT COUNT(movieid), year FROM movie GROUP BY year"); // fetch data from database

        while ($data = mysqli_fetch_array($records)) {
        ?>
            <tr>
                <td><?php echo $data['COUNT(movieid)']; ?></td>
                <td><?php echo $data['year']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </body>

</html>