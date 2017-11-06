<?php

$id = $_REQUEST['id'];
$newname = $_REQUEST['newname'];
$newlast = $_REQUEST['newlast'];
$newpassword = md5($_REQUEST['newpassword']);
$newdob = $_REQUEST['newdob'];
$newsex = $_REQUEST['newsex'];
$newemail = $_REQUEST['newemail'];
$newphone = $_REQUEST['newphone'];
$newhouse = $_REQUEST['newhouse'];
$newstreet = $_REQUEST['newstreet'];


/*$newpincode = $_REQUEST['newpincode'];
$newcity = $_REQUEST['newcity'];
$newstate = $_REQUEST['newstate'];

$newnomi_name = $_REQUEST['newnomi_name'];
$newnphone = $_REQUEST['newnphone'];
$newndob = $_REQUEST['newndob'];
$newnsex = $_REQUEST['newnsex'];
$newnrelation = $_REQUEST['newnrelation'];

$newbankname = $_REQUEST['newbankname'];
$newaccountnum = $_REQUEST['newaccountnum'];*/




$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
mysqli_select_db($con,$db) or die(mysqli_error($con));

mysqli_query($con, "UPDATE customer SET FIRST_NAME='$newname', LAST_NAME='$newlast', HOUSE_NUMBER='$newhouse', STREET='$newstreet', PHONE_NUMBER=$newphone, SEX='$newsex', EMAIL_ID='$newemail', DOB='$newdob', PASSWORD='$newpassword' 
WHERE CUSTOMER_ID='$id' ");
//mysqli_query($con, "INSERT INTO pin_state(pincode,state) VALUES('$newpincode','$newstate')");
//mysqli_query($con, "INSERT INTO pin_city(pincode,city) VALUES('$newpincode','$newcity')");
//mysqli_query($con, "UPDATE nominee SET NAME='$newnomi_name', LAST_NAME='$newlast', PHONE_NUMBER=$newnphone, SEX='$newnsex', RELATION='$newnrelation'
//WHERE CUSTOMER_ID='$id' ");
//mysqli_query($con, "UPDATE customer_account SET ACCOUNT_NUMBER='$newaccountnum' WHERE CUSTOMER_ID='$id' ");

echo "Your values have been updated succesfully!";
header("Refresh:2; url=emp_users.php");
mysqli_close($con);

//include('emp_links.php');

?>
