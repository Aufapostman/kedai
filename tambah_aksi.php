<?php
include "koneksi.php";

$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$jumlah = $_POST['jumlah'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$satuan = $_POST['satuan'];

mysqli_query($koneksi,"insert into tentang value('','$nama','$kategori','$jumlah','$stok','$harga','$satuan')");
header ("location:index.php?page=about");
?>