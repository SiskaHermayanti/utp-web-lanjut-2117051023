
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
          <a class="nav-link active" href="<?= base_url('/kelas') ?>">List Kelas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- judul -->
<div class="containerlist">
  <figure class="data">
    <h2 style="text-align: center">Data Kelas</h2>
  </figure>
    <figcaption class="blockquote-footer" style="text-align: center">
      Read Data Kelas <cite title="Source Title"></cite>
    </figcaption>
    <a href="<?= base_url('/kelas/create') ?>" type="button" class="btn btn-primary">Tambah Data</a>
    <div class="table-responsive">
      <table class="table table-light table-sm table-striped" style="overflow-x: auto;">
        <thead class="table-light">
            <tr>
                <th>No.</th>
                <th style="text-align: center; vertical-align: middle;">Kelas</th>
                <th style="text-align: center; vertical-align: middle;">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            $no = 1;
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td style="text-align: center; vertical-align: middle;"><?= $user['nama_kelas'] ?></td>
                    <td class="d-flex justify-content-center">
                    
                      <a href="<?= base_url('kelas/' . $user['id'] . '/edit') ?>" class="btn btn-warning" style="margin-right: 5px;">Edit</a>
                      <form action="<?=base_url('kelas/' . $user['id'])?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                          <button type="submit" class="btn btn-danger" value="Delete" style="width: 80px; height: 40px; padding: 5px;">Delete</button>
                      </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>
</div>

<?= $this->endSection() ?>