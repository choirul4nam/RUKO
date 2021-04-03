<?php 
    require "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
</head>
<body>
    <form method="post" action="aksi_barang.php">
        <input type="hidden" value="tambah" name="type" id="type"/>
        <table class="table">
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nb" id="nb"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><input type="text" name="deskripsi" id="deskripsi"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" id="harga"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="text" name="stock" id="stock"></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                <select name="kategori" id="kategori">
                <?php 
                    $b = mysqli_query($db, "SELECT * FROM kategori");
                    
                    while ($c = mysqli_fetch_array($b)){
                    ?>
                        <option value="<?= $c['nama_kategori'] ?>"><?= $c['nama_kategori'] ?></option>
                    <?php
                    }
                ?>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Simpan">
        <a href="index.php">Kembali</a>
    </form>

</body>
</html>