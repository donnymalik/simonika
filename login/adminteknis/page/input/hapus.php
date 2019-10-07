<?php
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$id_ = $koneksi->real_escape_string($id);  

$koneksi->query("delete from ii where id ='$id_'");
?>

<script type="text/javascript">
    window.location.href = "?page=lihat";
</script>