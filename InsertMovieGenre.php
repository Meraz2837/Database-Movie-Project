<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
<form action="InsertMovieGenrep.php" method="post">
    <p>
        <label for="Movie_ID">Movie ID: </label>
        <input type="text" name="movieId" id="Movie_ID">
    </p>
    <p>
        <label for="Genre_Name">Genre Name: </label>
        <input type="text" name="genreName" id="Genre_Name">
    </p>
    <input class="btn btn-primary" type="submit" value="Submit">
</form>
</body>
</html>