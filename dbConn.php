<?php

$db = mysqli_connect("localhost","root","","movie project");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>