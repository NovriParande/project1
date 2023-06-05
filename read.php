<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>READ PROFIL</title>
    </head>
    <body>
        <div class="container">
            <h2 style="margin-top: 20px;">Tampilkan data perusahaan</h2>         
            <a href="create.php" type="button" class="btn btn-primary">TAMBAH DATA </a> 
            <br/>
            <br/>

            <table class="table table-striped table-bordered" style="width:100%">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Nama Perusahaan</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    include '../project1/koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM tbl_profil");
                    while($d = mysqli_fetch_array($data)){ 
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td> 
                            <td><?php echo $d['judul']; ?></td>
                            <td><?php echo $d['nama_perusahaan']; ?></td>
                            <td><?php echo $d['tahun']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $d['id']; ?>"type="button" class="btn btn-success">EDIT</a>
                                <a href="delete.php?id=<?php echo $d['id']; ?>"type="button" class="btn btn-danger">HAPUS</a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
    </html>