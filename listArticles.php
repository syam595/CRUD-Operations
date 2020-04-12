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
    <h4 class="logo"><a href='test.php'> Back </a></h4>
    </a>
    <h2 class="hero_header">PS COOPERATION </h2>
    <p class="tagline">Article Management</p>
  </header>
  <!-- Hero Section -->
  <section class="hero" id="hero">
    
  <!-- About Section -->
	<?php
	include('connection.php');
		  $result = mysqli_query($db_connect,"SELECT * FROM articleinfo");
		  if (!$result) {
    		die("Query to show fields from table failed");
		  } 

		  $fields_num = mysqli_num_fields($result);

		  echo "<table border='1'><tr>";
			  echo "<td>RFID-ID</td>";
			  echo "<td>Article Number</td>";
			  echo "<td>Article Name</td>";
			  echo "<td>Storage Location</td>";
			  echo "<td>Price</td>";
		  echo "</tr>\n";
		  // printing table rows
		  while($row = mysqli_fetch_row($result))
		  {
    		echo "<tr>";
     		foreach($row as $cell)
        		echo "<td>$cell</td>";

    		echo "</tr>\n";
		  }
		  mysqli_free_result($result);
		  
		echo "</section>";
	
	?>
  <!-- Stats Gallery Section -->
  
  <!-- Parallax Section -->
  
  <!-- Footer Section
  <section class="footer_banner" id="contact">
    <h2 class="hidden">Footer Banner Section </h2>
  </section>-->
  
  
	</div>
	
<!-- Main Container Ends -->
</body>
</html>
