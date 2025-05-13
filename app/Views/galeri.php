<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="hero">
    <div class="container">
        <h1>Testimoni & Galeri</h1>
        <p>Suara pelanggan & momen perjalanan terbaik bersama kami</p>
    </div>
</section>

<section class="gallery-section">
    <div class="container">
        <h2 class="section-title">Galeri Perjalanan</h2>
        <div class="gallery-grid">
            <div class="gallery-item" data-img="absolute.jpg" data-title="Perjalanan ke Bali" data-desc="Tour bersama rombongan PT. Sejahtera Abadi">
                <img src="<?= base_url('assets/images/galeri/pp.jpg') ?>" alt="Tebing Breksi">
                <div class="gallery-overlay">
                    <h3>Perjalanan ke Bali</h3>
                    <p>Tour bersama rombongan PT. Sejahtera Abadi</p>
                </div>
            </div>

            <div class="gallery-item" data-img="absolute.jpg" data-title="Study Tour Jogja"
                data-desc="Mengunjungi situs sejarah di Yogyakarta">
                <img src="absolute.jpg" alt="Study Tour Jogja" />
                <div class="gallery-overlay">
                    <h3>Study Tour Jogja</h3>
                    <p>Mengunjungi situs sejarah di Yogyakarta</p>
                </div>
            </div>

            <div class="gallery-item" data-img="absolute.jpg" data-title="Pantai Malang"
                data-desc="Menikmati keindahan pantai di Malang Selatan">
                <img src="<?= base_url('assets/images/galeri/ping.jpg') ?>" alt="Tebing Breksi">
                <div class="gallery-overlay">
                    <h3>Pantai Malang</h3>
                    <p>Menikmati keindahan pantai di Malang Selatan</p>
                </div>
            </div>

            <div class="gallery-item" data-img="absolute.jpg" data-title="Wisata Bromo"
                data-desc="Melihat keindahan Gunung Bromo di pagi hari">
                <img src="absolute.jpg" alt="Wisata Bromo" />
                <div class="gallery-overlay">
                    <h3>Wisata Bromo</h3>
                    <p>Melihat keindahan Gunung Bromo di pagi hari</p>
                </div>
            </div>

            <div class="gallery-item" data-img="pp.jpg" data-title="Family Gathering" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">
                <img src="absolute.jpg" alt="Family Gathering" />
                <div class="gallery-overlay">
                    <h3>Family Gathering</h3>
                    <p>Kebersamaan di Taman Safari Prigen</p>
                </div>
            </div>

            <div class="gallery-item" data-img="/api/placeholder/400/320" data-title="Ziarah Wali Songo"
                data-desc="Perjalanan religius mengunjungi makam para wali">
                <img src="/api/placeholder/400/320" alt="Ziarah Wali Songo" />
                <div class="gallery-overlay">
                    <h3>Ziarah Wali Songo</h3>
                    <p>Perjalanan religius mengunjungi makam para wali</p>
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