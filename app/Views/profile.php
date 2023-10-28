<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

<div class=prof>
    <div style="text-align: center;">
        <img src="<?= $user['foto'] ?? base_url('assets/img/siska.jpg') ?>" class="rounded-circle mx-auto d-block py-3" alt="foto" width="160" height="190">
    </div>

    <div class="d-grid gap-3 mx-auto mt-5" style="width: 70%;">
        <button type="button" class="btn btn-secondary"><?=$user['nama']?></button>
        <button type="button" class="btn btn-secondary"><?=$user['npm']?></button>
        <button type="button" class="btn btn-secondary"><?=$user['nama_kelas']?></button>
    </div>
</div>

<?= $this->endSection()?>