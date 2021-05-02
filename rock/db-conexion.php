<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reparatodo";
$link = mysqli_connect($servername, $username, $password, $dbname);
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>