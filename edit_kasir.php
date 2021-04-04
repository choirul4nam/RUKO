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
     <?php 
        $a = mysqli_query($db, "SELECT * FROM kasir WHERE id_kasir = ".$_GET['id']);
        $d = mysqli_fetch_array($a);
        
    ?>
    <form method="post" action="aksi_kasir.php">
        <input type="hidden" value="<?= $_GET['type'] ?>" name="type" id="type"/>
        <input type="hidden" value="<?= $_GET['id'] ?>" name="id" id="id"/>
        <table class="table">
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="e" id="e" value="<?= $d['email'] ?>"></td>
            </tr>
                     <tr>
                <td>username</td>
                <td>:</td>
                <td><input type="text" name="un" id="un" value="<?= $d['username'] ?>"></td>
            </tr>
                     <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="pw" id="pw" value="<?= $d['passwd'] ?>"></td>
            </tr>
             <tr>
                <td>Peran</td>
                <td>:</td>
                <td><input type="text" name="pr" id="pr" value="<?= $d['peran'] ?>"></td>
        </table>
        <input type="submit" value="Simpan">
        <a href="index.php">Kembali</a>
    </form>

</body>
</html>