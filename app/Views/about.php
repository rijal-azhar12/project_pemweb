<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

    <section class="about-header">

        <div class="dark-overlay"></div>

        <div class="header-content">
            <h1>Tentang Kami</h1>
            <p>Perjalanan sejak 2013</p>
        </div>
    </section>

    <section class="history-section">
        <div class="container">
            
            <div class="history-card left-card">
            <div class="card-image">
                <img src="<?= base_url($historyImage['file_path'] ?? 'assets/images/about/fotbar.jpg') ?>" 
                    alt="<?= $historyImage['alt_text'] ?? 'Pendirian Perusahaan' ?>">
            </div>

                <div class="card-content">
                    <h3>Sedikit Sejarah Kami</h3>
                    <p>CV HS Jaya Abadi adalah perusahaan transportasi yang berkomitmen dalam menyediakan layanan travel dan sewa kendaraan berkualitas tinggi. Didirikan pada tahun 2013, perusahaan ini bermula dari satu unit kendaraan dan semangat seorang pengusaha lokal yang ingin menghadirkan solusi transportasi yang andal bagi masyarakat di wilayah Jawa Timur. Seiring berjalannya waktu, CV HS Jaya Abadi terus berkembang berkat dedikasi terhadap kepuasan pelanggan dan konsistensi dalam menjaga kualitas layanan. Hingga kini, kami telah melayani lebih dari 52.000 perjalanan sukses, menjadi bukti nyata kepercayaan pelanggan terhadap profesionalisme dan integritas kami. Dengan pengalaman lebih dari satu dekade, kami bangga menjadi mitra perjalanan yang dapat diandalkan untuk berbagai kebutuhan transportasi, baik pribadi, bisnis, maupun wisata.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="vision-mission-section">
        <div class="container">
            <div class="vm-container">
                <div class="vm-main-card">
                    <h2 class="vm-main-title">Visi & Misi Perusahaan</h2>
                    
                    <div class="vm-grid">
                        <div class="vm-card">
                            <div class="vm-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3>Visi</h3>
                            <p>Menjadi penyedia layanan transportasi terdepan di Jawa Timur dengan kenyamanan dan keamanan sebagai prioritas utama.</p>
                        </div>
                        <div class="vm-card">
                            <div class="vm-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3>Misi</h3>
                            <ul>
                                <li>Menyediakan armada terawat dengan harga kompetitif</li>
                                <li>Memberikan pelayanan ramah dan profesional</li>
                                <li>Memastikan keselamatan penumpang sebagai prioritas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fleet-section">
        <div class="container">
            <div class="fleet-container">
                <div class="fleet-main-card">
                    <h2 class="fleet-main-title">Armada Profesional & Prestasi</h2>
                    
                    <div class="fleet-content">
                        <div class="fleet-image">
                            <img src="<?= base_url($fleetImage['file_path'] ?? 'assets/images/hiace.jpg') ?>" 
                                alt="<?= $fleetImage['alt_text'] ?? 'Armada Profesional' ?>">
                        </div>
                        <div class="fleet-details">
                            <h3>Armada Profesional</h3>
                            <p>Dengan armada kendaraan yang terawat dan driver profesional, kami 
                                siap menjadi partner transportasi Anda untuk kebutuhan pribadi, bisnis, maupun wisata di seluruh Pulau Jawa. Kepuasan pelanggan adalah prioritas utama kami.</p>
                            
                            <div class="achievement-grid">
                                <div class="achievement-item">
                                    <div class="achievement-icon">✓</div>
                                    <div class="achievement-content">
                                        <span class="achievement-number">12+</span>
                                        <span class="achievement-label">Tahun Pengalaman</span>
                                    </div>
                                </div>
                                
                                <div class="achievement-item">
                                    <div class="achievement-icon">✓</div>
                                    <div class="achievement-content">
                                        <span class="achievement-number">57000+</span>
                                        <span class="achievement-label">Perjalanan Sukses</span>
                                    </div>
                                </div>
                                
                                <div class="achievement-item">
                                    <div class="achievement-icon">✓</div>
                                    <div class="achievement-content">
                                        <span class="achievement-number">10+</span>
                                        <span class="achievement-label">Armada Kendaraan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
