<?php
session_start();
$servername = "localhost:3306";
$username = "root";
$password = "";
$table = "employee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $table);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?> 
