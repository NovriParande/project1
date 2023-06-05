    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>EDIT PROFIL</title>
    </head>
    <body>

        <div class="container" style="margin-top: 20px;">
            <a href="read.php" type="button" class="btn btn-warning">KEMBALI</a>
            <br>
            <br>
            <h3>EDIT DATA PROFIL</h3> <br>
            <?php
            include '../project1/koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM tbl_profil WHERE id=$id");
            while ($d = mysqli_fetch_array($data))
            {
                ?>
                <form method="POST" action="update.php">  
                    <table>
                        <tr>
                            <td>Judul</td>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                <input type="text" name="judul" value="<?php echo $d['judul'];?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Perusahaan</td>
                            <td><input type="text" name="nama_perusahaan" value="<?php echo $d['nama_perusahaan'];?>"></td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td><input type="number" name="tahun" value="<?php echo $d['tahun']; ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="simpan"></td>
                        </tr>
                    </table>
                </form>
            <?php
            }
            ?>
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