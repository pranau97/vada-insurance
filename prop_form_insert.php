
<?php

$customerid = $_POST['cid'];
$propid = $_POST['propid'];
$propdate = $_POST['propdate'];
$buildupcost = $_POST['buildupcost'];
$area = $_POST['area'];
$address = $_POST['address'];

mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
mysql_select_db("data") or die(mysql_error());
$query = mysql_query("SELECT * FROM prop_insurance WHERE CUSTOMER_ID=$customerid");
$query1 = mysql_query("SELECT * FROM prop_insurance");
$f=0;

while($row=mysql_fetch_assoc($query))
{
	
	$check=$row['POLICY_ID'];
	if($propid==$check)
	{
		echo "This POLICY ID is already existing for this Customer.<br />
			Please register with another policy<br />";
		$f=1;
	}
}
while($row1=mysql_fetch_assoc($query1))
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

	mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	
	mysql_query("INSERT INTO prop_insurance(customer_id,policy_id,policy_date,build_up_cost,area,address) VALUES('$customerid','$propid','$propdate',$buildupcost,$area,'$address')");
	echo "You have succefully registered!<p><p><h3>Congratulations..</h3>";
	echo "<br />";
	echo "<h2>Do you want to register for any other policies......<br /> Click on below links</h2>";
	
	mysql_close();
	include("cust_reg_link.php");
	

}
else
{
    echo "<br />you have to complete the form!";
}

?>
