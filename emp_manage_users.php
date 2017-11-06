<?php

session_start();
if(!isset($_SESSION['eid']))
{
	echo "Access Denied!";
	exit;
}
else
{
	include("emp_manage_session.php");
	//include("emp_links.php");
}

?>