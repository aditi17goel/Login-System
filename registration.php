<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>

<div class="container">
<div class="header">
	<h2> Register </h2>
</div>
<form action="registrationserver.php" method="post">
 <div class="mb-3">
  <label for="empID" class="form-label">Empoyee ID: </label>
  <input type="text" name="empid" class="form-control" placeholder="Max 10 characters">
</div>

 <div class="mb-3">
  <label for="password" class="form-label">Password: </label>
  <input type="password" name="password" class="form-control" placeholder="Enter password">
</div>

 <div class="mb-3">
  <label for="empName" class="form-label">Empoyee Name: </label>
  <input type="text" name="name" class="form-control" placeholder="Max 20 characters">
</div>


 <div class="mb-3">
  <label for="doj" class="form-label">Date of Joining: </label>
  <input type="date" name="doj" class="form-control"  placeholder="yyyy/mm/dd">
</div>

 <div class="mb-3">
  <label for="salary" class="form-label">Salary: </label>
  <input type="number" name="salary" class="form-control" placeholder="Enter salary in rupees">
</div>
 <div class="mb-3">
  <label for="department" class="form-label">Department : </label>
  <input type="text" name="dept" class="form-control" placeholder="Enter your department">
</div>
 <div class="mb-3">
  <label for="mobile" class="form-label">Mobile: </label>
  <input type="number" name="mobile" class="form-control" id="mobile" placeholder="999999999">
</div>

 <div class="mb-3">
  <label for="email" class="form-label">Email: </label>
  <input type="email" name="email" class="form-control" placeholder="name@example.com">
</div>

<button type="submit" class="btn btn-outline-primary"> Submit </button>
</form>
<p>Already a user? <a href = "login.php"><b>Login</b></a></p>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html
