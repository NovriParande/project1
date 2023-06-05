<!DOCTYPE html>
<html lang="en">
    <!--MENGHUBUNGKAN SYNTAX KE BOOSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Masukkan data profil</title>
    <body>
    <!-- FORM INPUT/TAMBAH DATA -->
    <div class="container">
        <center><h1>Tambah data Perusahaan</h1></center>
        <form action="create.php" method="POST" style="margin-top: 20px;"> 
        <!-- PENGIRIMAN DATA "method POST" YANG DI PROSES PADA FILE ACTION "create.php" --> 
        <div class="row mb-3">
            <label for="inputjudul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
            <input type="text" name="judul" class="form-control" value="">
            </div>
        </div>
        <!-- buat form input --> 
        <div class="row mb-3">
            <label for="inputnamaperusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
            <div class="col-sm-10">
            <input type="text" name="nama_perusahaan" class="form-control" value="">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputtahun" class="col-sm-2 col-form-label">Tahun</label>
            <div class="col-sm-10">
            <input type="text" name="tahun" class="form-control" value="">
            </div>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </form>
    </div>

        <?php
            if(isset($_POST['simpan'])){ //EKSEKUSI SIMPAN DATA
                include ('../project1/koneksi.php'); //PANGGIL FILE "koneksi.php
                $judul = $_POST['judul']; //kirim data ke field judul 
                $nama_perusahaan = $_POST['nama_perusahaan']; //kirim data ke field nama_perusahaan
                $tahun = $_POST['tahun']; //kirim data ke field tahun
                $sql = mysqli_query($koneksi, "INSERT INTO tbl_profil (judul, nama_perusahaan, tahun) values ('$judul', '$nama_perusahaan', '$tahun')");
                //EKSEKUSI QUERY UNTUK MENYIMPAN DATA KE tbl_profil
            }
        ?>
    </body>
</html>