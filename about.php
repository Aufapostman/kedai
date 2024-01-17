<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>
<div class="page">
    <center><h2 class="heading-gradient">Tentang TOKO HARIAN SRC</h2></center>
    <center><p class="heading-gradient">Menyediakan berbagai macam keperluan harian 
    <br>
    </p></center>
    </br>
    <br/>
    <a href="tambah.php" class="heading-gradient"><font color = black size = 4> TAMBAH BARANG</font></a>
    <br/>
    <br/>
    <table border="10" width="957px" style="background-color: white;">
    <tr>
    <td style = background-color:white colspan = "10"><center><b><font color = black size = 20 >List Barang</font></b></center>  </td>
    </tr>
    <tr>
        <th style="background-color: linen;">Id</th>
        <th style="background-color: linen;">Nama</th>
        <th style="background-color: linen;">Kategori</th>
        <th style="background-color: linen;">Jumlah</th>
        <th style="background-color: linen;">Stok</th>
        <th style="background-color: linen;">Harga</th>
        <th style="background-color: linen;">Satuan</th>
        <th style="background-color: linen;">OPSI</th>
    </tr>
        <?php
        include 'koneksi.php';
        $id = 1;
        $data = mysqli_query($koneksi, "select * from tentang");
        while ($d = mysqli_fetch_array($data))
        {
        ?>
    <tr>
        <center><td><?php echo $id++; ?></td></center>
        <center><td><?php echo $d['Nama']; ?></td></center>
        <center><td><?php echo $d['Kategori']; ?></td></center>
        <center><td><?php echo $d['Jumlah']; ?></td></center>
        <center><td><?php echo $d['Stok']; ?></td></center>
        <center><td><?php echo $d['Harga']; ?></td></center>
        <center><td><?php echo $d['Satuan']; ?></td></center>
        <td>
        <a href="edit.php?id=<?php echo $d['id']; ?>"<font color = white>EDIT<font></a>
        <a href="hapus.php?id=<?php echo $d['id']; ?>"<font color = white>HAPUS<font></a>
        </td>
    </tr>
        <?php
        }
        ?>
</div>
</body>
</html>