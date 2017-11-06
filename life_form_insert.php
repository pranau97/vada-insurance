
<?php

$customerid = $_POST['cid'];
$lyfid = $_POST['lyfid'];
$lyfdate = $_POST['lyfdate'];

$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
mysqli_select_db($con,$db) or die(mysqli_error($con));
$query = mysqli_query($con, "SELECT * FROM lyf_insurance WHERE CUSTOMER_ID=$customerid");
$f=0;

while($row=mysqli_fetch_assoc($query))
{
	
	$check=$row['POLICY_ID'];
	if($lyfid==$check)
	{
		echo "This POLICY ID is already existing for this Customer.<br />
			Please register with another policy<br />";
		$f=1;
	}
}

if ($customerid && $lyfid && $lyfdate && $f==0) 
{

	$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
	mysqli_select_db($con,$db) or die(mysqli_error($con));
	
	mysqli_query($con, "INSERT INTO lyf_insurance(customer_id,policy_id,policy_date) VALUES('$customerid','$lyfid','$lyfdate')");
	echo "You have succefully registered!<p><p><h3>Congratulations..</h3>";
	echo "<br />";
	echo "<h2>Do you want to register for any other policies......<br /> Click on below links</h2>";
	
	mysqli_close($con);
	include("cust_reg_link.php");
	

}
else
{
    echo "you have to complete the form!";
}

?>
