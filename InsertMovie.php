<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="InsertMovieP.php" method="post">
    <p>
        <label for="Movie_ID">Movie ID: </label>
        <input type="text" name="movieId" id="MovieID">
    </p>
    <p>
        <label for="Country_ID">Country Code: </label>
        <input type="text" name="countryId" id="Country_ID">
    </p>
    <p>
        <label for="Director_ID">Director ID: </label>
        <input type="text" name="directorId" id="Director_ID">
    </p>
    <p>
        <label for="Budget">Budget: </label>
        <input type="text" name="budget" id="Budget">
    </p>
    <p>
        <label for="Year">Year: </label>
        <input type="text" name="year" id="Year">
    </p>
    <p>
        <label for="IMDB">IMDB Rating: </label>
        <input type="text" name="IMDBrating" id="IMDB">
    </p>
    <p>
        <label for="Time">Runtime: </label>
        <input type="text" name="runtime" id="Time">
    </p>
    <p>
        <label for="Movie_Name">Movie Name: </label>
        <input type="text" name="title" id="Movie_Name">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>