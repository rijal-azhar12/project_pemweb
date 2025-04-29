<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV HS Jaya Abadi</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav>
        <div class="logo">
            <strong>CV HS <span style="color: #3b82f6">Jaya Abadi</span></strong>
        </div>
        <ul>
            <li><a href="<?= base_url('beranda') ?>">Beranda</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="<?= base_url('layanan') ?>">Layanan</a></li>
            <li><a href="#">Testimoni & Galeri</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
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
</body>
</html>
</body>
</html>
