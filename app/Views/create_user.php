<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

<div class="container">
    <form action="<?=base_url('user/store')?>" method="post" enctype="multipart/form-data">
<div class="row justify-content-center align-items-center h-100">
    <div class="col-6">

    <div class="mb-3 row mt-5">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input class="form-control <?=(empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>" type="text" name="nama" placeholder="Masukkan nama anda" value="<?= old('nama'); ?>">
                <div class="invalid-feedback">
                    <?= validation_show_error('nama') ?>
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">NPM</label>
            <div class="col-sm-10">
                <input class="form-control <?= (empty(validation_show_error('npm'))) ? '' : 'is-invalid' ?>" type="text" name="npm" placeholder="Masukkan NPM anda" value="<?= old('npm'); ?>"> 
                <div class="invalid-feedback">
                    <?= validation_show_error('npm') ?>
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
            <select class="form-select select<?= (empty(validation_show_error('kelas'))) ? '' : 'is-invalid' ?>" name="kelas" id="kelas">
                <?php 
                    foreach($kelas as $item):
                ?>
                <option value="<?=$item['id']?>" <?= ($item['id'] == old('kelas')) ? 'selected' : '' ?>>
                    <?=$item['nama_kelas']?>
                </option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>

    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>

	</form>
    </div>
</div>
</div>

<?= $this->endSection()?>