
<?php

$customerid = $_POST['cid'];
$autid = $_POST['autid'];
$autdate = $_POST['autdate'];
$licnum = $_POST['licnum'];
$regnum = $_POST['regnum'];
$vehiclemanufac = $_POST['vehiclemanufac'];
$yob = $_POST['yob'];
$costofvehicle = $_POST['costofvehicle'];

mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
mysql_select_db("data") or die(mysql_error());

$query = mysql_query("SELECT * FROM aut_insurance WHERE CUSTOMER_ID=$customerid");
$query1 = mysql_query("SELECT * FROM customer_license WHERE CUSTOMER_LICENSE_NUMBER!=$licnum");
$query2 = mysql_query("SELECT * FROM aut_insurance");
$f=0;

while($row=mysql_fetch_assoc($query))
{
	
	$check=$row['POLICY_ID'];
	if($autid==$check)
	{
		echo "<br />This POLICY ID is already existing for this Customer.<br />
			Please register with another policy<br />";
		$f=1;
	}
}
while($row1=mysql_fetch_assoc($query1))
{
	
	$check=$row1['CUSTOMER_LICENSE_NUMBER'];
	if($licnum==$check)
	{
		echo "<br />This LICENSE NUMBER already exists.<br />Please type another LICENSE NUMBER";
		$f=1;
	}
}
while($row2=mysql_fetch_assoc($query2))
{
	
	$check=$row2['REG_NUMBER'];
	if($regnum==$check)
	{
		echo "<br />This REGISTRATION NUMBER already exists.<br />Please type another REGISTRATION NUMBER";
		$f=1;
	}
}

if ($customerid && $autid && $autdate && $licnum && $regnum && $vehiclemanufac && $yob && $costofvehicle && $f==0) 
{

	mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	
	mysql_query("INSERT INTO aut_insurance(customer_id,policy_id,reg_number,vehicle_manufac,year_of_built,policy_date,cost_of_vehicle) VALUES('$customerid','$autid','$regnum','$vehiclemanufac',$yob,'$autdate',$costofvehicle)");
	mysql_query("INSERT INTO customer_license(customer_id,customer_license_number) VALUES('$customerid','$licnum')");
	echo "You have succefully registered!<p><p><h3>Congratulations..</h3>";
	echo "<br />";
	echo "<h2>Do you want to register for any other policies......<br /> Click on below links</h2>";
	
	mysql_close();
	include("cust_reg_link.php");
	

}
else
{
    echo "<br /><br />you have to complete the form!";
}

?>
