<?php
if (isset($_POST["empid"]) && isset($_POST["password"])) { 
require("dbconfg.php"); // establish DB connection 
$empid = $_POST['empid'];
$password = $_POST['password'];
$query = "SELECT * from emp WHERE empID='" . mysqli_real_escape_string($conn, $empid) . "'"; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
if ($password == $row["passwd"]) { 
 $_SESSION["empid"] = $empid; 
 header('Location: http://localhost/CS355/profile.php');
} 
else { 
 echo "Invalid username or password <br />"; 
} 
}
?>
