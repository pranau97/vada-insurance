 <?php

$customerid = $_POST['cid'];
$lyfid = $_POST['lyfid'];
$paydate = $_POST['paydate'];
$transacid = $_POST['transacid'];
$duedate = $_POST['duedate'];
$paid = $_POST['paid'];

$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
mysqli_select_db($con,$db) or die(mysqli_error($con));
$query = mysqli_query($con, "SELECT * FROM premium");
$f=0;

while($row=mysqli_fetch_assoc($query))
{
	
	$check=$row['PREMIUM_TR_ID'];
	if($transacid==$check)
	{
		echo "This Transaction ID already exists<br />Please type another Transaction ID";
		$f=1;
	}
	
}
if ($customerid && $lyfid && $paydate && $transacid && $duedate && $paid && $f==0) 
{
	$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
	mysqli_select_db($con,$db) or die(mysqli_error($con));
	$pname=mysqli_fetch_assoc(mysqli_query($con, "SELECT POLICY_NAME FROM policy_lyf WHERE POLICY_ID='$lyfid'"))['POLICY_NAME'];
	mysqli_query($con, "INSERT INTO premium(premium_tr_id,payment_date,due_date) VALUES($transacid,'$paydate','$duedate')");
	mysqli_query($con, "INSERT INTO premium_paid(premium_tr_id,paid_on_time) VALUES($transacid,'$paid')");
	mysqli_query($con, "INSERT INTO premium_tr_customer(premium_tr_id,customer_id) VALUES($transacid,'$customerid')");
	mysqli_query($con, "INSERT INTO premium_tr_policy_lyf(premium_tr_id,policy_lyf_id,policy_name,customer_id) VALUES($transacid,'$lyfid','$pname','$customerid')");
	
	echo "<h3>Successfullt PAID!</h3>";
	echo "<br />";
	echo "<h2>Do you want to pay for any other policies......<br /> Click on below links</h2>";
	
	mysqli_close($con);
	include("cust_premium.php");
	

}

else
{
    echo "<h3>You have to fill the complete DETAILS!</h3>";
}

?>