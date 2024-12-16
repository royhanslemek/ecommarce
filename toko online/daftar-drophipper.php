<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dropshipper</title>
    <!-- Link ke file CSS -->
    <link rel="stylesheet" href="assets/css/daftar.css">
</head>
<body>
    <header>
        <h1>Skensa Fashion</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="daftar-dropshipper.php" class="active">Daftar Dropshipper</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="dropshipper-form">
            <h2>Daftar Dropshipper</h2>
            <p>Daftar untuk menjadi dropshipper kami dan mulai jualan online sekarang!</p>
            <form action="proses-daftar.php" method="POST">
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="telepon">Nomor Telepon</label>
        <input type="text" id="telepon" name="telepon" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea id="alamat" name="alamat" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn-daftar">Daftar</button>
</form>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Skensa Fashion | All rights reserved</p>
    </footer>
</body>
</html>