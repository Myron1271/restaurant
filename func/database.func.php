<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurantdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Er is iets fout gegaan: " .mysqli_connect_error());
}

?>