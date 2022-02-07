<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <script src="<?php echo base_url()?>/assets/js/jquery-3.3.1.min.js"></script>

    <title>Belajar CRUD</title>
</head>
<body>
    <div class="container mt-3">
        <a href="<?= base_url("tambah"); ?> " class="btn btn-primary btn-md mb-3">Tambah</a>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th class="text-center">Aksi</th>
            </thead>
            <tbody>
                <?php foreach ($hasil as $baris) : ?>
                    <td><?=$baris['npm']?></td>
                    <td><?=$baris['nama']?></td>
                    <td><?=$baris['jurusan']?></td>
                    <td><?=$baris['alamat']?></td>
                    <td>
                        <div class="row">
                            <div class="col d-flex justify-content-center"><a href="<?=base_url
                            ("Beranda/edit/".$baris['id']);?>"class="btn btn-sm btn-warning">Edit</a></div>
                            |
                            <div class="col d-flex justify-content-center"><a href="<?=base_url
                            ("Beranda/hapus/".$baris['id']);?>"class="btn btn-sm btn-danger">Hapus</a></div>
                        </div>
                    </td>
            </tbody> 
            <?php endforeach ; ?>                       
        </table>
    </div>
</body>
</html>