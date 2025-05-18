<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="gll_hero">
    <div class="container">
        <h1>Galeri</h1>
        <p>Momen perjalanan terbaik bersama kami</p>
    </div>
</section>

<section class="gallery-section">
    <div class="container">
        <h2 class="section-title">Galeri Perjalanan</h2>
        <div class="gallery-grid">

            <div class="gallery-item">
                <img src="<?= base_url('assets/images/galeri/tourbali.jpg') ?>" alt="Perjalanan ke Bali">
                <div class="gallery-overlay">
                    <h3>Tour ke Bali</h3>
                    <p>Tour bersama keluarga besar H. Iftar menuju Bali</p>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= base_url('assets/images/galeri/studi.jpg') ?>" alt="Study Banding di Malang" />
                <div class="gallery-overlay">
                    <h3>Study Banding di Malang</h3>
                    <p>Mengunjungi Pusat Bisnis Komodo Industri di Malang</p>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= base_url('assets/images/galeri/reuni.jpeg') ?>" alt="Tebing Breksi">
                <div class="gallery-overlay">
                    <h3>Reuni SMAN 1 Bekasi</h3>
                    <p>Makan, berbincang, dan mengenang masa-masa sekolah SMAN 1 Bekasi</p>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= base_url('assets/images/galeri/danau.jpeg') ?>" alt="Wisata Ranu Kumbolo" />
                <div class="gallery-overlay">
                    <h3>Wisata Ranu Kumbolo</h3>
                    <p>Menikmati tepi danau Ranu Kumbolo bersama teman-teman</p>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= base_url('assets/images/galeri/jemput.jpg') ?>" alt="Sepulang dari Baitullah" />
                <div class="gallery-overlay">
                    <h3>Sepulang dari Baitullah</h3>
                    <p>Agen Travel menjemput rombongan dari perjalanan ke Baitullah</p>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= base_url('assets/images/galeri/k_baru.jpg') ?>" alt="Jalan-jalan bersama warga dusun Kampung Baru" />
                <div class="gallery-overlay">
                    <h3>Jalan-jalan bersama warga dusun Kampung Baru</h3>
                    <p>Dokumentasi kegiatan wisata warga RT 3 yang diisi dengan kebersamaan, kuliner, dan momen seru.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>