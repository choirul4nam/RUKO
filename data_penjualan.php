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

    <title>Data Penjualan</title>

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
                    <h1 class="h3 mb-0 text-gray-800">Data Penjualan	</h1>

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
                <div>
					<br/>	
						
						<table width="100%" class="table table-striped table-hover"  >
							<thead>
								<tr>
									<td align="center">Code</td>
									<td align="center">kasir</td>
									<td align="center">Total</td>
									<td align="center">Bayar</td>
									<td align="center">Kembalian</td>
									<td align="center" colspan="2">Aksi</td>			
								</tr>
							</thead>
									
							<tbody>
							<?php
								$b = mysqli_query($db, "SELECT * FROM transaksi");
								$no = 1;
								while ($c = mysqli_fetch_array($b))
									{
										echo "<tr>";
										echo "<td align='center'>$c[code]</td>";
										echo "<td align='center'>$c[kasir]</td>";
										echo "<td align='center'>$c[total]</td>";
										echo "<td align='center'>$c[bayar]</td>";
										echo "<td align='center'>$c[kembalian]</td>";
										echo "<td align='center'><a href='detilpenjualan.php?id=$c[id]' class='btn btn-primary'>Detail</a></td>";
										echo "</tr>";
									}
									?>
							</tbody>
						</table>
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
	

</body>

</html>
