<?php

session_start();

if(!isset($_SESSION['cid']))
{
	echo "Access Denied!";
	exit;
}
else
{
	include("cust_session.php");
	//include("cust_links.php");
}

?>