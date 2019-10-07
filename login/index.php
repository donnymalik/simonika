<?
    error_reporting(E_ALL & ~E_NOTICE);
?>
<?php
			ob_start();
				if(isset($_POST['login'])){
					include "koneksi.php";
					$cek_data = mysqli_query($conn, "SELECT * FROM user WHERE
					nama_lengkap = '".$_POST['nama_lengkap']."' AND password = '".$_POST['pass']."'");
					$data = mysqli_fetch_array($cek_data);
					$level = $data['level'];
					$email = $data['email'];
					if(mysqli_num_rows($cek_data) > 0){
					    session_start();
						$_SESSION['nama'] = $nama;
						if($level == 'admin'){
							header('location:admin/index.php');
						}elseif($level == 'teknis'){
							header('location:adminteknis/index.php');
						}elseif($level == 'kepemimpinan'){
							header('location:adminkepemimpinan/index.php');
						}elseif($level == 'fungsional'){
							header('location:adminfungsional/index.php');
						}
					}else{
						echo 'gagal login';
					}
				}
			?>
<html>
	<head>
		<title>Halaman Login</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="shortcut icon" href="images/logo.png">
	</head>
	<body>
		<div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Halaman Login Si-MONIKA </h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
			<form action="" method="POST">
				<input type="text" class="form-control" placeholder="Your Username " name="nama_lengkap" /><br>
				<input type="password" class="form-control"  placeholder="Your Password" name="pass" /><br>
				<input type="submit" name="login" class="btn btn-primary " value="Login" />
			</form>
		</div>
		</div>
		</div>
		</div>
		</div>
		    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
	</body>
</html>