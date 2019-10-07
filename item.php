<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $query = mysqli_query($conn,"SELECT * FROM ii WHERE id = $id") or die (mysqli_error());
    $data=mysqli_fetch_array($query);
?>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="font-weight:bold">Data Kurikulum</h1>
                <ol class="breadcrumb" style="background-color:#2F937B">
                    <li><a href="index.php?page=home" style="font-weight:bold;color:#FFFFF0"><b>Home</b></a>
                    </li>
                    <li class="active" style="font-weight:bold"><b>E-Kurikulum</b></li>
                </ol>
            </div>
        </div>
          <?php $sql   = "SELECT jk_krk  FROM ii GROUP BY jk_krk"; ?>

        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
            <!-- Blog Post Content Column -->
            <?php
            include 'koneksi.php';
            $id = $_GET['id']; //get the no which will updated
            $query = mysqli_query($conn,"SELECT * FROM ii WHERE id = $id") or die (mysqli_error());
            while ($data=mysqli_fetch_array($query))
            {
                $idi    = $data['id'];
                $nm_diklat   = $data['nm_diklat'];
                $jn_dik    = $data['jn_dik'];
                $gambaran    = $data['gambaran'];
                $jp        = $data['jp'];
                $mk_tj    = $data['mk_tj'];
                $mu    = $data['mu'];
				
                $jk_krk     = $data['jk_krk'];
				
                echo "
                        <hr>
                            <h1>
                                $nm_diklat
                            </h1>
                      
                            
                        <hr>
                        <table>
                            
                            <tr>
                                <td><p><strong>JENIS KURIKULUM</p><td>
                                <td style='padding-left:9px;'><p> : </p></td>
                                <td style='padding-left:9px;'><p>$jk_krk</p></td>

                            </tr>
                            <tr>
                                <td><p><strong>JENIS DIKLAT</p><td>
                                <td style='padding-left:9px;'><p> : </p></td>
                                <td style='padding-left:9px;'><p>$jn_dik</p></td>
                            </tr>
                             <tr>
                                <td><p><strong>JUMLAH JP</p><td>
                                <td style='padding-left:9px;'><p> : </p></td>
                                <td style='padding-left:9px;'><p>$jp</p></td>
                            </tr>
                        </table>
                        <table>
                                <tr>
                                <td><p><strong>GAMBARAN UMUM</p><td>
                                <td style='padding-left:9px;'><p> : </p></td>
                                </tr>
                        </table>
                                <p align='justify'>$gambaran</p>
                                
                             <table>
                                <tr>
                                <td><p><strong>MAKSUD DAN TUJUAN</p><td>
                                <td style='padding-left:9px;'><p> : </p></td>
                                </tr>
                        </table>
                                <p align='justify'>$mk_tj</p>
						<table>	
                           <tr>
                                <td><p><strong>MODUL/MATERI</p><td>
                                <td style='padding-left:9px;'><p> : </p></td>
                                

                            </tr>
                        </table>
                            <p align='justify'>$mu</p>
                        ";
            }
        ?>
                <hr>

                <!-- Blog Comments -->
            </div>

            <!-- Blog Sidebar Widgets Column -->


        </div>
        <!-- /.row -->
