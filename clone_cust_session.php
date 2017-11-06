<?php

//$date = date('F d, Y, g:i:s a');
//echo "Today " .$date."<br />";
session_start();
if(!isset($_SESSION['cid']))
{
	echo "Not a session";
}
else
{
	
	$temp_cid = (int)$_SESSION['cid'];
	//echo $temp_cid;
	$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
	mysqli_select_db($con,$db) or die(mysqli_error($con));
	
	$picname = mysqli_query($con, "SELECT FIRST_NAME FROM customer WHERE CUSTOMER_ID=$temp_cid ");
	$first_name = "";
	while($r = mysqli_fetch_assoc($picname)){
		$first_name = $r['FIRST_NAME'];
	}
	//echo $first_name;
	$temp_pin = mysqli_fetch_assoc(mysqli_query($con, "SELECT PINCODE FROM customer_pin WHERE CUSTOMER_ID=$temp_cid "))['PINCODE'];
	$dir = "custprofiles/$first_name/images/";
	/*$open = opendir($dir);
	while(($file = readdir($open)) != FALSE)
	{
		if($file!="."&&$file!=".."&&$file!="Thumbs.db")
		{
			echo "<img border='1' width='50' height='50' src='$dir/$file'><br />";
		}
	}*/
	//include("branch_manager.php");
	//echo "<br />&nbsp<b>$first_name</b>'s session<br />";
	//echo "<br /><a href='emp_logout.php'>Logout</a><hr />";
}

?>