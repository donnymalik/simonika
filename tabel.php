<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" >

    $(document).ready(function () {

        /* */

<?php if ($_GET['page'] == 'home'): ?>
            var grid_data = "inovasi-grid-data.php";
    <?php $sql = "SELECT jk_krk  FROM ii GROUP BY jk_krk"; ?>


<?php elseif ($_GET['page'] == 'home3'): ?>
            var grid_data = "inovasi-grid-data3.php";
    <?php $sql = "SELECT iii_ji  FROM iii GROUP BY iii_ji"; ?>

<?php elseif ($_GET['page'] == 'home4'): ?>
            var grid_data = "inovasi-grid-data4.php";
    <?php $sql = "SELECT iv_ji  FROM iv GROUP BY iv_ji"; ?>


<?php endif ?>


        var dataTable = $('#inovasi-grid').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: grid_data, // json datasource
                type: "post", // method  , by default get
                error: function () {  // error handling
                    $(".inovasi-grid-error").html("");
                    $("#inovasi-grid").append('<tbody class="inovasi-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                    $("#inovasi-grid_processing").css("display", "none");
                }
            }
        });
        $("#inovasi-grid_filter").css("display", "none");  // hiding global search box
        $('.search-input-text').on('keyup click', function () {   // for text boxes
            var i = $(this).attr('data-column');  // getting column index
            var v = $(this).val();  // getting search input value
            dataTable.columns(i).search(v).draw();
        });
        $('.search-input-select').on('change', function () {   // for select box
            var i = $(this).attr('data-column');
            var v = $(this).val();
            dataTable.columns(i).search(v).draw();
        });
    });
</script>
<div style="margin-top: 4%;">
    <table id="inovasi-grid" class="items table table-striped table-bordered table-hover display" >
        <thead>
            <tr style="font-weight:bold;color:#fff" align="left" bgcolor="#2F937B">			<th style="padding:15px 10px">No</th>
                <th style="padding:15px 8px">Nama Diklat</th>
                <th style="padding:15px 10px">Jenis Diklat</th>
                <th style="padding:15px 10px">Gambaran Umum</th>
                <th style="padding:15px 10px">Jenis Kurikulum</th>
                <!-- <th style="padding:15px 10px">id</th> -->
            </tr>
        </thead>
        <thead>
            <tr>
                <td style="padding:15px 8px"></td>
                <td style="padding:15px 8px"><input type="text" data-column="1"  class="search-input-text form-control"></td>
                <td style="padding:15px 10px"><input type="text" data-column="2"  class="search-input-text form-control"></td>
                <td style="padding:15px 10px"><input type="text" data-column="3"  class="search-input-text form-control"></td>

                <td style="padding:15px 10px">
                    <select data-column="4"  class="search-input-select form-control">
                        <option value="">-- Pilih --</option>
                        <?php
                        include 'koneksi.php';

                        $query = mysqli_query($conn, $sql) or die(mysqli_error());
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?php echo $data[0] ?>"><?php echo $data[0] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </thead>
    </table>

</div>
