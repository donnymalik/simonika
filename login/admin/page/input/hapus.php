<?php

	$id = $_GET ['id'];

	$koneksi->query("delete from ii where id ='$id'");

?>

<script type="text/javascript">
	window.location.href="?page=lihat";
</script>