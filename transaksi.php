<?php 
    require "koneksi.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<a href="#"><?= count(@$_SESSION['barang']) ?> Pembelian </a>

<div>
	<?php 
		 $a = mysqli_query($db,"SELECT * FROM barang");
		 while ($b = mysqli_fetch_array($a)){ ?>
			<div style="width: 300px; border: 1px solid; margin: 20px;">
				<h3>Nama Barang : <?= $b['nama_barang'] ?></h3>
				<p>Harga : <?= 'Rp. '. $b['harga']?></p>
				<p>Stok : <?= $b['stok']?></p>
				<a href="tambah_keranjang.php?idbarang=<?= $b['id_barang'] ?>" style="margin: 5px">Tambahkan</a>
			</div>
	<?php } ?>
</div>
</body>
</html>

<?php 

echo count($_SESSION['barang'])."</br>"; 

// echo explode(",", $_SESSION['barang']);


