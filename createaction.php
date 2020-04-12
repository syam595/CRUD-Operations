<?php
	include('connection.php');  
	$rfid = $_REQUEST['rfid'];
	$anum = $_REQUEST['anum'];
	$aname = $_REQUEST['aname'];
	$sloc = $_REQUEST['sloc'];
	$price = $_REQUEST['price'];
	$message = "Article information inserted successfully.";
//echo($rfid.$anum.$aname.$sloc.$price);
$sql = "INSERT INTO articleinfo (rfidid,anum,aname,sloc,price) VALUES ('$rfid', '$anum', '$aname', '$sloc', '$price')";
if(mysqli_query($db_connect, $sql)){

echo "<script type='text/javascript'>alert('$message');window.location.href='test.php';</script>";
	//header('Location: test.php');
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connect);
}

	
	
?>