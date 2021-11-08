<?php

require("dbconfg.php"); // establish DB connection 

if (isset($_POST['mobileinput'])) {
	$newMobile = $_POST['mobileinput'];
	$query = "UPDATE emp SET mobileNo = '$newMobile' WHERE empID = '".$_SESSION['empid']."' ;";
	$result = mysqli_query($conn, $query);
	
    }
if (isset($_POST['emailinput'])) {
	$newEmail = $_POST['emailinput'];
	$query = "UPDATE emp SET email = '$newEmail' WHERE empID = '".$_SESSION['empid']."' ;";
	$result = mysqli_query($conn, $query);
    }

$query = "SELECT * from emp WHERE empID='" . mysqli_real_escape_string($conn, $_SESSION["empid"]) . "'"; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body class="bg-success p-2 text-dark bg-opacity-25">

<div class="container">
<br> <br>
<div class="header">
	<h2> Profile Page </h2>
</div>
<table class="table caption-top">
  <thead>
     <tr>
      <th scope="col">Field</th>
      <th scope="col">Value</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-light">
      <th scope="row">Empoyee ID: </th>
      <td><?php echo $row["empID"]; ?></td>
    </tr>
    <tr class="table-light">
      <th scope="row">Password: </th>
      <td><?php echo $row["passwd"]; ?></td>
    </tr>
    <tr class="table-light">
      <th scope="row">Empoyee Name: </th>
      <td><?php echo $row["empName"]; ?></td>
    </tr>
    <tr class="table-light">
      <th scope="row">Date of Joining: </th>
      <td><?php echo $row["DoJ"]; ?></td>
    </tr>
    <tr class="table-light">
      <th scope="row">Salary: </th>
      <td><?php echo $row["salary"]; ?></td>
    </tr>
    <tr class="table-light">
      <th scope="row">Department: </th>
      <td><?php echo $row["department"]; ?></td>
    </tr>
    <tr class="table-light">
      <th scope="row">Mobile No.: </th>
      <td><?php echo $row["mobileNo"]; ?></td>
    </tr>
    
    <tr class="table-light">
      <th scope="row">Email ID: </th>
      <td><?php echo $row["email"]; ?></td>
    </tr>
  </tbody>
</table>
<br> <br>
 <div class="container">
 	<h3> Update Details </h3>
<form action="profile.php" method="post">
  <div class="form-group">
    <label for="mobile">Mobile Number</label>
    <input type="number" name="mobileinput" class="form-control" id="mobile" placeholder="Enter new mobile number" required>
  </div>
  <input type="submit" name="mobilebutton" class="btn btn-light" style="margin-top:3mm;" value="Update Mobile No."/>
</form>
<br>
<form action="profile.php" method="post">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="emailinput" class="form-control" id="email" placeholder="Enter new email" required>
  </div>
  <input type="submit" name="emailbutton" class="btn btn-light" style="margin-top:3mm;" value="Update Email ID"/>
</form>
 </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script> 
</body>
</html
