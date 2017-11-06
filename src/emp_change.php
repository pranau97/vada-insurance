<?php

$id = $_REQUEST['id'];
$newname = $_REQUEST['newname'];
$newlast = $_REQUEST['newlast'];
$newhouse = $_REQUEST['newhouse'];
$newstreet = $_REQUEST['newstreet'];
$newphone = $_REQUEST['newphone'];
$newsex = $_REQUEST['newsex'];
$newemail = $_REQUEST['newemail'];
$newdob = $_REQUEST['newdob'];
$newpassword = md5($_REQUEST['newpassword']);

$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
mysqli_select_db($con,$db) or die(mysqli_error($con));

mysqli_query($con, "UPDATE employee SET FIRST_NAME='$newname', LAST_NAME='$newlast', HOUSE_NUMBER='$newhouse', STREET='$newstreet', PHONE_NUMBER=$newphone, SEX='$newsex', EMAIL_ID='$newemail', DOB='$newdob', PASSWORD='$newpassword' 
WHERE EMPLOYEE_ID='$id' ");

echo "Your values have been updated succesfully!";
header("Refresh:2; url=emp_users.php");
mysqli_close($con);

//include('emp_links.php');

?>