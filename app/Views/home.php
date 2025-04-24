<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<nav>
            <div class="logo">
                <strong>CV HS <span style="color: #3b82f6">Jaya Abadi</span></strong>
            </div>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Layanan</a></li>
                <li><a href="#">Destinasi</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
            <button class="btn-primary">Pesan Sekarang</button>
        </nav>

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
            "
            >
            ⭐ Agen Travel Terpercaya
            </div>
            <h1>
            Perjalanan Nyaman <br />
            Bersama <span>CV HS Jaya Abadi</span>
            </h1>
            <p>
            Layanan transportasi premium dengan armada terbaik dan sopir
            profesional. Nikmati perjalanan yang aman, nyaman, dan terjangkau ke
            berbagai destinasi.
            </p>
            <div class="hero-buttons">
            <button class="btn-primary">Pesan Sekarang</button>
            <button class="btn-outline">Hubungi Kami</button>
            </div>
        </div>
        <div class="hero-image">
            <img src="assets/images/goacina.jpg" alt="Pantai Goa Cina" />
        </div>
        </section>
        
    
    <section class="why-choose-us">
        <h2>Mengapa Anda Harus Memilih Jasa Kami?</h2>
        <p>Kami berkomitmen memberikan layanan terbaik untuk memastikan perjalanan Anda nyaman, aman, dan menyenangkan.</p>
        <p>Kami memiliki beberapa keunggulan diantara lain:</p>
    </section>

    <section class="features">
        <div class="feature">
            <img src="assets/images/Karina.jpeg" alt="Sopir Berpengalaman" />
            <h3>Sopir Berpengalaman</h3>
            <p>Tim sopir profesional dengan pengetahuan rute yang luas dan ramah.</p>
        </div>
        <div class="feature">
            <img src="assets/images/winter.jpeg" alt="Armada Terbaik" />
            <h3>Armada Terawat</h3>
            <p>Mobil selalu dalam kondisi prima untuk kenyamanan dan keamanan perjalanan Anda.</p>
        </div>
        <div class="feature">
            <img src="assets/images/ningning.jpeg" alt="Harga Terjangkau" />
            <h3>Harga Terjangkau</h3>
            <p>Layanan premium dengan harga yang bersahabat untuk semua kalangan.</p>
        </div>
    </section>

    <section class="services">
        <h2>Layanan Kami</h2>
        <div class="service-item">
            <img src="assets/images/mobil1.jpeg" alt="Transportasi" />
            <h3>Transportasi Wisata</h3>
            <p>Menyediakan transportasi nyaman untuk perjalanan wisata ke berbagai destinasi.</p>
        </div>
        <div class="service-item">
            <img src="assets/images/mobil2.jpeg" alt="Sewa Mobil" />
            <h3>Sewa Mobil</h3>
            <p>Mobil-mobil premium siap disewa dengan sopir berpengalaman.</p>
        </div>
        <div class="service-item">
            <img src="assets/images/Destinasi.jpeg" alt="Tour Guide" />
            <h3>Tour Guide</h3>
            <p>Guide wisata yang profesional untuk menemani perjalanan Anda.</p>
        </div>
    </section>

<section class="testimonials">
    <h2>Apa Kata Pelanggan Kami?</h2>
    <div class="testimonial-item">
        <p>"Perjalanan bersama CV HS Jaya Abadi sangat nyaman dan aman. Sopirnya sangat ramah dan profesional!"</p>
        <strong>- Andi Pratama</strong>
    </div>
    <div class="testimonial-item">
        <p>"Armada yang digunakan sangat nyaman, harga yang ditawarkan sangat bersaing. Sangat puas!"</p>
        <strong>- Siti Nurhaliza</strong>
    </div>
</section>

<section class="quick-contact">
        <h3>Contact Info</h3>
        <p>Rungkut Asri Utara 1 No 19, Surabaya - Indonesia</p>
        <ul>
            <li><i class="fas fa-phone-alt"></i> +6281 339 339 409</li>
            <li><i class="fas fa-envelope"></i> eastjourneytravel@gmail.com</li>
            <li><i class="fab fa-instagram"></i> @eastjourneys</li>
        </ul>
</section>

<?= $this->endSection() ?>
