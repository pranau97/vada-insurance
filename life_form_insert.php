
<?php

$customerid = $_POST['cid'];
$lyfid = $_POST['lyfid'];
$lyfdate = $_POST['lyfdate'];

mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
mysql_select_db("data") or die(mysql_error());
$query = mysql_query("SELECT * FROM lyf_insurance WHERE CUSTOMER_ID=$customerid");
$f=0;

while($row=mysql_fetch_assoc($query))
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

	mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	
	mysql_query("INSERT INTO lyf_insurance(customer_id,policy_id,policy_date) VALUES('$customerid','$lyfid','$lyfdate')");
	echo "You have succefully registered!<p><p><h3>Congratulations..</h3>";
	echo "<br />";
	echo "<h2>Do you want to register for any other policies......<br /> Click on below links</h2>";
	
	mysql_close();
	include("cust_reg_link.php");
	

}
else
{
    echo "you have to complete the form!";
}

?>
