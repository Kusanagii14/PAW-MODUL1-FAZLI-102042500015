<?php
// Data produk
$produk = [
    [
        "nama" => "Xiaomi 15T ",
        "kategori" => "Handphone",
        "harga" => 12000000,
        "stok" => 0
    ],
    [
        "nama" => "Mouse Logitech G102",
        "kategori" => "Mouse",
        "harga" => 250000,
        "stok" => 12
    ],
    [
        "nama" => "Keyboard ElecFox INKY 75",
        "kategori" => "Keyboard",
        "harga" => 750000,
        "stok" => 0
    ],
    [
        "nama" => "Headset Gaming HyperX Cloud Alpha",
        "kategori" => "Audio",
        "harga" => 950000,
        "stok" => 3
    ],
    [
        "nama" => "Webcam Logitech C270",
        "kategori" => "Webcam",
        "harga" => 335000,
        "stok" => 3
    ],
    [
        "nama" => "SANDISK microSDHC",
        "kategori" => "Storage",
        "harga" => 185000,
        "stok" => 13
    ]
];

// Jumlah seluruh produk 
$totalProduk = count($produk);

// Pengaturan diskon
$batasDiskon  = 1000000; // harga minimal yang dapat diskon
$persenDiskon = 10;      // persentase diskon

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cia Store - Toko Elektronik</title>

    <!-- CSS eksternal -->
    <link rel="stylesheet" href="style.css">

    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <header class="navbar">
        <div class="container navbar-content">
            <div class="logo">Cia<span>Store</span></div>

            <nav>
                <a href="#home">Home</a>
                <a href="#produk">Produk</a>
                <a href="#tentang">Tentang</a>
            </nav>
        </div>
    </header>


    <!-- Hero -->
    <section class="hero" id="home">
        <div class="container hero-content">
            <div>
                <p class="hero-label">WELCOME TO CIA STORE</p>

                <h1>
                    Temukan Perangkat
                    <span>Teknologi Impianmu.</span>
                </h1>

                <p class="hero-description">
                    Menjual Alat elektronik dan aksesoris yang kalian butuhkan.
                </p>
            </div>
        </div>
    </section>





    <!-- Katalog Produk -->
    <section class="catalog" id="produk">
        <div class="container">

            <div class="section-heading">
                <div>
                    <p class="section-label">OUR PRODUCTS</p>
                </div>

                <span class="product-count">
                    Jumlah Seluruh Produk: <?= $totalProduk; ?>
                </span>
            </div>


            <!-- Product Grid -->
            <div class="product-grid">

                <?php foreach ($produk as $item): ?>

                    <div class="product-card">

                        <div class="product-image">
                            <span>
                                <?= htmlspecialchars($item["kategori"]); ?>
                            </span>
                        </div>

                        <div class="product-content">

                            <p class="category">
                                <?= htmlspecialchars($item["kategori"]); ?>
                            </p>

                            <h3>
                                <?= htmlspecialchars($item["nama"]); ?>
                            </h3>

                            <?php if ($item["harga"] >= $batasDiskon): ?>

                                <?php
                                // Hitung harga setelah diskon
                                $hargaDiskon = $item["harga"] - ($item["harga"] * $persenDiskon / 100);
                                ?>

                                <span class="badge-diskon">
                                    DISKON <?= $persenDiskon; ?>%
                                </span>

                                <span class="price-old">
                                    Rp <?= number_format($item["harga"], 0, ',', '.'); ?>
                                </span>

                                <p class="price">
                                    Rp <?= number_format($hargaDiskon, 0, ',', '.'); ?>
                                </p>

                            <?php else: ?>

                                <p class="price">
                                    Rp <?= number_format($item["harga"], 0, ',', '.'); ?>
                                </p>

                            <?php endif; ?>

                            <?php if ($item["stok"] > 0): ?>

                                <p class="stock available">
                                    Tersedia (<?= $item["stok"]; ?> stok)
                                </p>

                                <button class="buy-button">
                                    Beli Sekarang
                                </button>

                            <?php else: ?>

                                <p class="stock unavailable">
                                    Stok Habis
                                </p>

                                <button class="buy-button disabled" disabled>
                                    Stok Habis
                                </button>

                            <?php endif; ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>
    </section>


    <!-- About Us -->
    <section class="about" id="tentang">
        <div class="container">
            <h2>Tentang Cia Store</h2>
            <p>
                Cia Store menyediakan koleksi lengkap alat elektronik dan aksesoris berkualitas untuk 
                mendukung gaya hidup digital Anda. Kami selalu menghadirkan produk-produk pilihan 
                yang inovatif, terjangkau, dan terpercaya demi kepuasan setiap pelanggan.
            </p>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2026 Cia Store. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>