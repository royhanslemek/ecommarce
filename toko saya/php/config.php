<?php
$conn = mysqli_connect("localhost", "root", "", "royha_shop");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>