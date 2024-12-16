<?php
// Start session untuk admin login
session_start();

// Cek apakah admin sudah login
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php'); // Redirect ke halaman login jika belum login
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Skensa Fashion</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Tambahkan CSS -->
</head>
<body>
    <header>
        <h1>Admin</h1>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="produk.php">Kelola Produk</a></li>
                <li><a href="users.php">Kelola Pengguna</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Selamat Datang, Admin</h2>
        <p>Gunakan panel ini untuk mengelola website Anda.</p>
    </main>

    <footer>
        <p>© 2024 Skensa Fashion. All rights reserved.</p>
    </footer>
</body>
</html>