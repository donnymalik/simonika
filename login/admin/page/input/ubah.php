<?php
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$id_ = $koneksi->real_escape_string($id);

$sql = $koneksi->query("select * from ii where id='$id_'");

$tampil = $sql->fetch_assoc();

$jk_krk = $tampil['jk_krk'];

$gambaran = $tampil['gambaran'];

$mk_tj = $tampil['mk_tj'];

$mu = $tampil['mu'];

$jn_dik = $tampil['jn_dik'];
?>


<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckeditor/style.js"></script>
<div class="panel panel-default">
    <div class="panel-heading">
        UBAH DATA
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form method="POST">
                    <div class="form-group">
                        <label>Nama Diklat</label>
                        <input class="form-control" name="nm_diklat" required value="<?php echo $tampil['nm_diklat']; ?>" />

                    </div>
                    <div class="form-group">
                        <label>Jenis Kurikulum</label>
                        <select class="form-control" name ="jk_krk" required >
                            <option value="Pertanian" <?php if ($jk_krk == 'Pertanian') {
    echo "selected";
} ?>> Pertanian </option>
                            <option value="Pemerintahan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Pemerintahan') {
    echo "selected";
} ?>>Pemerintahan </option>
                            <option value="ESDM" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'ESDM') {
    echo "selected";
} ?>>ESDM </option>
                            <option value="Pendidikan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Pendidikan') {
    echo "selected";
} ?>>Pendidikan </option>
                            <option value="Keuangan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Keuangan') {
    echo "selected";
} ?>>Keuangan</option>
                            <option value="Administrasi" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Administrasi') {
    echo "selected";
} ?>>Administrasi</option>
                            <option value="Pengelolaan Aset dan Barang" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Pengelolaan Aset dan Barang') {
    echo "selected";
} ?>>Pengelolaan Aset dan Barang</option>
                            <option value="Penanggulangan Bencana" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Penanggulangan Bencana') {
    echo "selected";
} ?>>Penanggulangan Bencana</option>
                            <option value="Kepamongprajaan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Kepamongprajaan') {
    echo "selected";
} ?>>Kepamongprajaan</option>
                            <option value="Pengawasan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Pengawasan') {
    echo "selected";
} ?>>Pengawasan</option>
                            <option value="Perencanaan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Perencanaan') {
    echo "selected";
} ?>>Perencanaan</option>
                            <option value="Potensi Daerah" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Potensi Daerah') {
    echo "selected";
} ?>>Potensi Daerah</option>
                            <option value="Kependudukan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Kependudukan') {
    echo "selected";
} ?>>Kependudukan</option>
                            <option value="Pemberdayaan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Pemberdayaan') {
    echo "selected";
} ?>>Pemberdayaan</option>
                            <option value="Kesehatan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Kesehatan') {
    echo "selected";
} ?>>Kesehatan</option>
                            <option value="Pengairan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Pengairan') {
    echo "selected";
} ?>>Pengairan</option>
                            <option value="Kesatuan Bangsa dan Politik" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Kesatuan Bangsa dan Politik') {
    echo "selected";
} ?>>Kesatuan Bangsa dan Politik</option>
                            <option value="Teknologi" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Teknologi') {
    echo "selected";
} ?>>Teknologi</option>
                            <option value="Kerjasama" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Kerjasama') {
    echo "selected";
} ?>>Kerjasama</option>
                            <option value="Penganggaran" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Penganggaran') {
    echo "selected";
} ?>>Penganggaran</option>
                            <option value="Sosial" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Sosial') {
    echo "selected";
} ?>>Sosial</option>
                            <option value="Ketenagakerjaan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Ketenagakerjaan') {
    echo "selected";
} ?>>Ketenagakerjaan</option>
                            <option value="Komunikasi" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Komunikasi') {
    echo "selected";
} ?>>Komunikasi</option>
                            <option value="Kepegawaian" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Kepegawaian') {
    echo "selected";
} ?>>Kepegawaian</option>
                            <option value="Pustakawan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Pustakawan') {
    echo "selected";
} ?>>Pustakawan</option>
                            <option value="Arsiparis" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Arsiparis') {
    echo "selected";
} ?>>Arsiparis</option>
                            <option value="Kediklatan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Kediklatan') {
    echo "selected";
} ?>>Kediklatan</option>
                            <option value="Transportasi" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Transportasi') {
    echo "selected";
} ?>>Transportasi</option>
                            <option value="Hukum" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Hukum') {
    echo "selected";
} ?>>Hukum</option>
                            <option value="Lingkungan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Lingkungan') {
    echo "selected";
} ?>>Lingkungan</option>
                            <option value="Kebudayaan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Kebudayaan') {
    echo "selected";
} ?>>Kebudayaan</option>
                            <option value="Perkebunan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Perkebunan') {
    echo "selected";
} ?>>Perkebunan</option>
                            <option value="Peternakan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Peternakan') {
    echo "selected";
} ?>>Peternakan</option>
                            <option value="Pelayanan Publik" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Pelayanan Publik') {
    echo "selected";
} ?>>Pelayanan Publik</option>
                            <option value="Pangan" <?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($jk_krk == 'Pangan') {
    echo "selected";
} ?>>Pangan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Diklat</label>
                        <select class="form-control" name="jn_dik" required > 
                            <option value="Diklat Teknis" <?php if ($jn_dik == 'Diklat Teknis') {
    echo "selected";
} ?>> Diklat Teknis </option>
                            <option value="Diklat Fungsional" <?php if ($jn_dik == 'Diklat Fungsional') {
    echo "selected";
} ?>> Diklat Fungsional </option>
                            <option value="Diklat Kepemimpinan" <?php if ($jn_dik == 'Diklat Kepemimpinan') {
    echo "selected";
} ?>> Diklat Kepemimpinan </option> 
                            <option value="Latihan Dasar CPNS" <?php if ($jn_dik == 'Latihan Dasar CPNS') {
    echo "selected";
} ?>>Latsar CPNS </option>  
                            <option value="Diklat Pemerintahan Desa" <?php if ($jn_dik == 'Diklat Pemerintahan Desa') {
    echo "selected";
} ?>>Diklat Pemerintahan Desa </option>
                        </select>
                    </div>  
                    <div class="form-group">
                        <label>Gambaran</label>
                        <textarea class="ckeditor" name="gambaran" required><?php echo $tampil['gambaran']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Maksud dan Tujuan</label>
                        <textarea class="ckeditor" name="mk_tj" required><?php echo $tampil['mk_tj']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Materi/Modul</label>
                        <textarea class="ckeditor" name="mu" required><?php echo $tampil['mu']; ?></textarea>
                    </div>



                    <div>
                        <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
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
    
    $sql = $koneksi->query("update ii set nm_diklat='$a_', jk_krk='$b_', gambaran='$c_', mk_tj='$d_', mu='$e_', jn_dik='$f_' where id='$id_'");

    if ($sql) {
        ?>
        <script type="text/javascript">

            alert("Ubah Berhasil Disimpan");
            window.location.href = "?page=lihat";

        </script>
        <?php
    }
    else{
        echo $koneksi->error;
    }
}
?>    