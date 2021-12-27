<?php
/* CONFIG BASE URL */
define('BASEURL', 'http://localhost:8181/perpustakaan_online');

/* CONFIG DATABASES */
$servername = "localhost";
$database = "perpustakaan";
$username = "root";
$password = "";
$connect = mysqli_connect($servername, $username, $password, $database);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

?>