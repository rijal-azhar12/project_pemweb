<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="hero">
    <div class="hero-text">
        <div
            style="
                    background-color: #e0edff;
                    display: inline-block;
                    padding: 6px 12px;
                    border-radius: 20px;
                    font-size: 14px;
                    color: #2563eb;     
                ">
            ⭐ Agen Travel Terpercaya
        </div>
        <h1>
            Perjalanan Nyaman <br />
            Bersama <span>CV HS Jaya Abadi</span>
        </h1>
        <p>
            CV HS Jaya Abadi adalah Agen Travel terpercaya yang menyediakan
            Layanan transportasi premium dengan sopir terbaik dan pastinya
            profesional. Nikmati perjalanan yang aman, nyaman,
            dan terjangkau ke berbagai destinasi di indonesia.
        </p>
        <div class="hero-buttons">
            <a href="<?= base_url('/kontak') ?>" class="btn-primary" style="text-decoration: none;">Pesan Sekarang</a>
        </div>
    </div>
    <div class="hero-image">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets/images/beranda/goacina.jpg') ?>" class="d-block w-100" alt="Pantai Goa Cina">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/images/beranda/bali.png') ?>" class="d-block w-100" alt="Bali">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/images/beranda/borobudur.png') ?>" class="d-block w-100" alt="Borobudur">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/images/beranda/tumpaksewu.jpg') ?>" class="d-block w-100" alt="Tumpak Sewu">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/images/beranda/tebingbreksi.jpg') ?>" class="d-block w-100" alt="Tebing Breksi">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4"></button>
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="why-choose-us">
        <h2>Mengapa Anda Harus Memilih Jasa Kami?</h2>
        <p>Kami berkomitmen memberikan layanan terbaik untuk memastikan perjalanan Anda nyaman, aman, dan menyenangkan.</p>
        <p>Kami memiliki beberapa keunggulan diantara lain:</p>
    </div>
    <div class="features-container"> 
        <?php foreach ($features as $img): ?>
        <div class="feature">
            <img src="<?= base_url($img['file_path']) ?>" alt="<?= $img['alt_text'] ?>">
            <h3><?= $img['title'] ?></h3>
            <p><?= $img['description'] ?? '' ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="services">
    <h2>Layanan Kami</h2>
    <div class="services-container"> 
        <?php foreach ($services as $img): ?>
        <div class="service-item">
            <img src="<?= base_url($img['file_path']) ?>" alt="<?= $img['alt_text'] ?>">
            <h3><?= $img['title'] ?></h3>
            <p><?= $img['description'] ?? '' ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="testimonials">
    <h2>Apa Kata Pelanggan Kami?</h2>
    <div class="testimonial-item">
        <p>"Perjalanan bersama CV HS Jaya Abadi sangat nyaman dan aman. Drivernya sangat ramah dan profesional!"</p>
        <strong>- M. Rizky Rijal Azhar</strong>
    </div>
    <div class="testimonial-item">
        <p>"Unit yang digunakan sangat nyaman, harga yang ditawarkan sangat bersaing. Sangat puas!"</p>
        <strong>- Lutfi Dwi Firmansyah</strong>
    </div>
    <div class="testimonial-item">
        <p>"Drivernya sangat profesional dan asik diajak ngobrol saat perjalanan!"</p>
        <strong>- Juan Praka Wijaya</strong>
    </div>
</section>

<?= $this->endSection() ?>