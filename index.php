<?php 
    //require "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheel" href="css/bootstrap.css">
</head>
<body>
<div>
	<br/>	
	    <table border="0" width="100%" class="table"  >
			<thead style="font-weight:300; background-color:black; color:white;">
				<tr>
					<td align="center">Id Barang</td>
					<td align="center">Nama Barang</td>
					<td align="center">Deskripsi</td>                    
					<td align="center">Harga</td>
					<td align="center">Stok</td>
					<td align="center">Kategori</td>
					<td align="center" colspan="2">Aksi</td>			
				</tr>
			</thead>
					
            <tbody>
			<?php
				$a = "SELECT * FROM barang ORDER By id_barang asc";
				$b = mysql_query($a) or die (mysql_error());
				$no = 1;
				while ($c = mysql_fetch_array($b))
					{
						echo "<tr>";
						echo "<td align='center'>$c[id_barang]</td>";
						echo "<td align='center'>$c[nama_barang]</td>";
						echo "<td align='center'>$c[deskripsi]</td>";
						echo "<td align='center'>$c[harga]</td>";
						echo "<td align='center'>$c[stok]</td>";
						echo "<td align='center'>$c[kategori]</td>";
						echo "<td align='center' colspan='2'><a class='btn btn-warning' href='edit_barang.php?id=$c[id_barang]';>edit</a>&nbsp;";
						echo "<a href='#' class='btn btn-danger' onclick=\"javascript:if(confirm('Anda yakin ingin menghapus ?')==true) {window.location.href='hapus_barang.php?id=$c[id_barang]';} \">hapus</a>";
						echo "</tr>";
					}
					?>
			</tbody>
		</table>
	</div>
</body>
</html>