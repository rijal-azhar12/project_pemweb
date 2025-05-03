<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<style>
  .contact-header {
    position: relative;
    height: 400px;
    background: url('picture/call center.jpeg') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .dark-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 1;
  }
  .header-content {
    position: relative;
    z-index: 2;
    color: white;
    text-align: center;
  }
</style>

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
      <div class="col-lg-6 p-4 text-white" style="background-color: #3b82f6;">
        <h2><i class="fas fa-comment-dots me-2"></i> Tetap Terhubung</h2>
        <p>Kami akan selalu siap membantu kebutuhan transportasi Anda.</p>
        <div class="d-flex align-items-start mb-4">
          <i class="fas fa-phone fa-lg bg-white text-primary p-3 rounded-circle me-3"></i>
          <div>
            <h5>Telepon</h5>
            <p class="mb-0">+6281 339 339 409</p>
          </div>
        </div>
        <div class="d-flex align-items-start mb-4">
          <i class="fab fa-whatsapp fa-lg bg-white text-success p-3 rounded-circle me-3"></i>
          <div>
            <h5>WhatsApp</h5>
            <p class="mb-0">+6281 339 339 409</p>
          </div>
        </div>
        <div class="d-flex align-items-start">
          <i class="fas fa-envelope fa-lg bg-white text-danger p-3 rounded-circle me-3"></i>
          <div>
            <h5>Alamat Email</h5>
            <p class="mb-0">CVHSJayaAbadi@gmail.com</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 p-4">
        <h2 class="text-primary"><i class="fas fa-paper-plane me-2"></i> Kirim Pesan</h2>
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Nama Lengkap" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Alamat Email" required>
          </div>
          <div class="mb-3">
            <input type="tel" class="form-control" placeholder="Nomor Telepon">
          </div>
          <div class="mb-3">
            <textarea class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
