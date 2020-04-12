<?php
	include('connection.php');  
	$rfid = $_REQUEST['rfid'];
	//echo($rfid);
$message = "Article deleted successfully.";
$sql = "DELETE from articleinfo  WHERE rfidid='$rfid'";
if(mysqli_query($db_connect, $sql)){

echo "<script type='text/javascript'>alert('$message');window.location.href='test.php';</script>";
	//header('Location: test.php');
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connect);
}

?>