
<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <!-- Ini halaman list user -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid ms-5 me-5">
    <a class="navbar-brand" href="#">Web Lanjut</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('/user') ?>">List User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/kelas') ?>">List Kelas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Judul -->
<div class="containerlist">

<figure class="data">
    <h2 style="text-align: center">Data User</h2>
    </figure>
    <figcaption class="blockquote-footer" style="text-align: center">
        Read Data <cite title="Source Title"></cite>
    </figcaption>
    <a href="<?= base_url('/user/create') ?>" type="button" class="btn btn-primary">Tambah Data</a>
    <table class="table table-light table-sm table-striped" style="overflow-x: auto;">
        <thead class="table-light">
            <tr>
            <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
                <th>Foto</th>
            </tr>
            </thead>
        <tbody class="table-group-divider">
            <?php
            foreach ($users as $user){
            ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                    <td>
                        <a a href="<?= base_url('user/' . $user['id']) ?>" class="btn btn-info">Detail</a>
                        <a href="<?= base_url('user/' . $user['id'] . '/edit') ?>" class="btn btn-warning">Edit</a>
                        <form action="<?= base_url('user/' . $user['id']) ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-danger"> Delete</button>
                        </form>
                        <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                    </td>
                    <td>
                        <img src="<?= $user['foto'] ?? '<default-foto>' ?>" width="100px" alt="">
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>