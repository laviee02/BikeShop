<?php
$servername = 'localhost';
$username = 'root';
$password = '1';
$dbname = "bikeshop";
$conn = mysqli_connect($servername, $username, $password, "$dbname");
if (!$conn) {
    die('Could not Connect My Sql:' . mysqli_connect_error());
}
