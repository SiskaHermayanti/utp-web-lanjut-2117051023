<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class=mt-2
    style="width: 500px;
    padding: 40px 35px;
    position: absolute;
    top: 100px;
    left: 0;
    right: 0;
    margin: 0 auto; /* Mengatur elemen ke tengah */
    border-radius: 20px;
    background-color: whitesmoke;">
    
        <div style="text-align: center;">
            <img src="<?= $user['foto'] ?? base_url('assets/img/siska.jpg') ?>" class="rounded-circle mx-auto d-block py-3" alt="foto" width="160" height="190">
        </div>
            
        <div class="d-grid gap-3 mx-auto mt-5" style="width: 70%;">
            <button type="button" class="btn btn-secondary"><?=$nama?></button>
            <button type="button" class="btn btn-secondary"><?=$npm?></button>
            <button type="button" class="btn btn-secondary"><?=$kelas?></button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>