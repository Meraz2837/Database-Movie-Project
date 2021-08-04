<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Record Form</title>
</head>

<body class="bg-dark text-white">
    <form action="InsertCountryP.php" method="post">
        <p>
            <label for="countryCode">Country Code:</label>
            <input type="text" name="countryId" id="countryCode">
        </p>
        <p>
            <label for="Country_Name">Country Name:</label>
            <input type="text" name="countryName" id="Country_Name">
        </p>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
</body>
<!-- Footer -->
  <!-- Copyright -->
  <div class="text-white text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="https://www.facebook.com/mezbah.meraz/">Mazbaur Rashid (192-15-2837)</a>
  </div>
</html>