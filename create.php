<!doctype html>
<html lang="en-US">
<head>
<title>PS Test</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<script>
function validateForm() {
  var x = document.forms["myform"]["rfid"].value;
  var anum = document.forms["myform"]["anum"].value;
  var aname = document.forms["myform"]["aname"].value;
  var sloc = document.forms["myform"]["sloc"].value;
  var price = document.forms["myform"]["price"].value;
  if (x == "" || x == null) {
    alert("Please enter RFID-ID");
    return false;
  }
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

	<table>
	<form name ="myform" action='/createaction.php' method='POST' onSubmit="return validateForm()"> 
	<tr><td>RFID ID</td><td><input type='text' name='rfid' ></td></tr>
	<tr><td>Article Number</td><td><input type='text' name='anum'></td></tr>
	<tr><td>Article Name</td><td><input type='text' name='aname'></td></tr>
	<tr><td>Storage Location</td><td><input type='text' name='sloc'></td></tr>
	<tr><td>Price</td><td><input type='text' name='price'></td></tr>
	<tr><td><input type='submit' value='Create'></td></tr>
	</form>
	</table>
	<div class="copyright">&copy;2020- <strong>PS Test</strong></div>
	</div>
	</body>
</html>