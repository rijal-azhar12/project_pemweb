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
            <div class="gallery-item" data-img="absolute.jpg" data-title="Perjalanan ke Bali" data-desc="Tour bersama rombongan PT. Sejahtera Abadi">
                <img src="<?= base_url('assets/images/galeri/tourbali.jpg') ?>" alt="Perjalanan ke Bali">
                <div class="gallery-overlay">
                    <h3>Tour ke Bali</h3>
                    <p>Tour bersama keluarga besar H. Iftar menuju Bali</p>
                </div>
            </div>

            <div class="gallery-item" data-title="Study Banding di Malang"
                data-desc="Mengunjungi Pusat Bisnis Komodo Industri di Malang">
                <img src="<?= base_url('assets/images/galeri/studi.jpg') ?>" alt="Study Banding di Malang" />
                <div class="gallery-overlay">
                    <h3>Study Banding di Malang</h3>
                    <p>Mengunjungi Pusat Bisnis Komodo Industri di Malang</p>
                </div>
            </div>

            <div class="gallery-item" data-img="absolute.jpg" data-title="Reuni SMAN 1 Bekasi"
                data-desc="Menikmati keindahan pantai di Malang Selatan">
                <img src="<?= base_url('assets/images/galeri/reuni.jpeg') ?>" alt="Tebing Breksi">
                <div class="gallery-overlay">
                    <h3>Reuni SMAN 1 Bekasi</h3>
                    <p>Makan, berbincang, dan mengenang masa-masa sekolah SMAN 1 Bekasi</p>
                </div>
            </div>

            <div class="gallery-item" data-img="absolute.jpg" data-title="Wisata Bromo"
                data-desc="Melihat keindahan Gunung Bromo di pagi hari">
                <img src="<?= base_url('assets/images/galeri/danau.jpeg') ?>" alt="Wisata Ranu Kumbolo" />
                <div class="gallery-overlay">
                    <h3>Wisata Ranu Kumbolo</h3>
                    <p>Menikmati tepi danau Ranu Kumbolo bersama teman-teman</p>
                </div>
            </div>

            <div class="gallery-item" data-img="pp.jpg" data-title="Sepulang dari Baitullah" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">
                <img src="<?= base_url('assets/images/galeri/jemput.jpg') ?>" alt="Sepulang dari Baitullah" />
                <div class="gallery-overlay">
                    <h3>Sepulang dari Baitullah</h3>
                    <p>Agen Travel menjemput rombongan dari perjalanan ke Baitullah</p>
                </div>
            </div>

            <div class="gallery-item" data-img="/api/placeholder/400/320" data-title="Jalan-jalan bersama warga dusun Kampung Baru"
                data-desc="Dokumentasi kegiatan wisata warga RT 3 yang diisi dengan kebersamaan, kuliner, dan momen seru.">
                <img src="<?= base_url('assets/images/galeri/k_baru.jpg') ?>" alt="Jalan-jalan bersama warga dusun Kampung Baru" />
                <div class="gallery-overlay">
                    <h3>Jalan-jalan bersama warga dusun Kampung Baru</h3>
                    <p>Dokumentasi kegiatan wisata warga RT 3 yang diisi dengan kebersamaan, kuliner, dan momen seru.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal" id="galleryModal">
    <div class="modal-content" id="modalContent">
        <span class="close-modal" onclick="document.getElementById('galleryModal').style.display='none'">&times;</span>
        <img id="modalImg" src="" alt="Gambar galeri" />
        <div class="modal-text">
            <h2 id="modalTitle"></h2>
            <p id="modalDesc"></p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>