<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $query = mysqli_query($conn,"SELECT * FROM iii WHERE iii_id = $id") or die (mysqli_error());
    $data=mysqli_fetch_array($query);
?>

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="font-weight:bold">Inovasi Post</h1>
                <ol class="breadcrumb" style="background-color:#9a0325">
                    <li><a href="index.php?page=home3" style="font-weight:bold;color:#FFFFF0"><b>Home</b></a>
                    </li>
                    <li class="active" style="font-weight:bold"><b>Inovasi Post</b></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
            <!-- Blog Post Content Column -->
            <?php
            include 'koneksi.php';
            $id = $_GET['id']; //get the no which will updated
            $query = mysqli_query($conn,"SELECT * FROM iii WHERE iii_id = $id") or die (mysqli_error());
            while ($data=mysqli_fetch_array($query))
            {
                $idi    = $data['iii_id'];
                $pggs   = $data['iii_pgs'];
                $nis    = $data['iii_nis'];
                $niv    = $data['iii_niv'];
                $des    = $data['iii_des'];
                $jin    = $data['iii_ji'];
				$angk	= $data['iii_akt'];
				$th     = $data['iii_th'];
                $ml     = $data['iii_ml'];
				$mk	    = $data['iii_mk'];
                echo "
                        <hr>
                            <h1>
                                $niv
                            </h1>
                      
                            <div class='col-md-12'>
                                <a style='margin-bottom:10px' href='cetak3.php?id=".$idi."' target='_blank' class='btn btn-default pull-right'><i class='fa fa-print'></i> Cetak</a>
                            </div>
                        <hr>
                        <table>
                            <tr>
                                <td><p>Nama Penggagas</p><td>
                                <td style='padding-left:9px;'><p> : </p></td>
                                <td style='padding-left:9px;'><p>$pggs</p></td>

                            </tr>
                            <tr>
                                <td><p>Nama Intansi</p><td>
                                <td style='padding-left:9px;'><p> : </p></td>
                                <td style='padding-left:9px;'><p>$nis</p></td>

                            </tr>
                            <tr>

                                <td><p>Jenis Inovasi</p><td>
                                <td style='padding-left:9px;'><p> : </p></td>
                                <td style='padding-left:9px;'><p>$jin</p></td>
                            </tr>
							<tr>
                                <td><p>Angkatan</p><td>
                                <td style='padding-left:9px;'><p> : </p></td>
                                <td style='padding-left:9px;'><p>$angk</p></td>
                            </tr>
							<tr>
                                <td><p>Tahun</p><td>
                                <td style='padding-left:9px;'><p> : </p></td>
                                <td style='padding-left:9px;'><p>$th</p></td>
                            </tr>
							<tr>
                                <td><p>Milestone</p><td>
                                <td style='padding-left:9px;'><p> : </p></td>
                                <td style='padding-left:9px;'><p>$ml</p></td>
                            </tr>
							<tr>
                                <td><p>Manfaat dan Kendala</p><td>
                                <td style='padding-left:9px;'><p> : </p></td>
                                <td style='padding-left:9px;'><p>$mk</p></td>
                            </tr>
                            <tr>
                                <td><p>Deskripsi Inovasi</p><td>
                                <td style='padding-left:9px;'><p> : </p></td>
                            </tr>
                        </table>
                            <p align='justify'>$des</p>
                        ";
            }
        ?>
                <hr>

                <!-- Blog Comments -->
            </div>

            <!-- Blog Sidebar Widgets Column -->


        </div>
        <!-- /.row -->
