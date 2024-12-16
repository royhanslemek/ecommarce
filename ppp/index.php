<?php
include 'database/db.php';

// Ambil data produk dari database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELFS Shop</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="logo">ELFS</div>
        <nav>
            <ul>
                <li><a href="#">Atasan</a></li>
                <li><a href="#">Bawahan</a></li>
                <li><a href="#">Tas</a></li>
                <li><a href="#">Aksesoris</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="banner">
            <h1>Daftar Jadi Dropshipper GRATIS!</h1>
        </div>
        <section class="products">
            <?php while ($row = $result->fetch_assoc()) : ?>
                <div class="product-card">
                    <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                    <h2><?php echo $row['name']; ?></h2>
                    <p>Rp <?php echo number_format($row['price'], 2, ',', '.'); ?></p>
                </div>
            <?php endwhile; ?>
        </section>
    </main>
</body>
</html>
