<?php 
$koneksi = new mysqli ("localhost","bpsdmdjateng_simonika","53714bvdi201a","bpsdmdjateng_simonika");

?>
<?php
session_start();
header('Cache-control: private');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Si-MONIKA BPSDMD Prov. Jateng</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
   <link rel="shortcut icon" href="images/logo.png">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Kepemimpinan</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Selamat Datang di Si-MONIKA (Sistem Informasi Manajemen Online Kurikulum Kediklatan) BPSDMD Provinsi Jawa Tengah &nbsp; <a href="http://simonika.bpsdmd.jatengprov.go.id" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
				</li>
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Menu</a>
                    </li>
                    <li>
                        <a  href="?page=input"><i class="fa fa-edit fa-3x"></i> Input Data</a>
                    </li>
                    <li>
                        <a  href="?page=lihat"><i class="fa fa-qrcode fa-3x"></i> Lihat Data</a>
                    </li>
                    <li>
                        <a  href="?page=kontak"><i class="fa fa-laptop fa-3x"></i> Kontak</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    
                     <?php

                     


				switch(@$_REQUEST['page'])
        
				{
					case 'lihat':
						include "page/lihat/lihat.php";
						break;
					case 'input':
						include "page/input/input.php";
						break;
          case 'ubah':
            include "page/input/ubah.php";
            break;
          case 'hapus':
            include "page/input/hapus.php";
            break;
					case 'kontak':
						include "page/kontak/kontak.php";
						break;
				} 
				     ?>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    

    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
