<?php
		session_start();
		if(isset($_SESSION['username']))
		{
			session_destroy();
			header('location:index.php');
		}
		else if(isset($_SESSION['admin']))
		{
			session_destroy();
			header('location:index.php');
		}
		else
		{
			alert("Login first....redirecting");	
		}
		function alert($w)
		{
			echo "<script>alert('$w');";
			echo "location = 'index.php'</script>";
			
		}

?>