<?php
	include "koneksi.php";
?>
  
 
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
						text: 'Statistik Jenis Diklat'
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
						['Diklat Teknis',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jn_dik like '%Diklat Teknis%' ");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Diklat Fungsional',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jn_dik like '%Diklat Fungsional%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Diklat Kepemimpinan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jn_dik like '%Diklat Kepemimpinan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Latihan Dasar CPNS',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jn_dik like '%Latihan Dasar CPNS%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Diklat Pemerintahan Desa',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE jn_dik like '%Diklat Pemerintahan Desa%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						
						]
					}]
				});
			});

		});
				</script>
	</head>
	<body>
<script src="js/highcharts.js"></script>


<div id="container" style="min-width: 310px; height: 400px; max-width: 900px; margin: 0 auto"></div>

            <!-- end of main -->
      
        <div id="tooplate_footer">
        
            

