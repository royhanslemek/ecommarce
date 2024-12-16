<?php
$conn = mysqli_connect("localhost", "root", "", "elfs_shop");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>