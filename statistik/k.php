<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host="localhost";
$user="bpsdmdjateng_simonika";
$password="53714bvdi201a";
$database="bpsdmdjateng_simonika";
$koneksi=mysql_connect($host,$user,$password);
$pilih_database=mysql_select_db($database,$koneksi);
	if($pilih_database){
	echo"";
	}else{
	echo"";
	}
?>