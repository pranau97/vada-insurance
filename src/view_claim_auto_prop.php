<html>

<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
$pid="";
$pid=mysqli_fetch_assoc(mysqli_query($con, "SELECT POLICY_ID from lyf_insurance where CUSTOMER_ID=$temp_cid"))['POLICY_ID'];;
echo $pid;
mysqli_close($con);*/
?> </h3>


<?php
include("clone_cust_session.php");
$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
mysqli_select_db($con,$db) or die(mysqli_error($con));


echo "<table width=\"40%\" align=center border=2>";
echo "<tr><th width=\"20%\" align= center \">PREMIUM TRANSACTION ID</th>
<th width=\"20%\" align= center \">PREMIUM</th>
<th width=\"20%\" align= center \">PAYMENT DATE</th>
<th width=\"20%\" align= center \">PAID ON TIME</th></tr>";

//$pname = mysqli_fetch_assoc(mysqli_query($con, "SELECT POLICY_NAME FROM POLICY_LYF WHERE POLICY_ID='$a'"))['POLICY_NAME'];
//echo $pname;
$pname1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT POLICY_NAME FROM POLICY WHERE POLICY_ID='$a'"))['POLICY_NAME'];
echo $pname1;
//$query1 = mysqli_query($con, "SELECT PREMIUM_TR_ID FROM PREMIUM_TR_POLICY_LYF WHERE POLICY_LYF_ID='$a' AND POLICY_NAME='$pname'");
$query2 = mysqli_query($con, "SELECT PREMIUM_TR_ID FROM PREMIUM_TR_POLICY WHERE POLICY_ID='$a' AND POLICY_NAME='$pname1'");
$query3 = mysqli_fetch_assoc(mysqli_query($con, "SELECT CLAIM_TR_ID FROM CLAIM_POLICY_ID WHERE POLICY_ID='$a' AND POLICY_NAME='$pname1' AND CUSTOMER_ID=$temp_cid"))['CLAIM_TR_ID'];
$query4 = mysqli_fetch_assoc(mysqli_query($con, "SELECT AMOUNT_OF_CLAIM FROM CLAIM WHERE CLAIM_TR_ID=$query3"))['AMOUNT_OF_CLAIM'];


echo "<h2><center> Claim Transaction ID: $query3 </center></h2>";
echo "<h3><center> Claim Amount: $query4 </center></h3>";

/*while($row1=mysqli_fetch_assoc($query1))
{
$tr=$row1['PREMIUM_TR_ID'];
$b=$_REQUEST['query4_1s'];

$query1_1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT PREMIUM FROM POLICY_LYF WHERE POLICY_ID='$a' AND POLICY_NAME='$b'"))['PREMIUM'];
$query1_2 = mysqli_fetch_assoc(mysqli_query($con, "SELECT PAYMENT_DATE FROM PREMIUM WHERE PREMIUM_TR_ID=$tr"))['PAYMENT_DATE'];
$query1_3 = mysqli_fetch_assoc(mysqli_query($con, "SELECT PAID_ON_TIME FROM PREMIUM_PAID WHERE PREMIUM_TR_ID=$tr"))['PAID_ON_TIME'];

echo "<tr><td>$tr</td><td>$query1_1</td><td>$query1_2</td><td>$query1_3</td></tr>";
}*/
//$b=$_REQUEST['query2_1s'];
while($row2=mysqli_fetch_assoc($query2))
{

$tr=$row2['PREMIUM_TR_ID'];
$b=$_REQUEST['query5_1s'];
$query2_1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT PREMIUM FROM POLICY WHERE POLICY_ID='$a' AND POLICY_NAME='$b'"))['PREMIUM'];
$query2_2 = mysqli_fetch_assoc(mysqli_query($con, "SELECT PAYMENT_DATE FROM PREMIUM WHERE PREMIUM_TR_ID=$tr"))['PAYMENT_DATE'];
$query2_3 = mysqli_fetch_assoc(mysqli_query($con, "SELECT PAID_ON_TIME FROM PREMIUM_PAID WHERE PREMIUM_TR_ID=$tr"))['PAID_ON_TIME'];

echo "<tr><td>$tr</td><td>$query2_1</td><td>$query2_2</td><td>$query2_3</td></tr>";
}


/*while($row=mysqli_fetch_assoc($query))
{
	$id=$row['PREMIUM_TR_ID'];
	//$query1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT POLICY_NAME FROM policy_lyf WHERE POLICY_ID='$id'"))['POLICY_NAME'];

	echo "<tr><td align=center>$id</td></tr>";
	//$name=$row['POLICY_NAME'];
}*/
/*$premium = "";
while($row=mysqli_fetch_assoc($query))
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