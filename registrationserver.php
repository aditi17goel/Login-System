<?php
include('dbconfg.php');

$empid = $_POST['empid'];
$password = $_POST['password'];
$name = $_POST['name'];
$doj = $_POST['doj'];
$salary = $_POST['salary'];
$dept = $_POST['dept'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];


$sql="INSERT INTO emp VALUES ('$empid', '$password', '$name', '$doj', '$salary', '$dept', '$mobile', '$email');";
$result = mysqli_query($conn, $sql);
 $_SESSION["empid"] = $empid; 
header('Location: http://localhost/CS355/profile.php');

?>
