<?php
$hostname = "localhost";
$username ="root";
$password = "";
$database_name = "pondok";

$db = mysqli_connect($hostname, $username, $password, $database_name);
    // Memeriksa koneksi
    if ($db->connect_error) {
        die("Koneksi gagal: " . $db->connect_error);
        $db->close();
    }

?>