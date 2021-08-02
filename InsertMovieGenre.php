<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="InsertMovieGenrep.php" method="post">
    <p>
        <label for="Movie_ID">Movie ID: </label>
        <input type="text" name="movieId" id="Movie_ID">
    </p>
    <p>
        <label for="Genre_Name">Genre Name: </label>
        <input type="text" name="genreName" id="Genre_Name">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>