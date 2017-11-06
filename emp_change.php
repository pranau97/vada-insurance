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

mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
mysql_select_db("data") or die(mysql_error());

mysql_query("UPDATE employee SET FIRST_NAME='$newname', LAST_NAME='$newlast', HOUSE_NUMBER='$newhouse', STREET='$newstreet', PHONE_NUMBER=$newphone, SEX='$newsex', EMAIL_ID='$newemail', DOB='$newdob', PASSWORD='$newpassword' 
WHERE EMPLOYEE_ID='$id' ");

echo "Your values have been updated succesfully!";
header("Refresh:2; url=emp_users.php");
mysql_close();

//include('emp_links.php');

?>