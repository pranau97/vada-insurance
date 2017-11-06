<?php
session_start();

if($_POST){

$_SESSION['cid'] = $_POST['cid'];
$_SESSION['password'] = md5($_POST['password']);

if($_SESSION['cid'] && $_SESSION['password'])
{
	mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	
	$query = mysql_query("SELECT * FROM customer WHERE customer_id='".$_SESSION['cid']."'");
	$numrows = mysql_num_rows($query);
	
	if($numrows != 0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			$dbcid = $row['CUSTOMER_ID'];
			$dbpassword = $row['PASSWORD'];
		}
		if($_SESSION['cid']==$dbcid)
		{
			if($_SESSION['password']==$dbpassword)
			{
				header("location: cust_users.php");
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