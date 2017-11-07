<html>

<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Employee Update</title>
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

<?php

session_start();

if(!isset($_SESSION['eid']))
{
	echo "Access Denied!";
}
else
{

//include("emp_session.php");
include("emp_search1.php");

echo "<h3> <a href='emp_users.php'>HOME</a></h3>";
echo "<h3> Choose an ID to edit: </h3><p>";

$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
mysqli_select_db($con,$db) or die(mysqli_error($con));

$per_page = 6;

function mysqli_result($res,$row=0,$col=0){ 
    $numrows = mysqli_num_rows($res); 
    if ($numrows && $row <= ($numrows-1) && $row >=0){
        mysqli_data_seek($res,$row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])){
            return $resrow[$col];
        }
    }
    return false;
}

$pages_query = mysqli_query($con, "SELECT COUNT('EMPLOYEE_ID') FROM employee");
$pages = ceil(mysqli_result($pages_query, 0) / $per_page);
 
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_page;
$query = mysqli_query($con, "SELECT * FROM employee LIMIT $start, $per_page");



echo "<table width=\"90%\" align=center border=2>";
echo "<tr><td width=\"40%\" align= center bgcolor=\"FFFF00\">ID</td>
<td width=\"40%\" align= center bgcolor=\"FFFF00\">FIRST NAME</td>
<td width=\"40%\" align= center bgcolor=\"FFFF00\">LAST NAME</td>
<td width=\"40%\" align= center bgcolor=\"FFFF00\">HOUSE NUMBER</td>
<td width=\"40%\" align= center bgcolor=\"FFFF00\">STREET</td>
<td width=\"40%\" align= center bgcolor=\"FFFF00\">PHONE NUMBER</td>
<td width=\"40%\" align= center bgcolor=\"FFFF00\">SEX</td>
<td width=\"40%\" align= center bgcolor=\"FFFF00\">EMAIL ID</td>
<td width=\"40%\" align= center bgcolor=\"FFFF00\">DOB</td>
<td width=\"40%\" align= center bgcolor=\"FFFF00\">PASSWORD</td>";

while($row=mysqli_fetch_assoc($query))
{
	$id=$row['EMPLOYEE_ID'];
	$name=$row['FIRST_NAME'];
	$last=$row['LAST_NAME'];
	$house=$row['HOUSE_NUMBER'];
	$street=$row['STREET'];
	$phone=$row['PHONE_NUMBER'];
	$sex=$row['SEX'];
	$email=$row['EMAIL_ID'];
	$dob=$row['DOB'];
	$password=$row['PASSWORD'];

echo "<tr><td align=center>
<a href=\"emp_edit.php?ids=$id&names=$name&lasts=$last&passwords=$password&dobs=$dob&sexs=$sex&emails=$email&phones=$phone&houses=$house&streets=$street\">$id</a></td>
<td>$name</td><td>$last</td><td>$house</td><td>$street</td><td>$phone</td><td>$sex</td><td>$email</td><td>$dob</td><td>$password</td></tr>";

} echo "</table>";

$prev = $page - 1;
$next = $page + 1;

echo "<center>";
if(!($page<=1))
{
	echo "<a href='emp_update.php?page=$prev'>Prev</a> ";
}

if($pages>=1)
{
	for($x=1;$x<=$pages;$x++)
	{
		echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ':'<a href="?page='.$x.'">'.$x.'</a> ';
	}
}

if(!($page>=$pages))
{
	echo "<a href='emp_update.php?page=$next'>Next</a> ";
}
echo "</center>";
mysqli_close($con);



//include('emp_links.php');
}

?>
<table>
</table>
<div id="foot">&copy; 2017 VADA Insurance. All rights reserved.</div>
</body>
</html>