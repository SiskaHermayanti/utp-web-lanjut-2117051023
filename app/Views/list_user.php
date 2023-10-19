
<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <!-- Ini halaman list user -->

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
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                    <td>
                        <img src="<?= $user['foto'] ?? '<default-foto>' ?>" width="45px" height="45px" alt="">
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>