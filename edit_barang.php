<?php 
    require "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
</head>
<body>
    <?php 
        $a = mysqli_query($db, "SELECT * FROM barang WHERE id_barang = ".$_GET['id']);
        $d = mysqli_fetch_array($a);
        
    ?>
    <form method="post" action="aksi_barang.php">
        <input type="hidden" value="<?= $_GET['type'] ?>" name="type" id="type"/>
        <input type="hidden" value="<?= $_GET['id'] ?>" name="id" id="id"/>
        <table class="table">
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nb" id="nb" value="<?= $d['nama_barang'] ?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><input type="text" name="deskripsi" id="deskripsi" value="<?= $d['deskripsi'] ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" id="harga" value="<?= $d['harga'] ?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="text" name="stock" id="stock" value="<?= $d['stok'] ?>"></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                <select name="kategori" id="kategori">
                <?php 
                    $b = mysqli_query($db, "SELECT * FROM kategori");
                    
                    while ($c = mysqli_fetch_array($b)){
                        if($c['nama_kategori'] == $d['id_kategori']){
                            ?> 
                                <option value="<?= $c['nama_kategori'] ?>" selected><?= $c['nama_kategori'] ?></option>
                            <?php
                        } else { ?> 
                            <option value="<?= $c['nama_kategori'] ?>"><?= $c['nama_kategori'] ?></option>
                        <?php
                        }
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