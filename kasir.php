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
		<a href="tambah_kasir.php" class="btn btn-primary">Kasir</a>
	    <table border="1" width="100%" class="table"  >
			<thead style="font-weight:300; background-color:black; color:white;">
				<tr>
					<td align="center">Id Kasir</td>
					<td align="center">Email </td>
					<td align="center">Username</td>
					<td align="center">Password</td>
					<td align="center">Peran</td>
					<td align="center" colspan="2">Aksi</td>			
				</tr>
			</thead>
					
            <tbody>
			<?php
				$b = mysqli_query($db, "SELECT * FROM kasir");
				$no = 1;
				while ($c = mysqli_fetch_array($b))
					{
						echo "<tr>";
						echo "<td align='center'>$c[id_kasir]</td>";
						echo "<td align='center'>$c[email]</td>";
						echo "<td align='center'>$c[username]</td>";
						echo "<td align='center'>$c[passwd]</td>";
						echo "<td align='center'>$c[peran]</td>";
						echo "<td align='center' colspan='2'><a class='btn btn-warning' href='edit_kasir.php?id=$c[id_kasir]&type=update';>edit</a>&nbsp;";
						echo "<a href='#' class='btn btn-danger' onclick=\"javascript:if(confirm('Anda yakin ingin menghapus ?')==true) {window.location.href='aksi_kasir.php?id=$c[id_kasir]&type=hapus';} \">hapus</a>";
						echo "</tr>";
					}
					?>
			</tbody>
		</table>
	</div>
</body>
</html>