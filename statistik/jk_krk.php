<html>

<head>
<title>Si-MONIKA (Sistem Informasi Manajemen Online Kurikulum Kediklatan)</title>
  <link rel="shortcut icon" href="images/logo.png">
<link rel="stylesheet" href="assets/css/bostrap.min.css">
<link rel="stylesheet" href="assets/css/hightchart.css">
<script src="assets/css/jquery1.min.js"></script>

<script src="assets/css/highcharts.js"></script>
</head>
<body>
<div class="recommended-info">
<h3>Statistik Jenis Kurikulum</h3>
  <div class="about-grids">
    <div class="about-bottom-grids">
        <div class="col-sm-6 about-left">
   <div class="about-left-grids" id ="mygraph"> 
   </div>
        </div>
     </div>
  </div>

</div>
<script>
 var chart1; 
 $(document).ready(function() {
 chart1 = new Highcharts.Chart({
 chart: {
 renderTo: 'mygraph',
   type: 'column'
   },   
    title: {
    text: 'Statistik Jenis Kurikulum ', 
    },
    xAxis: {
    categories: ['Jumlah']
    },
    yAxis: {
    title: {
    text: 'Total Jenis Kurikulum'
     }
    },
    series:[
    <?php 
      include "koneksi.php";
      $sql   = "SELECT jk_krk, count(jk_krk) AS total FROM ii GRoup by jk_krk";
      $query = mysqli_query( $con, $sql )  or die(mysqli_error());
      while( $temp = mysqli_fetch_array( $query ) )
      {
        $trendbrowser=$temp['jk_krk'];                     
 $sql_total = "SELECT jk_krk,count(jk_krk) AS total FROM ii WHERE jk_krk='$trendbrowser'";        
 $query_total = mysqli_query($con,$sql_total ) or die(mysql_error());
 while( $data = mysqli_fetch_array( $query_total ) )
 {
 $total = $data['total'];                 
 }             
   ?>
     {
        name: '<?php echo $trendbrowser; ?>',
 data: [<?php echo $total; ?>]
 },
   <?php 
    }  
   ?>
   ]
  });
 }); 
</script>
</body>
</html>