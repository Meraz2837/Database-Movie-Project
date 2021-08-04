<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
<form action="InsertDirectorP.php" method="post">
    <p>
        <label for="DirectorID">Director ID:</label>
        <input type="text" name="directorId" id="DirectorID">
    </p>
    <p>
        <label for="DirectorName">Director Name:</label>
        <input type="text" name="Director_name" id="DirectorName">
    </p>
    <input class="btn btn-primary" type="submit" value="Submit">
</form>
<!-- Footer -->
  <!-- Copyright -->
  <div class="text-white text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="https://www.facebook.com/mezbah.meraz/">Mazbaur Rashid (192-15-2837)</a>
  </div>
</body>
</html>