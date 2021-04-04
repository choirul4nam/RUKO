<?php 
    require "koneksi.php";
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
<div>
	<br/>	
		<a href="tambah_kategori.php" class="btn btn-primary">Tambah Kategori</a>
	    <table border="1" width="100%" class="table"  >
			<thead style="font-weight:300; background-color:black; color:white;">
				<tr>
					<td align="center">Id Kategori</td>
					<td align="center">Nama Kategori</td>
					<td align="center" colspan="2">Aksi</td>			
				</tr>
			</thead>
					
            <tbody>
			<?php
				$b = mysqli_query($db, "SELECT * FROM Kategori");
				$no = 1;
				while ($c = mysqli_fetch_array($b))
					{
						echo "<tr>";
						echo "<td align='center'>$c[id_kategori]</td>";
						echo "<td align='center'>$c[nama_kategori]</td>";
						echo "<td align='center' colspan='2'><a class='btn btn-warning' href='edit_kategori.php?id=$c[id_kategori]&type=update';>edit</a>&nbsp;";
						echo "<a href='#' class='btn btn-danger' onclick=\"javascript:if(confirm('Anda yakin ingin menghapus ?')==true) {window.location.href='aksi_kategori.php?id=$c[id_kategori]&type=hapus';} \">hapus</a>";
						echo "</tr>";
					}
					?>
			</tbody>
		</table>
	</div>
</body>
</html>