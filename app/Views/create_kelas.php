<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid ms-5 me-5">
    <a class="navbar-brand" href="#">Web Lanjut</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/user') ?>">List User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/kelas') ?>">List Kelas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <form action=<?= base_url('/kelas/store') ?> method="POST" enctype="multipart/form-data">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-6">
    <div class="mb-3 row mt-5">
    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
            <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Masukkan Nama Kelas" name="nama_kelas" value="<?= old('nama_kelas') ?>">
      <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
        <div class="invalid-feedback">
          <?= session('validation')->getError('nama_kelas'); ?>
        </div>
      <?php endif; ?>
            </div>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Tambah Data</button>
  </form>
</div>
</div>
</div>

<?= $this->endSection() ?>