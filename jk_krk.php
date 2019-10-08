
<div class="recommended-info">
    <!--<h3>Statistik Jenis Kurikulum</h3>-->
    <div class="about-grids">
        <div class="about-bottom-grids">
            <div class="col-md-12 about-left">
                <div class="about-left-grids" id ="mygraph"> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "koneksi.php";
$sql = "SELECT jk_krk, count(jk_krk) AS total FROM ii GRoup by jk_krk";
$query = mysqli_query($conn, $sql) or die(mysqli_error());

$indeks = 0;
while ($temp = mysqli_fetch_array($query)) {
    $trendbrowser[$indeks] = $temp['jk_krk'];
    $sql_total = "SELECT jk_krk,count(jk_krk) AS total FROM ii WHERE jk_krk='$trendbrowser[$indeks]'";
    $query_total = mysqli_query($conn, $sql_total) or die(mysql_error());
    
    while ($data = mysqli_fetch_array($query_total)) {
        $total[$indeks] = $data['total'];
    }
    $indeks++;
}
?>
<script src="js/highcharts.js"></script>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<script>
    var chart1;
    $(document).ready(function () {
        chart1 = new Highcharts.Chart({
            chart: {
                renderTo: 'mygraph',
                type: 'bar',
                height: 900
            },
            title: {
                text: 'Statistik Jenis Kurikulum '
            },
            xAxis: {
                categories: [
                <?php
                for($counter=0; $counter<$indeks; $counter++){
                    echo "'".$trendbrowser[$counter]."',";
                }                
                ?>]
            },
            yAxis: {
                opposite: true,
                title: {
                    text: 'Jumlah Kurikulum'
                }                
            },
            legend: {
                enabled: false
            },
            series: [
                {
                    name: 'Jenis kurikulum',
                    data: [
                    <?php
                    for($counter=0; $counter<$indeks; $counter++){
                        echo $total[$counter].',';
                    }                    
                    ?>
                    ]
                }
            ]
        });
    });
</script>