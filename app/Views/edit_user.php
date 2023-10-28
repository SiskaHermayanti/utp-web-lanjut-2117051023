<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

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
<form action="<?=base_url('user/'. $user['id'])?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT"> 
    <?= csrf_field() ?> 

<div class="row justify-content-center align-items-center h-100">
    <div class="col-6">

        <div class="mb-3 row mt-5">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input class="form-control <?=(empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>" type="text" name="nama" placeholder="Masukkan nama anda" value="<?= $user['nama'] ?>">
                <div class="invalid-feedback">
                    <?= validation_show_error('nama') ?>
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">NPM</label>
            <div class="col-sm-10">
                <input class="form-control <?= (empty(validation_show_error('npm'))) ? '' : 'is-invalid' ?>" type="text" name="npm" placeholder="Masukkan NPM anda" value="<?= $user['npm'] ?>"> 
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
                <option value="<?=$item['id']?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?>>
                    <?=$item['nama_kelas']?>
                </option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>

        <label> Choose the File to upload: </label>
    <img style="width: 100px" src="<?= $user['foto'] ?? '<default-foto>' ?>">
    <input type="file" id="foto" name="foto"/> <br /><br />

    <button type="submit" name="simpan" class="btn btn-primary">Update User</button>
        
	</form>
    </div>
</div>
</div>

<?= $this->endSection()?>