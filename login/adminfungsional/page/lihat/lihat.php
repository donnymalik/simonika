<a href="?page=input" class="btn btn-primary" style="margin-bottom:5px ">Tambah Data</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tambah Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Diklat</th>
                                            <th>Jenis Kurikulum</th>
                                            <th>Gambaran Umum</th>
                                            <th>Jenis Diklat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
 										
 										$no = 1;
 										$sql = $koneksi->query('select * from ii where jn_dik="Diklat Fungsional" ');

 										while ($data= $sql->fetch_assoc()){


 										
                                    ?>
                                    
                                    	<tr>
                                    		<td><?php echo $no++; ?></td>
                                    		<td><?php echo $data['nm_diklat']; ?></td>
                                    		<td><?php echo $data['jk_krk']; ?></td>
                                    		<td><?php echo $data['gambaran']; ?></td>
                                    		<td><?php echo $data['jn_dik']; ?></td>

                                    		<td>
                                    			<a href="?page=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info" >Ubah</a>
                                    			<a onclick="return confirm('Anda Yakin Menghapus Data Ini...............????')" href="?page=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger" >Hapus</a>
                                    		</td>
                                    	</tr>
                                    		<?php } ?>
                                    </tbody>
                                
                            </div>
                        </div>
                    </div>
                </div>
</div>