<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'wdc');
    if(!$koneksi){
        echo "Koneksi gagal!";
    }
?>