<?php 
    require "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
</head>
<body>
    <form method="post" action="aksi_kategori.php">
        <input type="hidden" value="tambah" name="type" id="type"/>
        <table class="table">
            <tr>
                <td>Nama Kategori</td>
                <td>:</td>
                <td><input type="text" name="nk" id="nk"></td>
            </tr>
        </table>
        <input type="submit" value="Simpan">
        <a href="index.php">Kembali</a>
    </form>

</body>
</html>