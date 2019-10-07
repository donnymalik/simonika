<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" >

  $(document).ready(function() {



    var dataTable = $('#inovasi-grid').DataTable( {
      "processing": true,
      "serverSide": true,
      "ajax":{
        url :'inovasi-grid-data3.php', // json datasource
        type: "post",  // method  , by default get
        error: function(){  // error handling
          $(".inovasi-grid-error").html("");
          $("#inovasi-grid").append('<tbody class="inovasi-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
          $("#inovasi-grid_processing").css("display","none");
        }
      }
    } );
    $("#inovasi-grid_filter").css("display","none");  // hiding global search box
    $('.search-input-text').on( 'keyup click', function () {   // for text boxes
      var i =$(this).attr('data-column');  // getting column index
      var v =$(this).val();  // getting search input value
      dataTable.columns(i).search(v).draw();
    } );
    $('.search-input-select').on( 'change', function () {   // for select box
      var i =$(this).attr('data-column');
      var v =$(this).val();
      dataTable.columns(i).search(v).draw();
    } );
  } );
</script>
 <div style="margin-top: 4%;">
 <h1 style="font-weight:bold"> Tabel Inovasi</h1>
 	<table id="inovasi-grid" class="items table table-striped table-bordered table-hover display" >
		<thead>
			<tr style="font-weight:bold;color:#fff" align="left" bgcolor="#9a0325">			<th style="padding:15px 10px">No</th>
				<th style="padding:15px 8px">Penggagas</th>
  			<th style="padding:15px 10px">Nama Instansi</th>
 				<th style="padding:15px 10px">Nama Inovasi</th>
 				<th style="padding:15px 10px">Deskripsi</th>
 				<th style="padding:15px 10px">Jenis Inovasi</th>
 				<!-- <th style="padding:15px 10px">id</th> -->
			</tr>
		</thead>
		<thead>
			<tr>
				<td style="padding:15px 8px"></td>
				<td style="padding:15px 8px"><input type="text" data-column="1"  class="search-input-text form-control"></td>
				<td style="padding:15px 10px"><input type="text" data-column="2"  class="search-input-text form-control"></td>
				<td style="padding:15px 10px"><input type="text" data-column="3"  class="search-input-text form-control"></td>
				<td style="padding:15px 10px"><input type="text" data-column="4"  class="search-input-text form-control"></td>
				<td style="padding:15px 10px">
					<select data-column="5"  class="search-input-select form-control">
						<option value="">-- Pilih --</option>
						<?php
							include 'koneksi.php';
              $sql   = "SELECT iii_ji  FROM iii GROUP BY iii_ji"; 
							$query = mysqli_query( $conn, $sql )  or die(mysqli_error());
							while( $data = mysqli_fetch_array( $query ) )
						{
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
