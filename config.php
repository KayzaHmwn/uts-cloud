<?php
$host = "ecommerce-db.c3ecw8k80i79.ap-southeast-2.rds.amazonaws.com";  // Ganti dengan endpoint RDS kamu
$user = "admin";
$pass = "admin456";
$db   = "ecommerce";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
