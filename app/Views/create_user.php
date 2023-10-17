<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <title>Document</title>
</head>
<body>

<div class="container">
    <form action="<?=base_url('user/store')?>" method="post" enctype="multipart/form-data">
<div class="row justify-content-center align-items-center h-100">
    <div class="col-6">

        <div class="mb-3 row mt-5">
            <label class="col-sm-2 col-form-label">Nama</label>
            <input class="form-control" type="text" name="nama" placeholder="Masukkan nama anda"> 
            <div class="col-sm-10">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">NPM</label>
            <input class="form-control" type="text" name="npm" placeholder="Masukkan NPM anda"> 
            <div class="col-sm-10">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Kelas</label>
            <input class="form-control" type="text" name="kelas" placeholder="Masukkan kelas anda"> 
            <div class="col-sm-10"></div>
        </div>

    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>


	</form>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>