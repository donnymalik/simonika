<?php
	include 'koneksi.php';
?>


              <!-- end of forever fp services -->

            <div id="tooplate_main">

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
						text: 'Statistik Jenis Inovasi PIM II'
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
						['Proses',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE ii_ji like '%proses%' ");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Metode',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE ii_ji like '%metode%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Produk',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE ii_ji like '%produk%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Konseptual',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE ii_ji like '%konseptual%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Teknologi',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE ii_ji like '%teknologi%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Struktur Organisasi',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE ii_ji like '%struktur%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Hubungan',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE ii_ji like '%hubungan%'");
										$num_rows = mysql_num_rows($result);
										echo $num_rows; ?>.0],
						['Sumber Daya Manusia',   <?php
										$result = mysql_query("SELECT * FROM ii WHERE ii_ji like '%sumber%'");
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
