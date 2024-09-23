<?php
//silahkan ganti variabel koneksi ketika memindah data
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ceksertifikat";

$conn = new mysqli($servername, $username, $password, $dbname);

if ( $conn->connect_error ) {
  die("Connection failed: " . $conn->connect_error);
}
?>