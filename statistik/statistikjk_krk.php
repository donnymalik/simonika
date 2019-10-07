<?php
	include "k.php";
?>
<title>Si-MONIKA (Sistem Informasi Manajemen Online Kurikulum Kediklatan)</title>
  <link rel="shortcut icon" href="images/logo.png">
 
              <!-- end of forever fp services -->
									
            <div id="tooplate_main">
				<script type="text/javascript" src="js/jquery1.min.js"></script>
		<script type="text/javascript">
		$(function () {

			$(document).ready(function () {

				// Build the chart
				$('#container').highcharts({
					chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
					title: {
						text: 'Statistik Jenis Kurikulum'
					},
					tooltip: {
						pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: false
							},
							showInLegend: true
						}
					},
					series: [{
						type: 'pie',
						name: 'Data Check List',
						data: [
						['Pertanian',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Pertanian%' ");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Pemerintahan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Pemerintahan%' ");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['ESDM',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%ESDM%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Pendidikan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Pendidikan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Keuangan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Keuangan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Administrasi',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Administrasi%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Pengelolaan Aset dan Barang',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Pengelolaan Aset dan Barang%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Penanggulangan Bencana',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Penanggulangan Bencana%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Kepamongprajaan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Kepamongprajaan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Pengawasan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Pengawasan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Perencanaan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Perencanaan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Potensi Daerah',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Potensi Daerah%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Kependudukan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Kependudukan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Pemberdayaan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Pemberdayaan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Kesehatan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Kesehatan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Pengairan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Pengairan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Kesatuan Bangsa dan Politik',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Kesatuan Bangsa dan Politik%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Teknologi',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Teknologi%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Kerjasama',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Kerjasama%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Penganggaran',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Penganggaran%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Sosial',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Sosial%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Ketenagakerjaan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Ketenagakerjaan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
                        ['Komunikasi',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Komunikasi%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Kepegawaian',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Kepegawaian%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Pustakawan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Pustakawan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Arsiparis',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Arsiparis%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Kediklatan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Kediklatan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Transportasi',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Transportasi%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Hukum',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Hukum%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Lingkungan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Lingkungan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Kebudayaan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Kebudayaan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Perkebunan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Perkebunan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Peternakan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Peternakan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Pelayanan Publik',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Pelayanan Publik%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Pangan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jk_krk like '%Pangan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],

						
						]
					}]
				});
			});

		});
				</script>
	
<script src="js/highcharts.js"></script>


<div id="container" style="min-width: 310px; height: 400px; max-width: 900px; margin: 0 auto"></div>

            <!-- end of main -->
      
        <div id="tooplate_footer">
        
            

