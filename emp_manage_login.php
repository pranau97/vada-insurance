<?php
session_start();

if($_POST){

$_SESSION['eid'] = $_POST['eid'];
$_SESSION['password'] =md5($_POST['password']);
echo "here2";

if($_SESSION['eid'] && $_SESSION['password'])
{
	mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	
	$query = mysql_query("SELECT * FROM employee WHERE employee_id='".$_SESSION['eid']."'");
	$numrows = mysql_num_rows($query);
	
	if($numrows != 0)
	{
		while($row = mysql_fetch_assoc($query))
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
				header("location: emp_manage_users.php");
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