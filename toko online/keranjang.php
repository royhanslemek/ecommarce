<?php
// Memulai sesi untuk menyimpan data keranjang
session_start();

// Ambil data keranjang dari session
$keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : [];

// Hitung total belanja
$total_belanja = 0;
foreach ($keranjang as $item) {
    $total_belanja += $item['harga'] * $item['jumlah'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Skensa Fashion</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#products">Produk</a></li>
            <li><a href="daftar-dropshipper.php">Dropshipper</a></li>
            <li><a href="keranjang.php">Keranjang</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Keranjang Belanja</h1>
        <?php if (empty($keranjang)): ?>
            <p>Keranjang Anda kosong.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($keranjang as $id => $item): ?>
                        <tr>
                            <td><?= htmlspecialchars($item['nama']) ?></td>
                            <td>Rp <?= number_format($item['harga'], 0, ',', '.') ?></td>
                            <td><?= $item['jumlah'] ?></td>
                            <td>Rp <?= number_format($item['harga'] * $item['jumlah'], 0, ',', '.') ?></td>
                            <td>
                                <a href="hapus-keranjang.php?id=<?= $id ?>" class="hapus-btn">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <h3>Total Belanja: Rp <?= number_format($total_belanja, 0, ',', '.') ?></h3>
            <a href="checkout.php" class="checkout-link">Checkout</a>
        <?php endif; ?>
    </div>

    <footer>
        <p>&copy; 2024 Skensa Fashion. All rights reserved.</p>
    </footer>
</body>
</html>