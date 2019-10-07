<!DOCTYPE html>
<html>	
    <head>
        <title>Si-MONIKA (Sistem Informasi Manajemen Online Kurikulum Kediklatan)</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/stil.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/modern-business.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <script src="js/js.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
        <link rel="shortcut icon" href="images/logo.png">
    </head>
    <body>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:100%; ">
            <!-- Carousel Indikator -->

            <div id="first-slider">
                <div id="carousel-example-generic" class="carousel slide carousel-fade">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>

                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Item 1 -->
                        <div class="item active slide1">
                            <div class="row"><div class="container">
                                    <div class="col-lg-3 text-right">
                                        <img style="max-width: 100px;"  data-animation="animated zoomInLeft" src="images/logo.png">
                                    </div>
                                    <div class="col-lg-11 text-left">
                                        <h3 data-animation="animated bounceInDown">Selamat Datang Di</h3>
                                        <h4 data-animation="animated bounceInUp">SIMONIKA BPSDMD Provinsi Jawa Tengah</h4>             
                                    </div>

                                </div></div>
                        </div> 
                        <!-- Item 2 -->
                        <div class="item slide2">
                            <div class="row"><div class="container">
                                    <div class="col-lg-7 text-left">
                                        <h3 data-animation="animated bounceInDown">"Menuju Jateng Corporate University"</h3>
                                        <h4 data-animation="animated bounceInUp">------------------</h4>
                                    </div>
                                    <div class="col-lg-5 text-right">
                                        <img style="max-width: 200px;"  data-animation="animated zoomInLeft" src="http://sp.beritasatu.com/media/images/original/20150825084759192.jpg">
                                    </div>
                                </div></div>
                        </div>


                    </div>
                    <!-- End Wrapper for slides-->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
                    </a>
                </div>
            </div>


            <footer>
                <div class="container">
                    <div class="col-lg-10 col-md-offset-1 text-center">

                        <h6>Copyright <i class="fa fa-at" style="color: #BC0213;"></i> by <a href="http://bpsdmd.jatengprov.go.id" target="_blank">BPSDMD Provinsi Jawa Tengah</a></h6>
                    </div>   
                </div>
            </footer>



            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#2F937B">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="?page=home1" style="font-weight:bold;color:#FFFFF0">Si-MONIKA (Sistem Informasi Manajemen Online Kurikulum Kediklatan)</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="?page=home1" style="font-weight:bold;color:#FFFFF0">Home</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="" style="font-weight:bold;color:#FFFFF0">Kurikulum</a>
                                <ul class="dropdown-menu">
                                    <li><a href="?page=home">Lihat Kurikulum</a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="" style="font-weight:bold;color:#FFFFF0">Statistik</a>
                                <ul class="dropdown-menu">
                                    <li><a href=statistik/statistik.php target="blank">Statistik Jenis Diklat</a></li>
                                    <li><a href=statistik/jk_krk.php target="blank">Statistik Jenis Kurikulum</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="login/index.php" style="font-weight:bold;color:#FFFFF0">Login</a>
                            </li>
                            <!--		<li>
                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="" style="font-weight:bold;color:#FFFFF0">Statistik</a>
                                                            <ul class="dropdown-menu">
                                                                    <li><a href="?page=grafik2">Pimpinan II</a></li>
                                                                    <li><a href="?page=grafik3">Pimpinan III</a></li>
                                                                    <li><a href="?page=grafik4">Pimpinan IV</a></li>
                                                            </ul>
                                            </li> -->

                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav><br>

            <div class="container">
                <?php
                switch (@$_REQUEST['page']) {
                    case 'home1':
                        include "home.php";
                        break;
                    case 'home':
                        include "tabel.php";
                        break;
                    case 'home3':
                        include "tabel.php";
                        break;
                    case 'home4':
                        include "tabel.php";
                        break;
                    case 'item':
                        include "item.php";
                        break;
                    case 'item3':
                        include "item3.php";
                        break;
                    case 'item4':
                        include "item4.php";
                        break;
                    case 'grafik2':
                        include "ii_grafik.php";
                        break;
                    default :
                        include "home.php";
                        break;
                }
                ?>
                <!-- Start Footer -->

                <!--Footer-->
                <footer>
                    <div class="container">
                        <hr>
                        <div class="row">

                            <div class="col-lg-6 col-lg-6 col-lg-12">
                                <div class="social-network">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-lg-6 col-lg-12">
                                <div class="copyright">
                                    <p>Lokasi <i class="fa fa-archive"></i> : <a target="_blank" href="http://bootstrapthemes.co"> Jalan Setiabudi No. 201 a</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </footer>
                <!-- End Footer -->
            </div>
    </body>
</html>
