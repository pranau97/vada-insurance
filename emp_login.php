<?php
session_start();

if($_POST){

$_SESSION['eid'] = $_POST['eid'];
$_SESSION['password'] =md5($_POST['password']);

if($_SESSION['eid'] && $_SESSION['password'])
{
	$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
	mysqli_select_db($con,$db) or die(mysqli_error($con));
	
	$query = mysqli_query($con, "SELECT * FROM employee WHERE employee_id='".$_SESSION['eid']."'");
	$numrows = mysqli_num_rows($query);
	
	if($numrows != 0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
			$dbeid = $row['EMPLOYEE_ID'];
			$dbpassword = $row['PASSWORD'];
			//echo $dbpassword;
			//echo "'".$_SESSION['password']."'";
		}
		if($_SESSION['eid']==$dbeid)
		{
			if($_SESSION['password']==$dbpassword)
			{
				header("location: emp_users.php");
			}
			else
			{
				echo "Your password is incorrect!";
			}
		}
		else
		{
			echo "Your name is incorrect!";
		}
	}
	else
	{
		echo "This name is not registered!";
	}	
}
else
{
	echo "You have to type a name and password!";
}
}
else
{
	echo "Access denied!";
	exit;
}

?>