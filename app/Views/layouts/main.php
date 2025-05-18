<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV HS Jaya Abadi</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="main-navbar">
        <div class="logo">
            <strong>CV HS <span style="color: #3b82f6">Jaya Abadi</span></strong>
        </div>
        
        <ul class="nav-links">
            <li><a href="<?= base_url('beranda') ?>" <?= (uri_string() == 'beranda' || uri_string() == '') ? 'class="active"' : '' ?>>Beranda</a></li>
            <li><a href="<?= base_url('about') ?>" <?= uri_string() == 'about' ? 'class="active"' : '' ?>>Tentang Kami</a></li>
            <li><a href="<?= base_url('layanan') ?>" <?= uri_string() == 'layanan' ? 'class="active"' : '' ?>>Layanan</a></li>
            <li><a href="<?= base_url('galeri') ?>" <?= uri_string() == 'galeri' ? 'class="active"' : '' ?>>Galeri</a></li>
            <li><a href="<?= base_url('kontak') ?>" <?= uri_string() == 'kontak' ? 'class="active"' : '' ?>>Kontak</a></li>
        </ul>
        
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
    <?= $this->renderSection('content') ?>
    
<footer>
    <div class="footer-container">
        <!-- Bagian Contact Info -->
        <section class="footer-section">
            <h3>Contact Info</h3>
            <ul class="contact-links">
                <li><a href="tel:+6281266691786"><i class="fas fa-phone-alt"></i> +6281 266 691 786</a></li>
                <li><a href="https://wa.me/6281266691786" target="_blank"><i class="fa-brands fa-square-whatsapp"></i> +6281 266 691 786</a></li>
                <li><a href="mailto:cvhsjayaabadi77@gmail.com"><i class="fas fa-envelope"></i> cvhsjayaabadi77@gmail.com</a></li>
            </ul>
        </section>

        <!-- Bagian Halaman -->
        <section class="footer-section">
            <h3>Halaman</h3>
            <ul class="page-links">
                <li><a href="<?= base_url('beranda') ?>">Beranda</a></li>
                <li><a href="<?= base_url('about') ?>">Tentang Kami</a></li>
                <li><a href="<?= base_url('layanan') ?>">Layanan</a></li>
                <li><a href="<?= base_url('galeri') ?>">Galeri</a></li>
                <li><a href="<?= base_url('kontak') ?>">Contact</a></li>
            </ul>
        </section>  

        <!-- Garis pemisah -->
        <div class="divider"></div>

            <!-- bagian alamat -->
        <section class="footer-section">
            <h3>Lokasi Kami</h3>
            <div class="address-container">
                <p class="address-text">Jl. Jend. Sudirman, Tambakrejo, Plandi, Kec. Wonosari, Kabupaten Malang, Jawa Timur 65164</p>

                <a href="https://maps.app.goo.gl/3ZH3TCU9NEAv45DFA" target="_blank" class="map-link">
                    <img src="assets/images/map2.png" alt="Peta Lokasi Kantor" class="map-image">
                </a>
            </div>
        </section>
    </div>
</footer>

    <script src="<?= base_url('assets/js/script.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
</body>
</html>
