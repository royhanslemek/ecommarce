<?php
// Proses data formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];

    // Simpan data ke database atau lakukan tindakan lainnya
    // (Lakukan koneksi ke database jika diperlukan)
    // Contoh:
    // $koneksi = new mysqli("localhost", "username", "password", "database");
    // $query = "INSERT INTO dropshippers (nama, email, telepon, alamat) VALUES ('$nama', '$email', '$telepon', '$alamat')";
    // $koneksi->query($query);
    // $koneksi->close();

    // Redirect ke index.php setelah proses selesai
    header("Location: index.php");
    exit();
}
?>