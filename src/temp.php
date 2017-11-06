<?php

echo "YOU HAVE SUCCESSFULLT PAID";
include("view_policy.php");

?>
<?php

$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
mysqli_select_db($con,$db) or die(mysqli_error($con));
echo "<table width=\"40%\" align=center border=2>";
echo "<tr><td width=\"20%\" align= center \">TRANSACTION ID</td>
<td width=\"20%\" align= center \">PREMIUM</td>
<td width=\"20%\" align= center \">PAYMENT DATE</td>
<td width=\"20%\" align= center \">PAID</td></tr>";
$query = mysqli_query($con, "SELECT PREMIUM FROM policy_lyf WHERE POLICY_ID = '$pid'");
$premium = "";
while($row=mysqli_fetch_assoc($query))
{
	$premium=$row['PREMIUM'];
	//echo $premium;
}

echo"<tr><td>"?><?php echo(rand(10,100)); ?> <?php echo "</td><td>"?><?php echo $premium; ?> <?php echo "</td></tr>"; ?>
