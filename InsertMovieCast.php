<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="InsertMovieCastp.php" method="post">
    <p>
        <label for="Movie_cast_ID">MovieCast ID:</label>
        <input type="text" name="moviecastId" id="Movie_cast_ID">
    </p>
    <p>
        <label for="Movie_ID">Movie ID:</label>
        <input type="text" name="movieId" id="Movie_ID">
    </p>
    <p>
        <label for="Cast_name">Cast Name:</label>
        <input type="text" name="Castname" id="Cast_name">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>