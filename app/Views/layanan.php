<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<?php
// WhatsApp helper function
function whatsapp_link($service, $destination = '') {
    $number = "6281266691786"; // Your WhatsApp number
    
    $templates = [
        'antar-jemput' => "Halo CV HS Jaya Abadi,\nSaya ingin memesan layanan Antar Jemput Antar Kota dengan detail:\n\n• Jenis Kendaraan: \n• Tanggal: \n• Jam Penjemputan: \n• Lokasi Penjemputan: \n• Tujuan: \n• Jumlah Penumpang: ",
        
        'liburan' => "Halo CV HS Jaya Abadi,\nSaya ingin memesan layanan Pengantaran Liburan dengan detail:\n\n• Destinasi: ".($destination ?: '')."\n• Tanggal Berangkat: \n• Tanggal Pulang: \n• Jumlah Orang: \n• Jenis Kendaraan: \n• Butuh Tour Guide: (Ya/Tidak)",
        
        'sewa-mobil' => "Halo CV HS Jaya Abadi,\nSaya ingin menyewa mobil + sopir dengan detail:\n\n• Jenis Mobil: \n• Durasi Sewa: \n• Tanggal Mulai: \n• Lokasi Penjemputan: \n• Tujuan: \n• Kebutuhan Khusus: ",
        
        'destinasi' => "Halo CV HS Jaya Abadi,\nSaya ingin pesan transportasi ke $destination dengan detail:\n\n• Tanggal Kunjungan: \n• Jumlah Orang: \n• Jenis Kendaraan: \n• Butuh Tour Guide: (Ya/Tidak)\n• Catatan Tambahan: ",
        
        'general' => "Halo CV HS Jaya Abadi,\nSaya ingin bertanya tentang layanan Anda.\n\nKebutuhan saya: "
    ];
    
    $message = $templates[$service] ?? $templates['general'];
    return "https://wa.me/$number?text=".rawurlencode($message);
}
?>

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
                <a href="<?= whatsapp_link('antar-jemput') ?>" class="btn-primary" target="_blank">Pesan Sekarang</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-umbrella-beach"></i>
                </div>
                <h3>Pengantaran Liburan</h3>
                <ul>
                    <li>Melayani perjalanan wisata di seluruh Pulau Jawa</li>
                    <li>Bisa termasuk paket tour dengan itinerary</li>
                    <li>Kendaraan nyaman untuk keluarga atau grup sesuai dengan kebutuhan</li>
                    <li>Optional dengan tour guide lokal</li>
                </ul>
                <a href="<?= whatsapp_link('liburan') ?>" class="btn-primary" target="_blank">Pesan Sekarang</a>
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
                <a href="<?= whatsapp_link('sewa-mobil') ?>" class="btn-primary" target="_blank">Pesan Sekarang</a>
            </div>
        </div>
    </section>

    <section class="popular-destinations">
        <div class="section-header">
            <h2>Destinasi Populer di Pulau Jawa</h2>
            <p>Beberapa lokasi wisata favorit yang sering kami layani</p>
        </div>

        <div class="destinations-grid">
            <?php foreach ($destinations as $item): ?>
                <div class="destination-card">
                    <img src="<?= base_url($item['file_path']) ?>" alt="<?= $item['alt_text'] ?>">
                    <div class="destination-info">
                        <h3><?= $item['title'] ?></h3>
                        <p><?= $item['location'] ?></p>
                        <div class="destination-desc">
                            <p><?= $item['description'] ?></p>
                            <a href="<?= whatsapp_link('destinasi', $item['title']) ?>" 
                            class="btn-outline" 
                            target="_blank">Pesan</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="cta-section">
        <div class="cta-content">
            <h2>Siap Memulai Perjalanan Anda?</h2>
            <p>Hubungi kami sekarang untuk mendapatkan penawaran terbaik dan konsultasi gratis mengenai rencana perjalanan Anda</p>
            <div class="cta-buttons">
                <a href="tel:+6281339339409" class="btn-primary"><i class="fas fa-phone-alt"></i> Hubungi Kami</a>
                <a href="<?= whatsapp_link('general') ?>" class="btn-secondary" target="_blank"><i class="fa-brands fa-square-whatsapp"></i> Chat WhatsApp</a>
            </div>
        </div>
    </section>

<?= $this->endsection('content') ?>