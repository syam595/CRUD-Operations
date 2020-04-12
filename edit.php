<!doctype html>
<html lang="en-US">
<head>
<title>PS Test</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<script>
function validateForm() {
  var anum = document.forms["myform"]["anum"].value;
  var aname = document.forms["myform"]["aname"].value;
  var sloc = document.forms["myform"]["sloc"].value;
  var price = document.forms["myform"]["price"].value;
 if (anum == "" || anum == null) {
    alert("Please enter Article Number");
    return false;
  }
 if (aname == "" || aname == null) {
    alert("Please enter Article Name");
    return false;
  }
 if (sloc == "" || sloc == null) {
    alert("Please enter Storage Location");
    return false;
  }
if (price == "" || price == null) {
    alert("Please enter Price");
    return false;
  }
}
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
	$searchkey = $_GET['id'];
	$result = mysqli_query($db_connect,"SELECT * FROM articleinfo where RFIDID = '$searchkey'");
	$row = mysqli_fetch_row($result);
	echo "<table>";
	echo "<form name='myform' action='/editaction.php' method='POST' onsubmit='return validateForm()'> ";
		echo "<tr><td>RFID ID</td><td>$row[0]</td></tr>";
		echo "<tr><td>Article Number</td><td><input type='text' name='anum' value='$row[1]' ></td></tr>";
		echo "<tr><td>Article Name</td><td><input type='text' name='aname' value='$row[2]'></td></tr>";
		echo "<tr><td>Storage Location</td><td><input type='text' name='sloc' value='$row[3]' ></td></tr>";
		echo "<tr><td>Price</td><td><input type='text' name='price' value='$row[4]'></td></tr>";
		echo "<tr><td><input type='submit' value='Update'></td></tr>";
		echo "<input type='hidden' name='rfid' value='$row[0]'>";
	echo "</form>";
	echo "</table>"
?>
	<div class="copyright">&copy;2020- <strong>PS Test</strong></div>
	</div>
	</body>
</html>