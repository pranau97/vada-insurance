<?php

echo "YOU HAVE SUCCESSFULLT PAID";
include("view_policy.php");

?>
<?php

mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
mysql_select_db("data") or die(mysql_error());
echo "<table width=\"40%\" align=center border=2>";
echo "<tr><td width=\"20%\" align= center \">TRANSACTION ID</td>
<td width=\"20%\" align= center \">PREMIUM</td>
<td width=\"20%\" align= center \">PAYMENT DATE</td>
<td width=\"20%\" align= center \">PAID</td></tr>";
$query = mysql_query("SELECT PREMIUM FROM policy_lyf WHERE POLICY_ID = '$pid'");
$premium = "";
while($row=mysql_fetch_assoc($query))
{
	$premium=$row['PREMIUM'];
	//echo $premium;
}

echo"<tr><td>"?><?php echo(rand(10,100)); ?> <?php echo "</td><td>"?><?php echo $premium; ?> <?php echo "</td></tr>"; ?>
