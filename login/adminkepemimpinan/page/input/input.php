<script type="text/javascript" src="../admin/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="..admin/ckeditor/style.js"></script>
<div class="panel panel-default">
    <div class="panel-heading">
        TAMBAH DATA
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form method="POST">
                    <div class="form-group">
                        <label>Nama Diklat</label>
                        <input class="form-control"  name="nm_diklat" required>

                    </div>
                    <div class="form-group">
                        <label>Jenis Kurikulum</label>
                        <select class="form-control" select name ="jk_krk" required>
                            <option>Pertanian</option>
                            <option>Pemerintahan</option>
                            <option>ESDM</option>
                            <option>Pendidikan</option>
                            <option>Keuangan</option>
                            <option>Administrasi</option>
                            <option>Pengelolaan Aset dan Barang</option>
                            <option>Penanggulangan Bencana</option>
                            <option>Kepamongprajaan</option>
                            <option>Pengawasan</option>
                            <option>Perencanaan</option>
                            <option>Potensi Daerah</option>
                            <option>Kependudukan</option>
                            <option>Pemberdayaan</option>
                            <option>Kesehatan</option>
                            <option>Pengairan</option>
                            <option>Kesatuan Bangsa dan Politik</option>
                            <option>Teknologi</option>
                            <option>Kerjasama</option>
                            <option>Penganggaran</option>
                            <option>Sosial</option>
                            <option>Ketenagakerjaan</option>
                            <option>Komunikasi</option>
                            <option>Kepegawaian</option>
                            <option>Pustakawan</option>
                            <option>Arsiparis</option>
                            <option>Kediklatan</option>
                            <option>Transportasi</option>
                            <option>Hukum</option>
                            <option>Lingkungan</option>
                            <option>Kebudayaan</option>
                            <option>Perkebunan</option>
                            <option>Peternakan</option>
                            <option>Pelayanan Publik</option>
                            <option>Pangan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Diklat</label>
                        <select class="form-control" select name="jn_dik" required>

                            <option>Diklat Kepemimpinan</option>
                            <option>Latihan Dasar CPNS</option>
                            <option>Diklat Pemerintahan Desa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah JP</label>
                        <input class="form-control"  name="jp" required>

                    </div>
                    <div class="form-group">
                        <label>Gambaran Umum</label>
                        <textarea class="ckeditor" rows="3" textarea name="gambaran" required=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Maksud dan Tujuan</label>
                        <textarea class="ckeditor" rows="3" class="ckeditor" textarea name="mk_tj" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Modul/Materi</label>
                        <textarea class="ckeditor" rows="3" textarea name="mu" required></textarea>
                    </div>



                    <div>
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$simpan = $_POST ['simpan'];

if ($simpan) {
    // Mencegah MySQL Injection
    $a = filter_input(INPUT_POST, "nm_diklat", FILTER_SANITIZE_STRING);
    $a_ = $koneksi->real_escape_string($a);
    
    $b = filter_input(INPUT_POST, "jk_krk", FILTER_SANITIZE_STRING);
    $b_ = $koneksi->real_escape_string($b);
    
    $c = filter_input(INPUT_POST, "gambaran");
    $c_ = $koneksi->real_escape_string($c);
    
    $d = filter_input(INPUT_POST, "mk_tj");
    $d_ = $koneksi->real_escape_string($d);
    
    $e = filter_input(INPUT_POST, "mu");
    $e_ = $koneksi->real_escape_string($e);
    
    $f = filter_input(INPUT_POST, "jn_dik", FILTER_SANITIZE_STRING);
    $f_ = $koneksi->real_escape_string($f);
    
    $g = filter_input(INPUT_POST, "jp", FILTER_SANITIZE_STRING);
    $g_ = $koneksi->real_escape_string($g);
    
    $sql = $koneksi->query("insert into ii (nm_diklat, jk_krk, gambaran, mk_tj, mu, jn_dik, jp)
			values('$a_', '$b_', '$c_', '$d_', '$e_', '$f_','$g_')");

    if ($sql) {
        ?>
        <script type="text/javascript">

            alert("Data Berhasil Disimpan");
            window.location.href = "?page=lihat";

        </script>
        <?php
    }
    else{
        echo $koneksi->error;
    }
}
?>    