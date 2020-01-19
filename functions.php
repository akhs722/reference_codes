<?php
function alert($w,$e)
{
	echo "<script>alert('$w');";
	
	if($e==0)
	echo "location = 'index.php'</script>";
	else if($e==1)
	echo "location = 'admin_home.php'</script>";
	else if($e==2)
	echo "location = 'register.php'</script>";
	else if($e==-2)
	echo "location = 'bahar.php'</script>";
	
}
?>