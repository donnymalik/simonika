<?php
/* Database connection start */
include('koneksi.php');

/* Database connection end */
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$columns = array( 
// datatable column index  => database column name
	0 => 'id',
	1 => 'nm_diklat', 
	2 => 'jn_dik',
	3 => 'gambaran',
	4 => 'jk_krk'
	
);




// getting total number records without any search
$sql = "SELECT id, nm_diklat, jn_dik, gambaran, mk_tj, jk_krk";
$sql.=" FROM ii";
$query=mysqli_query($conn, $sql);
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

$sql = "SELECT id, nm_diklat, jn_dik, gambaran, mk_tj, jk_krk";
$sql.=" FROM ii WHERE 1 = 1";

// getting records as per search parameters
if( !empty($requestData['columns'][0]['search']['value']) ){ 
	$sql.=" AND id LIKE '%".$requestData['columns'][0]['search']['value']."%' ";
}
if( !empty($requestData['columns'][1]['search']['value']) ){ 
	$sql.=" AND nm_diklat LIKE '%".$requestData['columns'][1]['search']['value']."%' ";
}
if( !empty($requestData['columns'][2]['search']['value']) ){
	$sql.=" AND jn_dik LIKE '%".$requestData['columns'][2]['search']['value']."%' ";
}
if( !empty($requestData['columns'][3]['search']['value']) ){
	$sql.=" AND gambaran LIKE '%".$requestData['columns'][3]['search']['value']."%' ";
}

if( !empty($requestData['columns'][4]['search']['value']) ){
	$sql.=" AND jk_krk LIKE '%".$requestData['columns'][4]['search']['value']."%' ";
}
$query=mysqli_query($conn, $sql);
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result.
	
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";  // adding length

$query=mysqli_query($conn, $sql);

	

$no=1;
$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 
	$desk = substr($row["mk_tj"],0,130);
	$nestedData[] = $no;
	$nestedData[] = "<a href='index.php?page=item&id=".$row["id"]."'>".$row["nm_diklat"]."</a>";
	$nestedData[] = $row["jn_dik"];
	$nestedData[] = $row["gambaran"];
	$nestedData[] = $row["jk_krk"];
	
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
