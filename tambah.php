<!DOCTYPE html>
<html lang="en">
<head>
<style>
    h2.heading-gradient 
    {
    background-image: linear-gradient(45deg, #808080);
    }
    h3.heading-gradient 
    {
    background-image: linear-gradient(45deg, #808080);
    }
    footer.heading-gradient 
    {
    background-image: linear-gradient(45deg, #808080);
    }
    a.heading-gradient 
    {
    background-image: linear-gradient(45deg, #808080);
    }
    td.heading-gradient 
    {
    background-image: linear-gradient(45deg, #808080);
    }
    body
    {
        color: #000000;
        background-image: url("kedai.jpeg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
</head>
<body>
    <center><h2 class="heading-gradient">TOKO HARIAN SRC</h2></center>
    <br/>
    <a class="heading-gradient"href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3 class="heading-gradient">TAMBAH DATA BARANG</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
    <tr>
        <td class="heading-gradient">Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td class="heading-gradient">Kategori</td>
        <td><input type="text" name="kategori"></td>
    </tr>
    <tr>
        <td class="heading-gradient">Jumlah</td>
        <td><input type="text" name="jumlah"></td>
    </tr>
    <tr>
        <td class="heading-gradient">Stok</td>
        <td><input type="text" name="stok"></td>
    </tr>
    <tr>
        <td class="heading-gradient">Harga</td>
        <td><input type="text" name="harga"></td>
    </tr>
    <tr>
        <td class="heading-gradient">Satuan</td>
        <td><input type="text" name="satuan"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
</table>
</form>
</body>
</html>