<?php
session_start();
include "connect.php";
include "functions.php";
include "session.php";

$q = "select * from user_details";
$res = mysqli_query($con,$q);
$n = mysqli_num_rows($res);




?>

<!doctype html>
<head>
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Admin</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
</br></br></br></br></br></br>
<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
	  <th scope="col">Department</th>
	  <th scope="col">Designation</th>
	  <th scope="col">Salary</th>
	  <th scope="col">Join Year</th>
    </tr>
  </thead>
  <tbody>
  <?php for($i=0;$i<$n;$i++) {
		$row = mysqli_fetch_array($res);			
	?>
    <tr>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['mob']?></td>
	  <td><?php echo $row['email']?></td>
	  <td><?php echo $row['dept']?></td>
	  <td><?php echo $row['desig']?></td>
	  <td><?php echo $row['salary']?></td>
	  <td><?php echo $row['join_year']?></td>
    </tr>
	<?php } ?>
  </tbody>
</table>
</body>

</html>