<html>

<head>
<title>View Policy</title>
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
margin-top:450px;
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
//$b=$_REQUEST['query2_1s'];
echo $a;
include("clone_cust_session.php");
/*mysql_connect("localhost","root","") or die("Problem with connection...");
mysql_select_db("insurance");
$pid="";
$pid=mysql_fetch_assoc(mysql_query("SELECT POLICY_ID from lyf_insurance where CUSTOMER_ID=$temp_cid"))['POLICY_ID'];;
echo $pid;
mysql_close();*/
?> </h3>


<?php

	mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());


echo "<table width=\"40%\" align=center border=2>";
echo "<tr><th width=\"20%\" align= center \">PREMIUM TRANSACTION ID</th>
<th width=\"20%\" align= center \">PREMIUM</th>
<th width=\"20%\" align= center \">PAYMENT DATE</th>
<th width=\"20%\" align= center \">PAID ON TIME</th></tr>";

$pname1 = mysql_fetch_assoc(mysql_query("SELECT POLICY_NAME FROM POLICY WHERE POLICY_ID='$a'"))['POLICY_NAME'];

$query2 = mysql_query("SELECT PREMIUM_TR_ID FROM PREMIUM_TR_POLICY WHERE POLICY_ID='$a' AND POLICY_NAME='$pname1' AND CUSTOMER_ID='$temp_cid'");

while($row3=mysql_fetch_assoc($query2))
{
$tr=$row3['PREMIUM_TR_ID'];
$b=$_REQUEST['query3_1s'];
$query2_1 = mysql_fetch_assoc(mysql_query("SELECT PREMIUM FROM POLICY WHERE POLICY_ID='$a' AND POLICY_NAME='$b'"))['PREMIUM'];
$query2_2 = mysql_fetch_assoc(mysql_query("SELECT PAYMENT_DATE FROM PREMIUM WHERE PREMIUM_TR_ID=$tr"))['PAYMENT_DATE'];
$query2_3 = mysql_fetch_assoc(mysql_query("SELECT PAID_ON_TIME FROM PREMIUM_PAID WHERE PREMIUM_TR_ID=$tr"))['PAID_ON_TIME'];

echo "<tr><td>$tr</td><td>$query2_1</td><td>$query2_2</td><td>$query2_3</td></tr>";
}

mysql_close();

?>

</table>
<div id="foot">&copy; 2017 VADA Insurance. All rights reserved.</div>
</body>
</html>