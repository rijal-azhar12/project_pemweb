<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="contact-header">
  <div class="dark-overlay"></div>
  <div class="header-content">
    <h1 class="display-4 fw-bold">Hubungi Kami</h1>
    <p class="fs-4">Sebagai Teman Perjalanan Anda</p>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row bg-white shadow rounded overflow-hidden">
      <!-- Bagian Kontak Informasi -->
      <div class="col-lg-6 p-4 text-white" style="background-color: #3b82f6;">
        <h2><i class="fas fa-comment-dots me-2"></i> Tetap Terhubung</h2>
        <p>Kami akan selalu siap membantu kebutuhan transportasi Anda.</p>
        <div class="d-flex align-items-start mb-4">
          <i class="fas fa-phone fa-lg bg-white text-primary p-3 rounded-circle me-3"></i>
          <div>
            <h5>Telepon</h5>
            <p class="mb-0"><a href="tel:+6281266691786" class="text-white" style="text-decoration: none;">+6281 339 339 409</a></p>
          </div>
        </div>
        <div class="d-flex align-items-start mb-4">
          <i class="fab fa-whatsapp fa-lg bg-white text-success p-3 rounded-circle me-3"></i>
          <div>
            <h5>WhatsApp</h5>
            <p class="mb-0">
              <a href="https://wa.me/6281266691786?text=Halo%20CV%20HS%20Jaya%20Abadi,%20saya%20ingin%20bertanya%20tentang%20layanan%20travel%20anda"
                class="text-white"
                style="text-decoration: none;"
                target="_blank">
                +6281 339 339 409
              </a>
            </p>
          </div>
        </div>
        <div class="d-flex align-items-start">
          <i class="fas fa-envelope fa-lg bg-white text-danger p-3 rounded-circle me-3"></i>
          <div>
            <h5>Alamat Email</h5>
            <p class="mb-0"><a href="mailto:CVHSJayaAbadi@gmail.com" class="text-white" style="text-decoration: none;">CVHSJayaAbadi@gmail.com</a></p>
          </div>
        </div>
      </div>

      <!-- Bagian Form -->
      <div class="col-lg-6 p-4">
        <h2 class="text-primary"><i class="fas fa-paper-plane me-2"></i> Kirim Pesan</h2>

        <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('errors')): ?>
          <div class="alert alert-danger"><?= implode('<br>', session()->getFlashdata('errors')) ?></div>
        <?php endif; ?>

        <form action="<?= base_url('/kontak/send') ?>" method="post">
          <?= csrf_field() ?>
          <div class="mb-3">
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required value="<?= old('nama') ?>">
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Alamat Email" required value="<?= old('email') ?>">
          </div>
          <div class="mb-3">
            <input type="tel" name="telepon" class="form-control" placeholder="Nomor Telepon" value="<?= old('telepon') ?>">
          </div>
          <div class="mb-3">
            <textarea name="pesan" class="form-control" rows="5" placeholder="Pesan Anda" required><?= old('pesan') ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Daftar Pesan -->
  <div class="container mt-5">
    <h3 class="text-primary mb-4"><i class="fas fa-history me-2"></i> Daftar Pesan</h3>

    <?php if (session()->getFlashdata('success')) : ?>
      <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <thead class="table-primary">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Pesan</th>
            <th>Tanggal</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($pesan as $p) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= esc($p['nama']) ?></td>
              <td><?= esc($p['email']) ?></td>
              <td><?= esc($p['telepon']) ?? '-' ?></td>
              <td><?= esc($p['pesan']) ?></td>
              <td><?= date('d/m/Y H:i', strtotime($p['tanggal'])) ?></td>
              <td>
                <a href="<?= base_url('/kontak/edit/' . $p['id']) ?>" class="btn btn-sm btn-warning">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="<?= base_url('/kontak/delete/' . $p['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<?= $this->endSection() ?>