<?php 
require "koneksi.php";
$id = @$_GET['id'];
$a = mysqli_query($db,"SELECT c.nama_barang,b.total AS total_barang,b.jumlah,a.total AS total,a.bayar,a.kembalian FROM transaksi a 
JOIN transaksi_detail b ON a.id = b.id_tarnsaksi
JOIN barang c ON b.id_barang = c.id_barang
WHERE a.id = $id");
?>
<html>
	<head>
		<title>print</title>
	</head>
	<body>
		<script>window.print();</script>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<center>
						<p></p>
						<p></p>
						<p>Tanggal : <?php  echo date("j F Y, G:i");?></p>
					</center>
                    <center>
					<table border="1" style="width:50%;">
						<tr>
							<td>No.</td>
							<td>Barang</td>
							<td>Jumlah</td>
							<td>Total</td>
						</tr>
                        <?php 
                            $no = 0;
                            while($b = mysqli_fetch_array($a)) {
                                $no++;
                        ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $b['nama_barang'] ?></td>
							<td><?= $b['jumlah'] ?></td>
							<td><?= $b['total_barang'] ?></td>
						</tr>
                        <?php } ?>
					</table>
					<div class="pull-right">
                        <?php 
                            $c = mysqli_query($db,"SELECT * FROM transaksi WHERE id = $id");
                            $d = mysqli_fetch_array($c);
                        ?>
						Total : Rp. <?= $d['total'] ?>
						<br/>
						Bayar : Rp. <?= $d['bayar']?>
						<br/>
						Kembali : Rp. <?= $d['kembalian'] ?>
					</div>
					</center>
					<center>
						<p>Terima Kasih Telah berbelanja di toko kami !</p>
					</center>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</body>
</html>
