<?php 
    require "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kasir</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
</head>
<body>
    <form method="post" action="aksi_kasir.php">
        <input type="hidden" value="tambah" name="type" id="type"/>
        <table class="table">
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="e" id="e"></td>
            </tr>
                     <tr>
                <td>username</td>
                <td>:</td>
                <td><input type="text" name="un" id="un"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="pw" id="pw"></td>
            </tr>
            <tr>
                <td>Peran</td>
                <td>:</td>
                <td><input type="text" name="pr" id="pr"></td>
            </tr>
        </table>
        <input type="submit" value="Simpan">
        <a href="index.php">Kembali</a>
    </form>

</body>
</html>