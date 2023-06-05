<?php
include '../project1/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tbl_profil WHERE id='$id'");
header("location:read.php");
?>