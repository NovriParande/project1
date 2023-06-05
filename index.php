<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>WEB 2</title>
    </head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">

                <?php
                include "koneksi.php";
                $tampildata = "SELECT * FROM tbl_profil WHERE id=1";
                $query = mysqli_query($koneksi,$tampildata);
                while ($row = mysqli_fetch_array($query))
                {
                    echo '<td>' . $row['judul'] . '<td>';
                }
                
                ?>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Bio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menawarkan jasa
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Mobile Developer</a></li>
                        <li><a class="dropdown-item" href="#">Web Developer</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Dekstop App</a></li>
                        </ul>
                    </li>
                    </ul>
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="margin-top: 30px;">
                <div class="carousel-item active">
                <?php
                    include "koneksi.php";
                    $tampildata = "SELECT * FROM tbl_carousel WHERE id=1";
                    $query = mysqli_query($koneksi,$tampildata);
                    while ($row = mysqli_fetch_array($query))
                    {
                        echo "<img src='$row[gambar]' width='1250px' height='660px'/>";
                    }
                ?>
                </div>
                <div class="carousel-item">
                <?php
                    include "koneksi.php";
                    $tampildata = "SELECT * FROM tbl_carousel WHERE id=2";
                    $query = mysqli_query($koneksi,$tampildata);
                    while ($row = mysqli_fetch_array($query))
                    {
                        echo "<img src='$row[gambar]' width='1250px' height='660px'/>";
                    }
                ?>
                
                </div>
                <div class="carousel-item">
                <?php
                    include "koneksi.php";
                    $tampildata = "SELECT * FROM tbl_carousel WHERE id=3";
                    $query = mysqli_query($koneksi,$tampildata);
                    while ($row = mysqli_fetch_array($query))
                    {
                        echo "<img src='$row[gambar]' width='1250px' height='660px'/>";
                    }
                ?>
                </div>
            </div>
        </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
        <div class="container">
            <div class=" row align-items-start">
                <center><h2>Kami Menawarkan Jasa</h2></center>
            </div>

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <?php
                    include "koneksi.php";
                    $tampildata = "SELECT * FROM tbl_jasa WHERE id=21";
                    $query = mysqli_query($koneksi, $tampildata);
                    while ($row = mysqli_fetch_array($query))
                    {
                        echo '<td>' . $row['jenis_jasa'] . '</td';
                    }
                    ?>
                        </button>
                    </h2>
                    
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        <?php
                            include "koneksi.php";
                            $tampildata = "SELECT * FROM tbl_jasa WHERE id=21";
                            $query = mysqli_query($koneksi, $tampildata);
                            while ($row = mysqli_fetch_array($query))
                            {
                                echo '<td>' . $row['penjelasan'] . '</td';
                            }
                        ?>
                        </div>
                    </div>
                </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <?php
                        include "koneksi.php";
                        $tampildata = "SELECT * FROM tbl_jasa WHERE id=22";
                        $query = mysqli_query($koneksi, $tampildata);
                        while ($row = mysqli_fetch_array($query))                   
                        {
                            echo '<td>' . $row['jenis_jasa'] . '</td';
                        }
                        ?>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        <?php
                        include "koneksi.php";
                        $tampildata = "SELECT * FROM tbl_jasa WHERE id=22";
                        $query = mysqli_query($koneksi, $tampildata);
                        while ($row = mysqli_fetch_array($query))
                        {
                            echo '<td>' . $row['penjelasan'] . '</td';
                        }
                        ?>
                        </div>
                    </div>
                    </div>

                    <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <?php
                        include "koneksi.php";
                        $tampildata = "SELECT * FROM tbl_jasa WHERE id=23";
                        $query = mysqli_query($koneksi, $tampildata);
                        while ($row = mysqli_fetch_array($query))
                        {
                            echo '<td>' . $row['jenis_jasa'] . '</td';
                        }
                        ?>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                        <?php
                        include "koneksi.php";
                        $tampildata = "SELECT * FROM tbl_jasa WHERE id=23";
                        $query = mysqli_query($koneksi, $tampildata);
                        while ($row = mysqli_fetch_array($query))
                        {
                            echo '<td>' . $row['penjelasan'] . '</td';
                        }
                        ?>
                        </div>
                    </div>
                    </div>
                </div>
        </div>

                        <!-- gambar ke dua -->

        <div class="card-group" style="margin-top: 20px;">
            <div class="card">
                <?php
                    include "koneksi.php";
                    $tampildata = "SELECT * FROM tbl_karyawan WHERE id=7";
                    $query = mysqli_query($koneksi,$tampildata);
                    while ($row = mysqli_fetch_array($query))
                    {
                        echo "<img src='$row[gambar]' height='250px'/>";
                    }
                ?>
                <div class="card-body">
                <h5 class="card-title">
                <?php
                    include "koneksi.php";
                    $tampildata = "SELECT * FROM tbl_karyawan WHERE id=7";
                    $query = mysqli_query($koneksi,$tampildata);
                    while ($row = mysqli_fetch_array($query))
                    {
                        echo '<td>' . $row['nama'] . '<td>';
                    }
                ?>
                </h5>
                <p class="card-text" style="font-size: 16px;">
                <?php
                    include "koneksi.php";
                    $tampildata = "SELECT * FROM tbl_karyawan WHERE id=7";
                    $query = mysqli_query($koneksi,$tampildata);
                    while ($row = mysqli_fetch_array($query))
                    {
                        echo '<td>' . $row['skill'] . '<td>';
                    }
                ?>
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>

            <div class="card">
                <?php
                    include "koneksi.php";
                    $tampildata = "SELECT * FROM tbl_karyawan WHERE id=8";
                    $query = mysqli_query($koneksi,$tampildata);
                    while ($row = mysqli_fetch_array($query))
                    {
                        echo "<img src='$row[gambar]' height='250px'/>";
                    }
                ?>
                <div class="card-body">
                    <h5 class="card-title">
                    <?php
                    include "koneksi.php";
                    $tampildata = "SELECT * FROM tbl_karyawan WHERE id=8";
                    $query = mysqli_query($koneksi, $tampildata);
                    while ($row = mysqli_fetch_array($query))
                    {
                        echo '<td>' . $row['nama'] . '</td';
                    }
                    ?>
                </p>
                    </h5>
                    <p class="card-text" style="font-size: 16px;">
                    <?php
                    include "koneksi.php";
                    $tampildata = "SELECT * FROM tbl_karyawan WHERE id=8";
                    $query = mysqli_query($koneksi, $tampildata);
                    while ($row = mysqli_fetch_array($query))
                    {
                        echo '<td>' . $row['skill'] . '</td';
                    }
                    ?>
                </p>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <div class="card">
            <?php
                    include "koneksi.php";
                    $tampildata = "SELECT * FROM tbl_karyawan WHERE id=9";
                    $query = mysqli_query($koneksi,$tampildata);
                    while ($row = mysqli_fetch_array($query))
                    {
                        echo "<img src='$row[gambar]' height='250px'/>";
                    }
                ?>
                <div class="card-body">
                    <h5 class="card-title">
                    <?php
                    include "koneksi.php";
                    $tampildata = "SELECT * FROM tbl_karyawan WHERE id=9";
                    $query = mysqli_query($koneksi, $tampildata);
                    while ($row = mysqli_fetch_array($query))
                    {
                        echo '<td>' . $row['nama'] . '</td';
                    }
                    ?>
                    </h5>
                    <p class="card-text" style="font-size: 16px;">
                    <?php
                    include "koneksi.php";
                    $tampildata = "SELECT * FROM tbl_karyawan WHERE id=9";
                    $query = mysqli_query($koneksi, $tampildata);
                    while ($row = mysqli_fetch_array($query))
                    {
                        echo '<td>' . $row['skill'] . '</td';
                    }
                    ?>
                </p>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row align-items-start">
                <center><h2>Contact Us</h2></center>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPesan" class="form-label">Tinggalkan Pesan</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">

    </script>
    -->
</body>
</html>