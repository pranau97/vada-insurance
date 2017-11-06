<?php


$claim_transac = $_POST['claim_transac'];
$amtclaim = $_POST['amtclaim'];
$claimdate = $_POST['claimdate'];
$id = $_POST['id'];
$policy = $_POST['policy'];


mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
mysql_select_db("data") or die(mysql_error());
$query = mysql_query("SELECT * FROM claim");
$f=0;

while($row=mysql_fetch_assoc($query))
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

mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
mysql_select_db("data") or die(mysql_error());

$pname=mysql_fetch_assoc(mysql_query("SELECT POLICY_NAME FROM POLICY_LYF WHERE POLICY_ID='$policy'"))['POLICY_NAME'];
mysql_query("INSERT INTO claim(claim_tr_id,amount_of_claim,claim_status,date_of_claim) VALUES('$claim_transac','$amtclaim','CLAIMED','$claimdate')");
mysql_query("INSERT INTO claim_customer_id(claim_tr_id,customer_id) VALUES('$claim_transac',$id)");
mysql_query("INSERT INTO claim_policy_id_lyf(claim_tr_id,policy_id_lyf,customer_id,policy_name) VALUES('$claim_transac','$policy','$id','$pname')");
mysql_query("DELETE FROM lyf_insurance WHERE CUSTOMER_ID=$id AND POLICY_ID='$policy'");
}
else
{
    echo "<h3>You have to fill the complete DETAILS!</h3>";
}

?>