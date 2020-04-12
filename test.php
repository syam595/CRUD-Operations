<!doctype html>
<html lang="en-US">
<head>
<title>PS Test</title>
<link href="css/singlePageTemplate.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function validateForm() {
  var x = document.forms["myform"]["search"].value;
  if (x == "" || x == null) {
    alert("Please enter RFID-ID");
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
  <!-- Hero Section -->
  <section class="hero" id="hero">
    
  <!-- About Section -->
	<?php
	include('connection.php');	  	
	?>
	  <table>
	  <form name= "myform" action="/action.php" method="POST" onsubmit="return validateForm()">
	  <tr><td>
	  <input type="text" name="search" placeholder="Enter RFID ID"></td><td>
	  <input type="submit" value="search"></td></tr>
	  </form> 
	  </table>
<ul>
  <li><a href="create.php"><font color="#000000">Create New Article </font></a></li><br>		  
  <li><a href="listArticles.php"><font color="#000000">List All Articles </font></a></li>
</ul
	  
	</section>
<div class="copyright">&copy;2020- <strong>PS Test</strong></div>
	</div>
<!-- Main Container Ends -->
</body>
</html>
