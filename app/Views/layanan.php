<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

    <section class="services-hero">
        <div class="container">
            <div class="services-hero-content">
                <h1>Layanan Profesional Kami</h1>
                <p>Menyediakan solusi transportasi terbaik untuk perjalanan bisnis dan wisata Anda di seluruh Pulau Jawa</p>
            </div>
        </div>
    </section>

    <section class="main-services">
        <div class="container">
            <div class="section-header">
                <h2>Layanan Utama Kami</h2>
                <p class="subheading">Kami menyediakan berbagai layanan transportasi untuk kebutuhan perjalanan Anda</p>
            </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-route"></i>
                </div>
                <h3>Antar Jemput Antar Kota</h3>
                <ul>
                    <li>Layanan antar jemput door-to-door</li>
                    <li>Area layanan seluruh Jawa Timur, Jawa Tengah, dan Jawa Barat</li>
                    <li>Sopir berpengalaman yang mengenal rute dengan baik</li>
                    <li>Fleksibel dalam penentuan titik jemput dan tujuan</li>
                </ul>
                <button class="btn-primary">Pesan Sekarang</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-umbrella-beach"></i>
                </div>
                <h3>Pengantaran Liburan</h3>
                <ul>
                    <li>Melayani perjalanan wisata di seluruh Pulau Jawa</li>
                    <li>Bisa termasuk paket tour dengan itinerary</li>
                    <li>Kendaraan nyaman untuk keluarga atau grup</li>
                    <li>Optional dengan tour guide lokal</li>
                </ul>
                <button class="btn-primary">Pesan Sekarang</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-car-alt"></i>
                </div>
                <h3>Sewa Mobil + Sopir</h3>
                <ul>
                    <li>Kendaraan terawat dengan kondisi prima</li>
                    <li>Durasi sewa harian atau mingguan</li>
                    <li>Pilihan Jenis kendaraan mulai dari Bus hingga Mobil</li>
                    <li>Sopir terjamin keprofesionalanannya dan ramah</li>
                </ul>
                <button class="btn-primary">Pesan Sekarang</button>
            </div>
        </div>
    </section>

    <section class="popular-destinations">
        <div class="section-header">
            <h2>Destinasi Populer di Pulau Jawa</h2>
            <p>Beberapa lokasi wisata favorit yang sering kami layani</p>
        </div>

        <div class="destinations-grid">
            <div class="destination-card">
                <img src="assets/images/layanan/bromo.jpeg" alt="Gunung Bromo">
                <div class="destination-info">
                    <h3>Gunung Bromo</h3>
                    <p>Malang, Jawa Timur</p>
                    <div class="destination-desc">
                        <p>Nikmati keindahan sunrise di atas awan dan pemandangan kawah Bromo yang memesona.</p>
                        <button class="btn-outline">Pesan</button>
                    </div>
                </div>
            </div>

            <div class="destination-card">
                <img src="assets/images/layanan/parangteritis.jpeg" alt="Pantai Parangtritis">
                <div class="destination-info">
                    <h3>Pantai Parangtritis</h3>
                    <p>Yogyakarta</p>
                    <div class="destination-desc">
                        <p>Pantai legendaris dengan ombak besar dan pemandangan sunset yang menakjubkan.</p>
                        <button class="btn-outline">Pesan</button>
                    </div>
                </div>
            </div>

            <div class="destination-card">
                <img src="assets/images/layanan/datarantinggidieng.jpeg" alt="Dieng Plateau">
                <div class="destination-info">
                    <h3>Dataran Tinggi Dieng</h3>
                    <p>Wonosobo, Jawa Tengah</p>
                    <div class="destination-desc">
                        <p>Kawasan vulkanik dengan udara sejuk, candi kuno, dan telaga warna yang mempesona.</p>
                        <button class="btn-outline">Pesan</button>
                    </div>
                </div>
            </div>

            <div class="destination-card">
                <img src="assets/images/layanan/tangkubanperahu.jpeg" alt="Tangkuban Perahu">
                <div class="destination-info">
                    <h3>Gunung Tangkuban Perahu</h3>
                    <p>Bandung, Jawa Barat</p>
                    <div class="destination-desc">
                        <p>Gunung berapi aktif dengan kawah yang bisa dikunjungi dan legenda Sangkuriang.</p>
                        <button class="btn-outline">Pesan</button>
                    </div>
                </div>
            </div>

            <div class="destination-card">
                <img src="assets/images/layanan/pantaikuta.jpeg" alt="Karimunjawa">
                <div class="destination-info">
                    <h3>Pantai Kuta</h3>
                    <p>Badung, Bali</p>
                    <div class="destination-desc">
                        <p>Surga tropis dengan pantai pasir putih dan terumbu karang yang indah.</p>
                        <button class="btn-outline">Pesan</button>
                    </div>
                </div>
            </div>

            <div class="destination-card">
                <img src="assets/images/layanan/kawahijen.jpeg" alt="Kawah Ijen">
                <div class="destination-info">
                    <h3>Kawah Ijen</h3>
                    <p>Banyuwangi, Jawa Timur</p>
                    <div class="destination-desc">
                        <p>Fenomena blue fire dan danau asam terbesar di dunia dengan warna turquoise.</p>
                        <button class="btn-outline">Pesan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="cta-content">
            <h2>Siap Memulai Perjalanan Anda?</h2>
            <p>Hubungi kami sekarang untuk mendapatkan penawaran terbaik dan konsultasi gratis mengenai rencana perjalanan Anda</p>
            <div class="cta-buttons">
                <button class="btn-primary"><i class="fas fa-phone-alt"></i> Hubungi Kami</button>
                <button class="btn-secondary"><i class="fa-brands fa-square-whatsapp"></i> Chat WhatsApp</button>
            </div>
        </div>
    </section>

<?= $this->endsection('content') ?>