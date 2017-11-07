<html>

<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>View Policy</title>
<style>     *{       font-family: 'Josefin Sans', sans-serif;     }
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
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
  <div class="navbar-header">
	<a class="navbar-brand" href="#">Welcome</a>
  </div>
</nav>

<div style="height: 50px"></div>
<h3>POLICY ID: 
<?php 
$a=$_REQUEST['ids'];
//$b=$_REQUEST['query2_1s'];
echo $a;
include("clone_cust_session.php");
/*
$pid="";
$pid=mysqli_fetch_assoc(mysqli_query($con, "SELECT POLICY_ID from lyf_insurance where CUSTOMER_ID=$temp_cid"))['POLICY_ID'];;
echo $pid;
mysqli_close($con);*/
?> </h3>


<?php

	$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
	mysqli_select_db($con,$db) or die(mysqli_error($con));


echo "<table width=\"40%\" align=center border=2>";
echo "<tr><th width=\"20%\" align= center \">PREMIUM TRANSACTION ID</th>
<th width=\"20%\" align= center \">PREMIUM</th>
<th width=\"20%\" align= center \">PAYMENT DATE</th>
<th width=\"20%\" align= center \">PAID ON TIME</th></tr>";

$pname1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT POLICY_NAME FROM POLICY WHERE POLICY_ID='$a'"))['POLICY_NAME'];

$query2 = mysqli_query($con, "SELECT PREMIUM_TR_ID FROM PREMIUM_TR_POLICY WHERE POLICY_ID='$a' AND POLICY_NAME='$pname1' AND CUSTOMER_ID='$temp_cid'");

while($row3=mysqli_fetch_assoc($query2))
{
$tr=$row3['PREMIUM_TR_ID'];
$b=$_REQUEST['query3_1s'];
$query2_1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT PREMIUM FROM POLICY WHERE POLICY_ID='$a' AND POLICY_NAME='$b'"))['PREMIUM'];
$query2_2 = mysqli_fetch_assoc(mysqli_query($con, "SELECT PAYMENT_DATE FROM PREMIUM WHERE PREMIUM_TR_ID=$tr"))['PAYMENT_DATE'];
$query2_3 = mysqli_fetch_assoc(mysqli_query($con, "SELECT PAID_ON_TIME FROM PREMIUM_PAID WHERE PREMIUM_TR_ID=$tr"))['PAID_ON_TIME'];

echo "<tr><td>$tr</td><td>$query2_1</td><td>$query2_2</td><td>$query2_3</td></tr>";
}

mysqli_close($con);

?>

</table>
<?php      include('footer.php');     ?>
</body>
</html>