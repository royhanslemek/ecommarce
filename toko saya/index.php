<?php
// Array produk
$products = [
    ["id" => 1, "name" => "Kaos Pria", "price" => 50000, "image" => "kaos-pria.jpg"],
    ["id" => 2, "name" => "Celana Jeans", "price" => 150000, "image" => "celana-jeans.jpg"],
    ["id" => 3, "name" => "Jaket Hoodie", "price" => 200000, "image" => "jaket-hoodie.jpg"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELFS Shop</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <h1>ELFS Shop</h1>
        <nav class="nav">
            <ul>
                <li><a href="#products">Produk</a></li>
                <li><a href="cart.php">Keranjang</a></li>
            </ul>
        </nav>
    </header>

    <!-- Produk Section -->
    <section id="products" class="products">
        <h2>Produk Kami</h2>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product-item">
                    <img src="assets/images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <h3><?php echo $product['name']; ?></h3>
                    <p>Rp <?php echo number_format($product['price'], 0, ',', '.'); ?></p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                        <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
                        <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                        <button type="submit">Tambah ke Keranjang</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 ELFS Shop. All rights reserved.</p>
    </footer>
</body>
</html>