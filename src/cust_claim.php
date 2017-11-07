<html>
<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Customer Claim</title>
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

<h2>CUSTOMER CLAIM</h2>

<center><h3>
<p>
<a href="emp_users.php">HOME</a>
</h3>
<p>

<?php   //include("clone_cust_session.php");
$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
mysqli_select_db($con,$db) or die(mysqli_error($con));

echo "<table width=\"50%\" align=center border=2>";
echo "<tr><th width=\"20%\" align= center \">CUSTOMER ID</th>
<th width=\"30%\" align= center \">POLICY ID</th>
<th width=\"15%\" align= center \">CLAIM</th></tr>";

$query = mysqli_query($con, "SELECT * FROM lyf_insurance");
$query1 = mysqli_query($con, "SELECT * FROM aut_insurance");
$query2 = mysqli_query($con, "SELECT * FROM prop_insurance");



while($row=mysqli_fetch_assoc($query))
{
	$lid=$row['POLICY_ID'];
	$cid=$row['CUSTOMER_ID'];


echo "<tr><td align=center>
$cid</td><td align=center >$lid</td><td align=center ><a href='claim_lyf_processing.php?cids=$cid&lids=$lid'><input type='submit' value='claim' /><a/></tr>";

}

while($row1=mysqli_fetch_assoc($query1))
{
	$aid=$row1['POLICY_ID'];
	$acid=$row1['CUSTOMER_ID'];

echo "<tr><td align=center>
$acid</td><td align=center >$aid</td><td align=center ><a href='claim_auto_processing.php?acids=$acid&aids=$aid'><input type='submit' value='claim' /><a/></tr>";

}

while($row2=mysqli_fetch_assoc($query2))
{
	$pid=$row2['POLICY_ID'];
	$pcid=$row2['CUSTOMER_ID'];

echo "<tr><td align=center>
$pcid</td><td align=center >$pid</td><td align=center ><a href='claim_prop_processing.php?pcids=$pcid&pids=$pid'><input type='submit' value='claim' /><a/></tr>";

}
?>
</table>
<div id="foot">&copy; 2017 VADA Insurance. All rights reserved.</div>
</body>
</html>