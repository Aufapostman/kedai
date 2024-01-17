<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$jumlah = $_POST['jumlah'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$satuan = $_POST['satuan'];

mysqli_query($koneksi,"update tentang set nama='$nama', kategori='$kategori', jumlah='$jumlah', stok='$stok', harga='$harga', satuan='$satuan' where id='$id'");
header("location:index.php?page=about");