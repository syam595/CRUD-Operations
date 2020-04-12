<?php
// Enter the hostname and DB credentials
$servername = "";
$username = "";
$password = "";
$database = "";

// Create connection
$db_connect = mysqli_connect($servername, $username, $password) or die("Error connecting to the db");
mysqli_select_db($db_connect, $database);
?>