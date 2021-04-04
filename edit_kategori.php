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
        $a = mysqli_query($db, "SELECT * FROM kategori WHERE id_kategori = ".$_GET['id']);
        $d = mysqli_fetch_array($a);
        // var_dump($_GET['id']);
        
    ?>
    <form method="post" action="aksi_kategori.php">
        <input type="hidden" value="<?= $_GET['type'] ?>" name="type" id="type"/>
        <input type="hidden" value="<?= $_GET['id'] ?>" name="id" id="id"/>
        <table class="table">
            <tr>
                <td>Nama Kategori</td>
                <td>:</td>
                <td><input type="text" name="nk" id="nk" value="<?= $d['nama_kategori'] ?>"></td>
            </tr>
        </table>
        <input type="submit" value="Simpan">
        <a href="index.php">Kembali</a>
    </form>

</body>
</html>