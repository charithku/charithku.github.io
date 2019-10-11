<?php

$filename = "request_summary.csv";
$fp = fopen('php://output', 'w');

include("config.php");
	
$sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='tool' AND TABLE_NAME='request'";
$result = mysqli_query($db,$sql);
	while ($row = mysqli_fetch_row($result)) {
		$header[] = $row[0];
	}	
	
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

fputcsv($fp, $header);
	
$sql= "SELECT * from request";
$result = mysqli_query($db, $sql);
//echo $_POST['data'];
	
	while ($row = mysqli_fetch_row($result)) {
		//$header[] = $row[0];
		fputcsv($fp, $row);
}	

//fseek($f, 0);

//fpassthru($f);

//$_SESSION['login_user'] = $myusername;

exit;
?>