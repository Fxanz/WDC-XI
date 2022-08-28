<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "INSERT INTO user (nama, username, email, password, status)
    VALUES ('$nama', '$username', '$email', '$password', 1)";
$push = mysqli_query($koneksi, $query);

if ($push) {
    header('location: index.php?');
} else {
    header('location: register.php?');
}
