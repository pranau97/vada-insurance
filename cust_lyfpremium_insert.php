 <?php

$customerid = $_POST['cid'];
$lyfid = $_POST['lyfid'];
$paydate = $_POST['paydate'];
$transacid = $_POST['transacid'];
$duedate = $_POST['duedate'];
$paid = $_POST['paid'];

mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
mysql_select_db("data") or die(mysql_error());
$query = mysql_query("SELECT * FROM premium");
$f=0;

while($row=mysql_fetch_assoc($query))
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
	mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	$pname=mysql_fetch_assoc(mysql_query("SELECT POLICY_NAME FROM policy_lyf WHERE POLICY_ID='$lyfid'"))['POLICY_NAME'];
	mysql_query("INSERT INTO premium(premium_tr_id,payment_date,due_date) VALUES($transacid,'$paydate','$duedate')");
	mysql_query("INSERT INTO premium_paid(premium_tr_id,paid_on_time) VALUES($transacid,'$paid')");
	mysql_query("INSERT INTO premium_tr_customer(premium_tr_id,customer_id) VALUES($transacid,'$customerid')");
	mysql_query("INSERT INTO premium_tr_policy_lyf(premium_tr_id,policy_lyf_id,policy_name,customer_id) VALUES($transacid,'$lyfid','$pname','$customerid')");
	
	echo "<h3>Successfullt PAID!</h3>";
	echo "<br />";
	echo "<h2>Do you want to pay for any other policies......<br /> Click on below links</h2>";
	
	mysql_close();
	include("cust_premium.php");
	

}

else
{
    echo "<h3>You have to fill the complete DETAILS!</h3>";
}

?>