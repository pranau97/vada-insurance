
<?php

$customerid = $_POST['cid'];
$propid = $_POST['propid'];
$propdate = $_POST['propdate'];
$buildupcost = $_POST['buildupcost'];
$area = $_POST['area'];
$address = $_POST['address'];

$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
mysqli_select_db($con,$db) or die(mysqli_error($con));
$query = mysqli_query($con, "SELECT * FROM prop_insurance WHERE CUSTOMER_ID=$customerid");
$query1 = mysqli_query($con, "SELECT * FROM prop_insurance");
$f=0;

while($row=mysqli_fetch_assoc($query))
{
	
	$check=$row['POLICY_ID'];
	if($propid==$check)
	{
		echo "This POLICY ID is already existing for this Customer.<br />
			Please register with another policy<br />";
		$f=1;
	}
}
while($row1=mysqli_fetch_assoc($query1))
{
	
	$check=$row1['ADDRESS'];
	if($address==$check)
	{
		echo "This ADDRESS already exists.<br />Please type valid ADDRESS<br />";
		$f=1;
	}
}

if ($customerid && $propid && $propdate && $buildupcost && $area && $address && $f==0) 
{

	$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
	mysqli_select_db($con,$db) or die(mysqli_error($con));
	
	mysqli_query($con, "INSERT INTO prop_insurance(customer_id,policy_id,policy_date,build_up_cost,area,address) VALUES('$customerid','$propid','$propdate',$buildupcost,$area,'$address')");
	echo "You have succefully registered!<p><p><h3>Congratulations..</h3>";
	echo "<br />";
	echo "<h2>Do you want to register for any other policies......<br /> Click on below links</h2>";
	
	mysqli_close($con);
	include("cust_reg_link.php");
	

}
else
{
    echo "<br />you have to complete the form!";
}

?>
