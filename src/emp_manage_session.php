<?php

//$date = date('F d, Y, g:i:s a');
//echo "Today " .$date."<br />";

if(!isset($_SESSION['eid']))
{
	echo "Not a session";
}
else
{
	
	$temp_eid = (int)$_SESSION['eid'];
	//echo $temp_eid;
	$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
	mysqli_select_db($con,$db) or die(mysqli_error($con));
	
	$picname = mysqli_query($con, "SELECT FIRST_NAME FROM employee WHERE EMPLOYEE_ID=$temp_eid ");
	$first_name = "";
	while($r = mysqli_fetch_assoc($picname)){
		$first_name = $r['FIRST_NAME'];
	}
	//echo $first_name;
	$dir = "empprofiles/$first_name/images/";
	/*$open = opendir($dir);
	while(($file = readdir($open)) != FALSE)
	{
		if($file!="."&&$file!=".."&&$file!="Thumbs.db")
		{
			echo "<img border='1' width='50' height='50' src='$dir/$file'><br />";
		}
	}*/
	include("emp_manage.php");
	//echo "<br />&nbsp<b>$first_name</b>'s session<br />";
	//echo "<br /><a href='emp_logout.php'>Logout</a><hr />";
}

?>