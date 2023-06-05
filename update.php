<?php
include '../project1/koneksi.php'; //panggil file "koneksi.php" koneksi ke database

$id = $_POST ['id']; //deklarasi variabel "$id" untuk mengirim data ke field "id"

$judul = $_POST ['judul']; //deklarasi variabel "$judul" untuk mengirim data ke field "id"

$nama_perusahaan = $_POST ['nama_perusahaan']; 
//deklarasi variabel "$nama_perusahaan" untuk mengirim data ke field "nama_perusahaan"

$tahun = $_POST ['tahun']; //deklarasi variabel "$tahun" untuk mengirim data ke field "tahun"
mysqli_query($koneksi, "UPDATE tbl_profil SET judul='$judul', nama_perusahaan='$nama_perusahaan', tahun='$tahun' WHERE id='$id'");
header("location:read.php");
?>