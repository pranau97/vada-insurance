<?php


$claim_transac = $_POST['claim_transac'];
$amtclaim = $_POST['amtclaim'];
$claimdate = $_POST['claimdate'];
$id = $_POST['id'];
$policy = $_POST['policy'];

$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
mysqli_select_db($con,$db) or die(mysqli_error($con));
$query = mysqli_query($con, "SELECT * FROM claim");
$f=0;

while($row=mysqli_fetch_assoc($query))
{
	
	$check=$row['CLAIM_TR_ID'];
	if($claim_transac==$check)
	{
		echo "This Claim Transaction ID already exists.<br />Please type another Transaction ID";
		$f=1;
	}
	
}
if ($claim_transac && $amtclaim && $claimdate && $id && $policy  && $f==0) 
{
echo "Claim successfully processed'<br />'THANK YOU";
header("Refresh:3; url=cust_claim.php");

$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
mysqli_select_db($con,$db) or die(mysqli_error($con));

$pname=mysqli_fetch_assoc(mysqli_query($con, "SELECT POLICY_NAME FROM POLICY WHERE POLICY_ID='$policy'"))['POLICY_NAME'];
mysqli_query($con, "INSERT INTO claim(claim_tr_id,amount_of_claim,claim_status,date_of_claim) VALUES('$claim_transac','$amtclaim','CLAIMED','$claimdate')");
mysqli_query($con, "INSERT INTO claim_customer_id(claim_tr_id,customer_id) VALUES('$claim_transac','$id')");
mysqli_query($con, "INSERT INTO claim_policy_id(claim_tr_id,policy_id,customer_id,policy_name) VALUES('$claim_transac','$policy','$id','$pname')");
mysqli_query($con, "DELETE FROM aut_insurance WHERE CUSTOMER_ID=$id AND POLICY_ID='$policy'");
mysqli_query($con, "DELETE FROM prop_insurance WHERE CUSTOMER_ID=$id AND POLICY_ID='$policy'");
}
else
{
    echo "<h3>You have to fill the complete DETAILS!</h3>";
}
?>