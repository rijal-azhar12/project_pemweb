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
    <nav class="navbar">
        <div class="logo">
            <strong>CV HS <span style="color: #3b82f6">Jaya Abadi</span></strong>
        </div>
        
        <ul class="nav-links">
            <li><a href="<?= base_url('beranda') ?>" <?= (uri_string() == 'beranda' || uri_string() == '') ? 'class="active"' : '' ?>>Beranda</a></li>
            <li><a href="<?= base_url('tentang') ?>" <?= uri_string() == 'tentang' ? 'class="active"' : '' ?>>Tentang Kami</a></li>
            <li><a href="<?= base_url('layanan') ?>" <?= uri_string() == 'layanan' ? 'class="active"' : '' ?>>Layanan</a></li>
            <li><a href="<?= base_url('galeri') ?>" <?= uri_string() == 'galeri' ? 'class="active"' : '' ?>>Testimoni & Galeri</a></li>
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
    <section class="quick-contact">
        <h3>Contact Info</h3>
        <p>Jl. Jend. Sudirman, Tambakrejo, Plandi, Kec. Wonosari, Kabupaten Malang, Jawa Timur 65164</p>
        <ul>
            <li><i class="fas fa-phone-alt"></i> +6281 266 691 786</li>
            <li><i class="fas fa-envelope"></i> cvhsjayaabadi77@gmail.com</li>
        </ul>
    </section>



</footer>

<script src="<?= base_url('assets/js/script.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
</body>
</html>
