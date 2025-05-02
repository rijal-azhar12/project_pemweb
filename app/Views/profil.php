<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="hero-banner">
    <h1>Sejarah Singkat Kami</h1>
</section>

<section class="company-profile">
    <div class="container">
        <div class="profile-grid">

            <div class="profile-image">
                <img src="<?= base_url('assets/images/inova2024.png') ?>" alt="CV HS Jaya Abadi">
            </div>
            
            <div class="profile-content">
                <p class="lead-text">
                    CV HS Jaya Abadi adalah perusahaan transportasi yang berpengalaman dalam menyediakan layanan travel dan sewa kendaraan berkualitas. Didirikan pada tahun 2017, kami telah melayani ribuan pelanggan dengan komitmen untuk memberikan pengalaman perjalanan yang aman, nyaman, dan terjangkau.
                </p>
                
                <p>
                    Dengan armada kendaraan yang terawat dan driver profesional, kami siap menjadi partner transportasi Anda untuk kebutuhan pribadi, bisnis, maupun wisata di seluruh Pulau Jawa. Kepuasan pelanggan adalah prioritas utama kami.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="achievements">
    <div class="container">
        <div class="achievement-grid">
            <div class="achievement-item">
                <div class="achievement-icon">✓</div>
                <div class="achievement-content">
                    <span class="achievement-number">8+</span>
                    <span class="achievement-label">Tahun Pengalaman</span>
                </div>
            </div>
            
            <div class="achievement-item">
                <div class="achievement-icon">✓</div>
                <div class="achievement-content">
                    <span class="achievement-number">2000+</span>
                    <span class="achievement-label">Perjalanan Sukses</span>
                </div>
            </div>
            
            <div class="achievement-item">
                <div class="achievement-icon">✓</div>
                <div class="achievement-content">
                    <span class="achievement-number">15+</span>
                    <span class="achievement-label">Armada Kendaraan</span>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?= $this->endSection() ?>