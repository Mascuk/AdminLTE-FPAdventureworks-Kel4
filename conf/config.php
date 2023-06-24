<?php
 $conn = mysqli_connect('localhost', 'root', '', 'adventureworks2');
if(!$conn) {
    die("Koneksi Gagal: " + mysqli_connect_error());
}
else{
    echo "Koneksi Berhasil";
}