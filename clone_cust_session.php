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
	mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	
	$picname = mysql_query("SELECT FIRST_NAME FROM customer WHERE CUSTOMER_ID=$temp_cid ");
	$first_name = "";
	while($r = mysql_fetch_assoc($picname)){
		$first_name = $r['FIRST_NAME'];
	}
	//echo $first_name;
	$temp_pin = mysql_fetch_assoc(mysql_query("SELECT PINCODE FROM customer_pin WHERE CUSTOMER_ID=$temp_cid "))['PINCODE'];
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