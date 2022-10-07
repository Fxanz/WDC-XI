<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("location: index.php");
}
$email = $_SESSION['email'];
include '../koneksi.php';
$qr = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");
$rw = mysqli_fetch_assoc($qr);
?>