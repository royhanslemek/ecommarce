<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_produk = $_POST['id']; // ID Produk
    $nama_produk = $_POST['nama']; // Nama Produk
    $harga_produk = $_POST['harga']; // Harga Produk
    $jumlah_produk = $_POST['jumlah']; // Jumlah yang dibeli

    // Cek apakah keranjang sudah ada di session
    if (!isset($_SESSION['keranjang'])) {
        $_SESSION['keranjang'] = [];
    }

    // Jika produk sudah ada, tambahkan jumlahnya
    if (isset($_SESSION['keranjang'][$id_produk])) {
        $_SESSION['keranjang'][$id_produk]['jumlah'] += $jumlah_produk;
    } else {
        // Jika produk belum ada, tambahkan sebagai item baru
        $_SESSION['keranjang'][$id_produk] = [
            'nama' => $nama_produk,
            'harga' => $harga_produk,
            'jumlah' => $jumlah_produk,
        ];
    }

    // Redirect ke halaman keranjang
    header('Location: keranjang.php');
    exit;
}

// Logika untuk menambahkan produk ke keranjang





// Produk
$products = [
    ["id" => 1, "name" => "Kaos Pria", "price" => 50000, "image" => "kaos pria.jpeg"],
    ["id" => 2, "name" => "Celana Jeans", "price" => 150000, "image" => "celana-jeans.webp"],
    ["id" => 3, "name" => "Jaket Hoodie", "price" => 200000, "image" => "jaket-hoodie.jpeg"]
];

// Tambahkan ke keranjang
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity']++;
    } else {
        $_SESSION['cart'][$id] = [
            "name" => $name,
            "price" => $price,
            "quantity" => 1
        ];
    }

    header("Location: index.php");
    exit();
}

// Hapus dari keranjang
if (isset($_GET['remove'])) {
    $id = $_GET['remove'];
    unset($_SESSION['cart'][$id]);
    header("Location: index.php");
    exit();
}

// Checkout
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['checkout'])) {
    $name = $_POST['customer_name'];
    $address = $_POST['customer_address'];
    $phone = $_POST['customer_phone'];
    $order = json_encode($_SESSION['cart'], JSON_PRETTY_PRINT);

    // Simpan ke file
    $file = fopen("orders.txt", "a");
    fwrite($file, "Name: $name\nAddress: $address\nPhone: $phone\nOrder:\n$order\n\n");
    fclose($file);

    // Hapus keranjang
    unset($_SESSION['cart']);

    echo "<script>alert('Pesanan Anda berhasil dibuat!');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skensa Fashion</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/script.js"></script>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <h1>Skensa Fashion</h1>
        <nav class="nav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#products">Produk</a></li>
                <li><a href="daftar-drophipper.php">Dropshipper</a></li>
                <li><a href="keranjang.php">Keranjang</a></li>
            </ul>
        </nav>
    </header>

    <!-- Banner Section -->
    <section id="home" class="banner">
        <h2>Selamat Datang di Skensa Fashion</h2>
        <p>Tempat belanja online terbaik dengan fitur dropship gratis!</p>
    </section>

    <!-- Produk Section -->
    <section id="products" class="products">
        <h2>Produk Kami</h2>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product-item">
                    <img src="assets/images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <h3><?php echo $product['name']; ?></h3>
                    <p>Rp <?php echo number_format($product['price'], 0, ',', '.'); ?></p>
                    <form action="index.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                        <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
                        <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                        <button type="submit" name="add_to_cart">Tambah ke Keranjang</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- Dropshipper Section -->

    <!-- Keranjang Section -->

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 SKENSA FASHION. All rights reserved.</p>
    </footer>
</body>
</html>