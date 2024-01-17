<!DOCTYPE html>
<html lang="en">

<head>
<style>
    h2.heading-gradient 
    {
    background-image: linear-gradient(45deg, #808080, #808080, #808080);
    }
    h3.heading-gradient 
    {
    background-image: linear-gradient(45deg, #808080, #808080, #808080);
    }
    footer.heading-gradient 
    {
    background-image: linear-gradient(45deg, #808080, #808080, #808080);
    }
    a.heading-gradient 
    {
    background-image: linear-gradient(45deg, #808080, #808080, #808080);
    }
    td.heading-gradient 
    {
    background-image: linear-gradient(45deg, #808080, #808080, #808080);
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
    <a href="index.php">KEMBALI</a>
    <h3 class="heading-gradient">EDIT DATA BARANG</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from tentang where id='$id'");
    while ($d = mysqli_fetch_array($data))
    {
    ?>
    <form method="post" action="update.php">
    <table>
        <tr>
            <td class="heading-gradient">Nama</td>
            <td>
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            <input type="text" name="nama" value="<?php echo $d['Nama']; ?>">
            </td>
        </tr>
        <tr>
            <td class="heading-gradient">Kategori</td>
            <td>
            <input type="text" name="kategori" value="<?php echo $d['Kategori']; ?>">
            </td>
        </tr>
        <tr>
            <td class="heading-gradient">Jumlah</td>
            <td>
            <input type="number" name="jumlah" value="<?php echo $d['Jumlah']; ?>">
            </td>
        </tr>
        <tr>
            <td class="heading-gradient">Stok</td>
            <td>
            <input type="number" name="stok" value="<?php echo $d['Stok']; ?>">
            </td>
        </tr>
        <tr>
            <td class="heading-gradient">Harga</td>
            <td>
            <input type="number" name="harga" value="<?php echo $d['Harga']; ?>">
            </td>
        </tr>
        <tr>
            <td class="heading-gradient">Satuan</td>
            <td>
            <input type="text" name="satuan" value="<?php echo $d['Satuan']; ?>">
            </td>
        </tr>
        <tr>
        <td></td>
            <td>
            <input type="submit" value="SIMPAN">
            </td>
        </tr>
</table>
</form>
<?php
    }
?>
</body>
</html>