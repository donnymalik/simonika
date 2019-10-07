<?php
/* Database connection start */
include('koneksi.php');

/* Database connection end */
// storing  request (ie, get/post) global array to a variable
$requestData= $_REQUEST;

$columns = array(
// datatable column index  => database column name
	0 => 'iv_id',
	1 => 'iv_pgs',
	2 => 'iv_nis',
	3 => 'iv_niv',
	4 => 'iv_des',
	5 => 'iv_ji'
);




// getting total number records without any search
$sql = "SELECT iv_id, iv_pgs, iv_nis, iv_niv, iv_des, iv_ji";
$sql.=" FROM iv";
$query=mysqli_query($conn, $sql);
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

$sql = "SELECT iv_id, iv_pgs, iv_nis, iv_niv, iv_des, iv_ji";
$sql.=" FROM iv WHERE 1 = 1";

// getting records as per search parameters
if( !empty($requestData['columns'][0]['search']['value']) ){
	$sql.=" AND iv_id LIKE '%".$requestData['columns'][0]['search']['value']."%' ";
}
if( !empty($requestData['columns'][1]['search']['value']) ){
	$sql.=" AND iv_pgs LIKE '%".$requestData['columns'][1]['search']['value']."%' ";
}
if( !empty($requestData['columns'][2]['search']['value']) ){
	$sql.=" AND iv_nis LIKE '%".$requestData['columns'][2]['search']['value']."%' ";
}
if( !empty($requestData['columns'][3]['search']['value']) ){
	$sql.=" AND iv_niv LIKE '%".$requestData['columns'][3]['search']['value']."%' ";
}
if( !empty($requestData['columns'][4]['search']['value']) ){
	$sql.=" AND iv_des LIKE '%".$requestData['columns'][4]['search']['value']."%' ";
}
if( !empty($requestData['columns'][5]['search']['value']) ){
	$sql.=" AND iv_ji LIKE '%".$requestData['columns'][5]['search']['value']."%' ";
}
$query=mysqli_query($conn, $sql);
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result.

$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";  // adding length

$query=mysqli_query($conn, $sql);



$no=1;
$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array();
	$desk = substr($row["iv_des"],0,130);
	$nestedData[] = $no;
	$nestedData[] = "<a href='index.php?page=item4&id=".$row["iv_id"]."'>".$row["iv_pgs"]."</a>";
	$nestedData[] = $row["iv_nis"];
	$nestedData[] = $row["iv_niv"];
	$nestedData[] =
	"<a href='index.php?page=item3&id=".$row["iv_id"]."'>".$desk."...."."</a>";
	$nestedData[] = $row["iv_ji"];

	$data[] = $nestedData;
	$no++;
}



$json_data = array(
	"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
	"recordsTotal"    => intval( $totalData ),  // total number of records
	"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
	"data"            => $data   // total data array
	);

echo json_encode($json_data);  // send data as json format

?>
