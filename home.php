<?php
session_start();
include "connect.php";
include "functions.php";
include "session.php";
$email = $_SESSION['username'];
$q = "select * from user_details where email = '$email'";
$res = mysqli_query($con,$q);
$row = mysqli_fetch_array($res);
?>

<!doctype html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type = "text/css">
.table {
   margin: auto;
   width: 50% !important; 
}
</style>
</head>
<body>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><?php echo $row['name']?></a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
</br></br></br></br></br></br>
<table class="table table-striped" >
  <thead>
   

<tr>
      <th scope="col">Mobile</th>
	  <td><?php echo $row['mob']?></td>
    </tr>
<tr>
      <th scope="col">Email</th>
	  <td><?php echo $row['email']?></td>
    </tr>
	<tr>
      <th scope="col">Department</th>
	  <td><?php echo $row['dept']?></td>
    </tr>
<tr>
      <th scope="col">Designation</th>
	  <td><?php echo $row['desig']?></td>
    </tr>
<tr>
      <th scope="col">Salary</th>
	  <td><?php echo $row['salary']?></td>
    </tr>
<tr>
      <th scope="col">Join Year</th>
	  <td><?php echo $row['join_year']?></td>
    </tr>
  </thead>
  
</table>

</body>

</html>