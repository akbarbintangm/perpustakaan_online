<?php
/* CONFIG BASE URL */
define('BASEURL', 'http://localhost:8181/perpustakaan_online');

/* CONFIG DATABASES */
$servername = "localhost";
$port = "3307";
$database = "perpustakaan";
$username = "root";
$password = "admin";
$connect = mysqli_connect($servername.':'.$port, $username, $password, $database);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

?>