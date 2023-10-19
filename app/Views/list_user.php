
<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <!-- Ini halaman list user -->

<!-- Judul -->
<div class="containerlist">

<figure>
<!-- style="text-align: center" -->
    <h2 style="text-align: center">Data User</h2>
</figure>
<figcaption class="blockquote-footer" style="text-align: center">
    Read Data <cite title="Source Title"></cite>
</figcaption>
<table class="table table-light table-sm table-striped">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
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
                <td></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
<?= $this->endSection() ?>