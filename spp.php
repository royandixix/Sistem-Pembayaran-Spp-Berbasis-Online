<?php

    include 'koneksi.php';

    if(isset($_GET['hal']) == "hapus"){
        $hapus = mysqli_query($koneksi, "delete from spp where id_spp = '$_GET[id_spp]'");
    
        if($hapus){
            echo "<script>
                alert('hapus data sukses!');
                document.location='spp.php';
            </script>";
    
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SPP</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <style>
.card-body-icon {
    position: absolute;
    z-index: 0;
    top: 25px;
    right: 4px;
    opacity: 0.4;
    font-size: 90px;
}
    </style>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa fa-solid fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-3">KELOMPOK 1</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboardd.php">
                    <i class="fa fa-fw fa-tachometer-alt"></i>
                    <span>HALAMAN UTAMA</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="datasiswa.php">
                    <i class="fa fa-solid fa-list"></i>
                    <span>DAFTAR SISWA</span></a>
            </li>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="pembayaran.php">
                <i class="fa fa-duotone fa-credit-card"></i>
                    <span>PEMBAYARAN</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="spp.php">
                <i class="fa fa-solid fa-money-bill-wave"></i>
                    <span>SPP</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
           

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-solid fa-scroll"></i>
                    <span>LAPORAN</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="#">PEMBAYARAN SPP</a>
                        <a class="collapse-item" href="#">PEMBAYARAN PRAK</a>
                    </div>
                </div>
            </li>

        

            <!-- Divider -->
            <hr class="sidebar-divider">

            
            <!-- Nav Item - Pages Collapse Menu 
 

            <!-- Divider -->
            

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

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        
                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                          
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card">
	<div class="card-header">
		<a href="tambah_spp.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
            <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text">Tambah Data SPP</span>
        </a>
	</div>
	<div class="card-body">
	<div class="table-responsive">
        <table class="table table-bordered" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID SPP</th>
                                            <th>SEMESTER</th>
                                            <th>TAHUN</th>
                                            <th>NOMINAL</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>ID SPP</th>
                                            <th>SEMESTER</th>
                                            <th>TAHUN</th>
                                            <th>NOMINAL</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        $tampil = mysqli_query($koneksi, "select * from spp");
                                        while($data = mysqli_fetch_assoc($tampil)):
                                    ?>
	                                        <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data['id_spp'] ?></td>
                                                <td><?= $data['semester'] ?></td>
                                                <td><?= $data['tahun'] ?></td>
                                                <td><?= $data['nominal'] ?></td>
                                                <td>
                                                    <a href="edit_spp.php?hal=edit&id_spp=<?= $data['id_spp'] ?>" class="btn btn-warning">
                                                    <i class="fa fa-pen mr-2"></i>Edit
                                                    </a>
                                                </td>
                                                <td>
                                                <a href="spp.php?hal=hapus&id_spp=<?= $data['id_spp'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')" class="btn btn-danger">
                                                <i class="fa fa-trash mr-2"></i>Hapus
                                                </a>
                                                </td>
	                                        </tr>

                                        <?php endwhile; ?>
                                    
                                    </tbody>
                                </table>
                               
                            </div>
                            </div>
                        </div>     
                        
                    <div class="card-footer">
                        <a href="dashboardd.php" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                            <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">Kembali</span>
                        </a>
                    </div>
                </div>


                             
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span></span>
                    </div>
                </div>
            </footer>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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

</body>

</html>