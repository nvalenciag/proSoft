<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "reparatodo";
$link = mysqli_connect($servername, $username, $password, $dbname);
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>