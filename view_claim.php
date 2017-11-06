<html>

<head>
<title>View Claim</title>
<style type="text/css">
body{
background-color:#FFFFCC;}

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

#foot{
background-color:green;
text-align:center;
width:102%;
margin-left:-10px;
color:white;
margin-top:300px;
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
<h3>POLICY ID: 
<?php 
$a=$_REQUEST['ids'];
echo "<u>$a</u>";
/*include("clone_cust_session.php");
mysql_connect("localhost","root","") or die("Problem with connection...");
mysql_select_db("insurance");
$pid="";
$pid=mysql_fetch_assoc(mysql_query("SELECT POLICY_ID from lyf_insurance where CUSTOMER_ID=$temp_cid"))['POLICY_ID'];;
echo $pid;
mysql_close();*/
?> </h3>


<?php
include("clone_cust_session.php");
mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
mysql_select_db("data") or die(mysql_error());


echo "<table width=\"40%\" align=center border=2>";
echo "<tr><th width=\"20%\" align= center \">PREMIUM TRANSACTION ID</th>
<th width=\"20%\" align= center \">PREMIUM</th>
<th width=\"20%\" align= center \">PAYMENT DATE</th>
<th width=\"20%\" align= center \">PAID ON TIME</th></tr>";

$pname = mysql_fetch_assoc(mysql_query("SELECT POLICY_NAME FROM POLICY_LYF WHERE POLICY_ID='$a'"))['POLICY_NAME'];
echo $pname;
//$pname1 = mysql_fetch_assoc(mysql_query("SELECT POLICY_NAME FROM POLICY WHERE POLICY_ID='$a'"))['POLICY_NAME'];
//echo $pname1;
$query1 = mysql_query("SELECT PREMIUM_TR_ID FROM PREMIUM_TR_POLICY_LYF WHERE POLICY_LYF_ID='$a' AND POLICY_NAME='$pname'");
//$query2 = mysql_query("SELECT PREMIUM_TR_ID FROM PREMIUM_TR_POLICY WHERE POLICY_ID='$a' AND POLICY_NAME='$pname1'");
$query3 = mysql_fetch_assoc(mysql_query("SELECT CLAIM_TR_ID FROM CLAIM_POLICY_ID_LYF WHERE POLICY_ID_LYF='$a' AND POLICY_NAME='$pname' AND CUSTOMER_ID=$temp_cid"))['CLAIM_TR_ID'];
$query4 = mysql_fetch_assoc(mysql_query("SELECT AMOUNT_OF_CLAIM FROM CLAIM WHERE CLAIM_TR_ID=$query3"))['AMOUNT_OF_CLAIM'];


echo "<h2><center> Claim Transaction ID: $query3 </center></h2>";
echo "<h3><center> Claim Amount: $query4 </center></h3>";

while($row1=mysql_fetch_assoc($query1))
{
$tr=$row1['PREMIUM_TR_ID'];
$b=$_REQUEST['query4_1s'];

$query1_1 = mysql_fetch_assoc(mysql_query("SELECT PREMIUM FROM POLICY_LYF WHERE POLICY_ID='$a' AND POLICY_NAME='$b'"))['PREMIUM'];
$query1_2 = mysql_fetch_assoc(mysql_query("SELECT PAYMENT_DATE FROM PREMIUM WHERE PREMIUM_TR_ID=$tr"))['PAYMENT_DATE'];
$query1_3 = mysql_fetch_assoc(mysql_query("SELECT PAID_ON_TIME FROM PREMIUM_PAID WHERE PREMIUM_TR_ID=$tr"))['PAID_ON_TIME'];

echo "<tr><td>$tr</td><td>$query1_1</td><td>$query1_2</td><td>$query1_3</td></tr>";
}
//$b=$_REQUEST['query2_1s'];
/*while($row2=mysql_fetch_assoc($query2))
{

$tr=$row2['PREMIUM_TR_ID'];
$b=$_REQUEST['query5_1s'];
$query2_1 = mysql_fetch_assoc(mysql_query("SELECT PREMIUM FROM POLICY WHERE POLICY_ID='$a' AND POLICY_NAME='$b'"))['PREMIUM'];
$query2_2 = mysql_fetch_assoc(mysql_query("SELECT PAYMENT_DATE FROM PREMIUM WHERE PREMIUM_TR_ID=$tr"))['PAYMENT_DATE'];
$query2_3 = mysql_fetch_assoc(mysql_query("SELECT PAID_ON_TIME FROM PREMIUM_PAID WHERE PREMIUM_TR_ID=$tr"))['PAID_ON_TIME'];

echo "<tr><td>$tr</td><td>$query2_1</td><td>$query2_2</td><td>$query2_3</td></tr>";
}*/


/*while($row=mysql_fetch_assoc($query))
{
	$id=$row['PREMIUM_TR_ID'];
	//$query1 = mysql_fetch_assoc(mysql_query("SELECT POLICY_NAME FROM policy_lyf WHERE POLICY_ID='$id'"))['POLICY_NAME'];

	echo "<tr><td align=center>$id</td></tr>";
	//$name=$row['POLICY_NAME'];
}*/
/*$premium = "";
while($row=mysql_fetch_assoc($query))
{
	$premium=$row['PREMIUM'];
	//echo $premium;
}*/

//echo"<tr><td>"

?>

</table>
<div id="foot">&copy; 2017 VADA Insurance. All rights reserved.</div>
</body>
</html>