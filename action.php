<!doctype html>
<html lang="en-US">
<head>
<title>PS Test</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<script>
	
	
</script>
</head>
<body>

<!-- Main Container -->
<div class="container"> 
  <!-- Navigation -->
  <header> <a href="">
    <h4 class="logo">PS Test</h4>
    </a>
    <h2 class="hero_header">PS COOPERATION </h2>
    <p class="tagline">Article Management</p>
  </header>
<?php
	include('connection.php');  
	$searchkey = $_REQUEST['search'];
	//echo($searchkey);
	$message ="Invalid RFID ! Please enter valid RFID";
	$result = mysqli_query($db_connect,"SELECT * FROM articleinfo where RFIDID = '$searchkey'");
	$row = mysqli_fetch_row($result);
	if($row)
	{
			echo "<table>";
	echo "<form action='/deleteaction.php' method='POST'> ";
		echo "<input type='hidden' name='rfid' value='$row[0]'>";
		echo "<tr><td>RFID ID</td><td>$row[0]</td></tr>";
		echo "<tr><td>Article Number</td><td>$row[1]</td></tr>";
		echo "<tr><td>Article Name</td><td>$row[2]</td></tr>";
		echo "<tr><td>Storage Location</td><td>$row[3]</td></tr>";
		echo "<tr><td>Price</td><td>$row[4]</td></tr>";
		echo "<tr><td><a href='edit.php?id=$searchkey'>Edit</td>";
		echo"<td><input type='submit' value='delete'></td></tr>";
	echo "</form>";
	echo "</table>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('$message');window.location.href='test.php';</script>";
	}

?>
	<div class="copyright">&copy;2020- <strong>PS Test</strong></div>
	</div>
	</body>
</html>