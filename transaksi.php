<?php 
    require "koneksi.php";
    session_start();
?>
<?php 
    require "koneksi.php";
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Dashboard</title>
</head>
<body>

    <a href="barang.php">Barang</a><br>
    <a href="kategori.php">Kategori</a><br>
    <a href="kasir.php">Kasir</a><br>
    <a href="transaksi.php">Transaksi</a>

    <?php 
        session_start();
        if(@$_SESSION['user'] == ""){
            header("Location: login.php");
        } else {
            
        }
    ?>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Transaksi</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Ruko</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <?php 
                // session_start();
                if(@$_SESSION['user']['peran'] == 'admin') { ?>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            
            <!-- Heading -->
            <div class="sidebar-heading">
                Master Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="barang.php">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <span>Barang</span></a>
                <a class="nav-link" href="kategori.php">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <span>Kategori</span></a>
                <a class="nav-link" href="kasir.php">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <span>User</span></a>
            </li>
            <?php } ?>
            <!-- Heading -->
            <div class="sidebar-heading">
                Transaksi
            </div>

            <li class="nav-item">
                <a class="nav-link" href="transaksi.php">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <span>Jual</span></a>
                    <a class="nav-link" href="data_penjualan.php">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <span>Data Penjualan</span></a>
            </li>
            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>       
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <h1 class="h3 mb-0 text-gray-800">Transaksi	</h1>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                        <a class="btn btn-primary" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                            Logout
                         </a>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
					<div class="col-sm-4">
						<div class="panel panel-primary">
								<div class="panel-heading">
									<h4> Cari Barang</h4>
								</div>
								<div class="panel-body">
									<input type="text" id="cari" class="form-control" name="cari" placeholder="Masukan Nama Barang">
								</div>
							</div>
						</div>
						
						<table width="100%"  class="table table-striped table-hover mt-5">
								<thead>
									<tr>
										<td align="center">Nama Barang</td>	
										<td align="center">Harga</td>	
										<td align="center">Stok</td>	
										<td align="center">Aksi</td>	
									</tr>
								</thead>
								<tbody>
									<tr id="daa">
										
									</tr>
								</tbody>
						</table>
						<hr>
						<div class="panel panel-primary">
								<div class="panel-heading">
									<h4>Keranjang</h4>
								</div>
                                <table width="100%"  class="table table-striped table-hover mt-5">
                                    <thead>
                                        <tr>
                                            <td align="center">Nama Barang</td>	
                                            <td align="center">Jumlah</td>	
                                            <td align="center">Total</td>	
                                            <td align="center">Aksi</td>	
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $b = mysqli_query($db, "SELECT * FROM transaksi_dummy");
                                            while ($c = mysqli_fetch_array($b)) {
                                        ?>
                                            <tr>
                                                <td align="center"><?= $c['nama_barang'] ?></td>
                                                <form action="aksi_transaksi.php" method="post">
                                                <td align="center"><input type="number" name="j" id="j" class="form-control" id value="<?= $c['jumlah'] ?>"/></td>	
                                                <td align="center"><?= $c['total'] ?></td>	
                                                <td align="center">
                                                    <input type="hidden" value="<?= $c['id_barang'] ?>" name="idbarang" id="idbarang"/>
                                                    <input type="hidden" value="ubah" name="type" id="type"/>
                                                    <input type="submit" class="btn btn-success" value="update"/>
                                                </form>
                                                    <a href="aksi_transaksi.php?type=hapus&idbarang=<?= $c['id_barang'] ?>" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
        
                                    </tbody>
                                </table>
                                <?php 
                                    $s = mysqli_query($db, "SELECT SUM(total) as total FROM transaksi_dummy");
                                    $d = mysqli_fetch_array($s);

                                ?>
                                <form action="bayar.php" method="post">
                                <h3>Total Semua = Rp. <?= $d['total'] ?></h3>
                                <input class="form-control" type="hidden" value="<?= $d['total'] ?>" name="t" id="t"/>
                                <table>
                                    <tr>
                                        <td>Bayar</td>
                                        <td>:</td>
                                        <td><input class="form-control" type="number" name="b" id="b"/></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Kembalian</td>
                                        <td>:</td>
                                        <td><input class="form-control" type="number" name="k" id="k"/></td>
                                        <!-- <td><a class="btn btn-primary ml-2" id="uk">Update</a></td> -->
                                    </tr>
                                </table>
                                <a href="resetKeranjang.php" class="btn btn-danger mt-2 mb-5 mr-2">Reset Keranjang</a>
                                <input type="submit" class="btn btn-success mt-2 mb-5" value="Bayar"/>
                                </form>
							</div>
						</div>
					</div>		
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
               
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Mau Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih Button "Logout" Jika Pingin Logout.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
	<script>
		$('#cari').change(function(){
			data = this.value
			$('#daa').html('')
			$.ajax({
				url: 'get_barang.php?name='+data,
				type: 'GET',
				success: function(result){
					let data = JSON.parse(result)
					$('#daa').append("<td align='center'>"+ data['nama_barang'] +"</td>")
					$('#daa').append("<td align='center'>"+ data['harga'] +"</td>")
					$('#daa').append("<td align='center'>"+ data['stok'] +"</td>")
					$('#daa').append(`<td align='center'>
								<form action="tambahKeranjang.php" method="post">
									<input type="hidden" name="idbrang" id="idbrang" value="`+ data['id_barang'] +`">
                                    <input type="hidden" name="nb" id="nb" value="`+ data['nama_barang'] +`">
                                    <input type="hidden" name="j" id="j" value="1">
                                    <input type="hidden" name="t" id="t" value="`+ data['harga'] +`">
									<input type="submit" class="btn btn-primary" value="Tambah"/>
								</form>
							</td>`)
				
				}
			})
		})
        $('#b').    change(function(){
            t = $('#t').val()
            b = $('#b').val()
            if(b >= t){
                $('#k').val(b-t)
            }
        })
	</script>

</body>

</html>
