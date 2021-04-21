<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Data Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="create.php">Tambah Mahasiswa</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container data-mahasiswa text-right mt-5">
        <table class=" table table-info table-striped">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">NIM</th>
              <th scope="col">Alamat</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
        </table>

        <tbody>
            <?php
            // memanggil config.php yang sudah kita buat
            include 'config.php';
            // membuat variabel untuk nomor mahasiswa yang akan diincrement
            $no = 1;
            //melakukan query
            $mahasiswa = mysqli_query($koneksi, "select * from mahasiswa");
            //looping data mahasiswa
            while ($data = mysqli_fetch_array($mahasiswa)){
                ?>
                <!--menampilkan data mahasiswa ke dalam tabel-->
                <table class=" table table-dark table-striped ">
                    <tr>
                        <!-- Increment nomor baris $no++ -->
                        <td><?php echo $no++; ?></td>
                        <!-- Menampilkan data -->
                        <td><?php echo $data['nama'];?></td>
                        <td><?php echo $data['nim'];?></td>
                        <td><?php echo $data['alamat'];?></td>
                        <!-- kolom ini untuk aksi data mahasiswa -->
                        <td>
                        <!-- Aksi edit dan delete di sini menggunakan btn-sm agar tomblnya kecil -->
                        <!-- Link untuk masuk ke halaman edit -->
                        <!-- edit.php?id=<?php echo $data['id']; ?> mengirimkan id dari data  mahasiswa ke halaman edit  -->
                        <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn-warning btn-sm text-white">Edit</a>
                        <!-- Link untuk delete berdasarkan id, akan keluar confirm terlebih dahulu -->
                        <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn-danger btn-sm" onclick="return corfirm('Anda Yakin Akan Menghapus Data Mahasiswa Ini?')">Hapus</a>
                        </td>
                    </tr>    
                 </table>

            <?php
            }
            ?>
        </tbody>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>