<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Policy details</title>
<style type="text/css">

body{
background-color:#FFFFCC;
}

#main table{
margin-left:100px;
border: 1px solid black;
cell-spacing:10px;
}

#main th{
border: 1px solid black;
cell-spacing: 10px;
}

#main td{
border: 1px solid black;
text-align:center;
padding:5px;
}

h4{
margin-left:35px;
}

#foot{
background-color:green;
text-align:center;
width:102%;
margin-left:-10px;
color:white;
margin-top:90px;
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


</style>

</head>

<body>

<div id="logo1">
<table id="logo2" >
  <tr>
    <td  id="logo3">&nbsp;
    	<a href= "cust_users.php"><img src="logo1.PNG" height="100" width="145"></a>
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


<h3><strong>My Policy Details</strong></h3>
<h4><strong>Running Policies</strong></h4>

<div id="main">

<table>


<?php   include("clone_cust_session.php");
$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
mysqli_select_db($con,$db) or die(mysqli_error($con));

echo "<table width=\"20%\" align=center border=2>";
echo "<tr><td width=\"20%\" align= center \">POLICY ID</td>
<td width=\"20%\" align= center \">POLICY NAME</td>";

$query1 = mysqli_query($con, "SELECT * FROM lyf_insurance WHERE CUSTOMER_ID=$temp_cid");
$query2 = mysqli_query($con, "SELECT * FROM aut_insurance WHERE CUSTOMER_ID=$temp_cid");
$query3 = mysqli_query($con, "SELECT * FROM prop_insurance WHERE CUSTOMER_ID=$temp_cid");


while($row1=mysqli_fetch_assoc($query1))
{
	$id=$row1['POLICY_ID'];
	$query1_1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT POLICY_NAME FROM policy_lyf WHERE POLICY_ID='$id'"))['POLICY_NAME'];

	echo "<tr><td align=center>
	<a href='view_policy.php?ids=$id&query1_1s=$query1_1'>$id</a></td><td>$query1_1</td></tr>";
	//$name=$row['POLICY_NAME'];
}
while($row2=mysqli_fetch_assoc($query2))
{
	$id=$row2['POLICY_ID'];
		$query2_1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT POLICY_NAME FROM policy WHERE POLICY_ID='$id'"))['POLICY_NAME'];

	echo "<tr><td align=center>
	<a href='view_policy.php?ids=$id&query2_1s=$query2_1'>$id</a></td><td>$query2_1</td></tr>";
	
}
while($row3=mysqli_fetch_assoc($query3))
{
	$id=$row3['POLICY_ID'];
		$query3_1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT POLICY_NAME FROM policy WHERE POLICY_ID='$id'"))['POLICY_NAME'];
		
		echo "<tr><td align=center>
		<a href='view_policy_prop.php?ids=$id&query3_1s=$query3_1'>$id</a></td><td>$query3_1</td></tr>";
	
}
/*while($row=mysqli_fetch_assoc($query))
{
	$id=$row['POLICY_ID'];
	
echo "<tr><td align=center>
<a href='view_policy.php?ids=$id'>$id</a></td><td></td></tr>";
	//$name=$row['POLICY_NAME'];
}*/
?>


</table>

<h4><strong>Claimed Policies</strong></h4>

<table>

<?php  
	$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
	mysqli_select_db($con,$db) or die(mysqli_error($con));

echo "<table width=\"40%\" align=center border=2>";
echo "<tr><td width=\"20%\" align= center \">POLICY ID</td>
<td width=\"20%\" align= center \">POLICY NAME</td>";

$query4 = mysqli_query($con, "SELECT * FROM claim_policy_id_lyf WHERE CUSTOMER_ID=$temp_cid");
$query5 = mysqli_query($con, "SELECT * FROM claim_policy_id WHERE CUSTOMER_ID=$temp_cid");
//$query6 = mysqli_query($con, "SELECT * FROM claim_policy_id WHERE CUSTOMER_ID=$temp_cid");

while($row4=mysqli_fetch_assoc($query4))
{
	$id=$row4['POLICY_ID_LYF'];
	$query4_1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT POLICY_NAME FROM policy_lyf WHERE POLICY_ID='$id'"))['POLICY_NAME'];

	echo "<tr><td align=center>
	<a href='view_claim.php?ids=$id&query4_1s=$query4_1'>$id</a></td><td>$query4_1</td></tr>";
	//$name=$row['POLICY_NAME'];
}
while($row5=mysqli_fetch_assoc($query5))
{
	$id=$row5['POLICY_ID'];
	$query5_1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT POLICY_NAME FROM policy WHERE POLICY_ID='$id'"))['POLICY_NAME'];

	echo "<tr><td align=center>
	<a href='view_claim_auto_prop.php?ids=$id&query5_1s=$query5_1'>$id</a></td><td>$query5_1</td></tr>";
	//$name=$row['POLICY_NAME'];
}
/*while($row6=mysqli_fetch_assoc($query6))
{
	$id=$row6['POLICY_ID'];
	$query6_1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT POLICY_NAME FROM policy WHERE POLICY_ID='$id'"))['POLICY_NAME'];

	echo "<tr><td align=center>
	<a href='view_policy.php?ids=$id'>$id</a></td><td>$query6_1</td></tr>";
	//$name=$row['POLICY_NAME'];
}*/
?>

</table>

</div>

<div id="foot">&copy; 2017 VADA Insurance. All rights reserved.</div>
</body>
</html>
