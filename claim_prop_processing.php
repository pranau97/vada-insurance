<?php
$id=$_REQUEST['pcids'];
$policy=$_REQUEST['pids'];
//echo $policy,$id;
mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
mysql_select_db("data") or die(mysql_error());

//$abcd=mysql_fetch_assoc(mysql_query("SELECT CUSTOMER_ID FROM CLAIM_CUSTOMER_ID WHERE CLAIM_TR_ID=(SELECT CLAIM_TR_ID FROM CLAIM)"));
//$xyz=mysql_fetch_assoc(mysql_query("SELECT POLICY_ID_LYF FROM CLAIM_POLICY_ID_LYF WHERE CLAIM_TR_ID=(SELECT CLAIM_TR_ID FROM CLAIM)"));

$a=mysql_fetch_assoc(mysql_query("SELECT CLAIM_TR_ID FROM claim_policy_id_lyf WHERE POLICY_ID_LYF ='$policy' AND CUSTOMER_ID ='$id'"))['CLAIM_TR_ID'];

if(mysql_num_rows(mysql_query("SELECT CLAIM_TR_ID FROM claim_policy_id WHERE POLICY_ID ='$policy' AND CUSTOMER_ID ='$id'"))==1)
{
		echo "<h1>Customer have already claimed this policy</h1>";
		header("Refresh:3; url=cust_claim.php");
}

?>

<html>
<head>
<style type="text/css">

body{
background-color:#FFFFCC;
}

#foot{
background-color:green;
text-align:center;
width:102%;
margin-left:-10px;
color:white;

}

#logo1{
width:102%;
border:solid 2px black;
text-align:center;
background-color:green;
margin-top:-7px;
margin-left:-10px;
}

#logo2{
border:solid 1px black;
width:100%;
text-align:center;
}

#logo3{
text-align:left;
}

#logo5{
width:33.33%;
}


#form {
	width:120%;
	margin-left: 575px;
	
}
#form td{
	padding:10px;
}

</style>
</head>

<body>
<div id="logo1">
<table id="logo2" >
  <tr>
    <td  id="logo3">&nbsp;
    	<img src="logo1.PNG" height="100" width="145">
    </td>
    <td id="logo4">
    	<br>
    	<font size=6.5 color=#FFFFFF face="Times New Roman">
    	<b>Welcome</b><br>VADA Insurance
     	</font>
    </td>
<td id="logo5"></td> 
 </tr>
</table>
</div>
<?php


if($_REQUEST['pcids']){
//echo $_REQUEST['pcids'];
$id=$_REQUEST['pcids'];
$policy=$_REQUEST['pids'];
//echo $id;
echo "<br /><br /><br /><center><h2>Your claim is in processing...</h2><br /><a href='emp_users.php'><input type='submit' value='GO TO HOME' /><a/></center>";
}
mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
mysql_select_db("data") or die(mysql_error());

$amt = mysql_fetch_assoc(mysql_query("SELECT * FROM policy WHERE POLICY_ID='$policy'"))['LIABILITY_AMOUNT'];


?>
<form ENCTYPE="multipart/form-data" method="post" action="claim_process.php">

<div id="form">
<table border="0" width="60%">
<tr><td width="20%"><!--have significance--></td><td><input type="hidden" name="id" value="<?php echo $id; ?>"maxlength="4"/></td></tr><br />
<tr><td width="20%">CLAIM TRANSACTION ID: </td><td><input type="int" name="claim_transac" maxlength="10"/></td></tr><br />
<tr><td width="20%">AMOUNT OF CLAIM: </td><td><input type="int" name="amtclaim" value="<?php  echo $amt;  ?>"maxlength="8"/></td></tr><br />
<tr><td width="20%">DATE OF CLAIM: </td><td><input type="date" name="claimdate" value="<?php $date = date('Y-m-d');echo $date; ?>"/></td></tr><br />
<tr><td width="20%"><!--have significance--></td><td><input type="hidden" name="policy" value="<?php echo $policy; ?>"maxlength="6"/></td></tr><br />

<tr><td><input type='submit' value='Finish' /></td></tr>
</table>

</div>
</form>
<div id="foot">&copy; 2017 VADA Insurance. All rights reserved.</div>
</body>


</html>
