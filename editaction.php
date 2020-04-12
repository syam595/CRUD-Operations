<?php
	include('connection.php');  
	$rfid = $_REQUEST['rfid'];
	$anum = $_REQUEST['anum'];
	$aname = $_REQUEST['aname'];
	$sloc = $_REQUEST['sloc'];
	$price = $_REQUEST['price'];
	$message = "Article information updated successfully.";
//echo($rfid.$anum.$aname.$sloc.$price);
$sql = "UPDATE articleinfo SET anum='$anum', aname='$aname', sloc='$sloc', price='$price' WHERE rfidid='$rfid'";
$res= mysqli_query($db_connect, $sql);
if($res){

echo "<script type='text/javascript'>alert('$message');window.location.href='test.php';</script>";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connect);
}

	//echo($searchkey);
	//$result = mysqli_query($db_connect,"SELECT * FROM articleinfo where RFIDID = '$searchkey'");
	//$row = mysqli_fetch_row($result);
	
	
?>