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
                "
                >
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
                <button class="btn-primary">Pesan Sekarang</button>
            </div>
        </div>
    <div class="hero-image">
        <img src="assets/images/goacina.jpg" alt="Pantai Goa Cina" />
    </div>
    </section>
                
    <section class="features">
        <div class="why-choose-us">
            <h2>Mengapa Anda Harus Memilih Jasa Kami?</h2>
            <p>Kami berkomitmen memberikan layanan terbaik untuk memastikan perjalanan Anda nyaman, aman, dan menyenangkan.</p>
            <p>Kami memiliki beberapa keunggulan diantara lain:</p>
        </div>
        <div class="feature">
            <img src="assets/images/sopir.jpeg" alt="Sopir Berpengalaman" />
            <h3>Sopir Berpengalaman</h3>
            <p>Tim sopir profesional dengan pengetahuan rute yang luas dan ramah.</p>
        </div>
        <div class="feature">
            <img src="assets/images/sigra.jpeg" alt="Armada Terbaik" />
            <h3>Mobil Terawat</h3>
            <p>Mobil selalu dalam kondisi prima untuk kenyamanan dan keamanan perjalanan Anda.</p>
        </div>
        <div class="feature">
            <img src="assets/images/money.jpeg" alt="Harga Terjangkau" />
            <h3>Harga Terjangkau</h3>
            <p>Layanan premium dengan harga yang bersahabat untuk semua kalangan.</p>
        </div>
    </section>

    <section class="services">
        <h2>Layanan Kami</h2>
        <div class="service-item">
            <img src="assets/images/hiace.jpeg" alt="Transportasi" />
            <h3>Transportasi Wisata</h3>
            <p>Menyediakan transportasi nyaman untuk perjalanan wisata ke berbagai destinasi.</p>
        </div>
        <div class="service-item">
            <img src="assets/images/sewamobil.jpeg" alt="Sewa Mobil" />
            <h3>Sewa Mobil</h3>
            <p>Mobil-mobil premium siap disewa dengan sopir berpengalaman.</p>
        </div>
        <div class="service-item">
            <img src="assets/images/seat.jpeg" alt="Tour Guide" />
            <h3>Travel Conventional</h3>
            <p>Menyediakan travel konvensional yang siap mengantar anda kapanpun dan dimanapun</p>
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
