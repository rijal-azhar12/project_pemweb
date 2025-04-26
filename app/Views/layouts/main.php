<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV HS Jaya Abadi</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <nav>
        <div class="logo">
            <strong>CV HS <span style="color: #3b82f6">Jaya Abadi</span></strong>
        </div>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Testimoni & Galeri</a ></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav>
</head>
<body>
    <?= $this->renderSection('content') ?>
    <footer>
        <section class="quick-contact">
            <h3>Contact Info</h3>
            <p>Rungkut Asri Utara 1 No 19, Surabaya - Indonesia</p>
            <ul>
                <li><i class="fas fa-phone-alt"></i> +6281 339 339 409</li>
                <li><i class="fas fa-envelope"></i> eastjourneytravel@gmail.com</li>
                <li><i class="fab fa-instagram"></i> @eastjourneys</li>
            </ul>
        </section>
    </footer>
</body>
</html>
