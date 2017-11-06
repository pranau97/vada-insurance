
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Branch Manager</title>
<style type="text/css">

body{
background-color:#FFFFCC;}

h3{
padding:3px 1px 3px 6px;
margin-left: 10px;
}


#header
{

border-top:1px solid black;
text-align:center;
font-size: 0px;

border-bottom:1px solid black;
}

#header table{
text-align:center;
font-size: 10px;
}

#header td{
font-size:20px;
padding: 10px;
spacing: 30px;
}

#header a:link{color:black;}

#footer{

height: 100px;
align:center;
font-size: 22px;  
margin-left: 335px;
width:100;
}

#footer table{
cell-spacing: 100px;
text-align:left;
border-spacing:10px;}


#footer td
{
padding: 30px;
spacing: 100px;
}

#footer a:link{
color: black;
}

#footer a:visited{
color: green;
}

#footer a:hover{
color: purple;
}

#foot{
background-color:green;
text-align:center;
width:102%;
margin-left:-10px;
margin-top:400px;
color:white;}


body{
background-color:#FFFFCC;}

h3{
padding:3px 1px 3px 6px;
margin-left: 10px;
}


#header
{

border-top:1px solid black;
text-align:center;
font-size: 0px;

border-bottom:1px solid black;
}

#header table{
text-align:center;
font-size: 10px;
}

#header td{
font-size:20px;
padding: 10px;
spacing: 30px;
}

#header a:link{color:black;}

#footer{

height: 100px;
align:center;
font-size: 25px;  
margin-left: 335px;
width:100;

}

#footer table{
cell-spacing: 100px;
text-align:left;
border-spacing:10px;}


#footer td
{
padding: 30px;
spacing: 100px;
}

#footer a:link{
color: black;
}

#footer a:visited{
color: green;
}

#footer a:hover{
color: purple;
}

#foot{
background-color:green;
text-align:center;
width:102%;
margin-left:-10px;
margin-top:300px;
color:white;}

#logout{
text-align:right;
}


#logo1{
width:110%;
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
    	<img src="logo1.PNG" height="100" width="145">
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


<?php $date = date('F d, Y');
echo date('D');
echo ", ";
echo $date; 
?>

<h3>Welcome   <?php echo "$first_name  <br />Employee ID	-	$temp_eid"?> </h3>  
<?php $open = opendir($dir);
	while(($file = readdir($open)) != FALSE)
	{
		if($file!="."&&$file!=".."&&$file!="Thumbs.db")
		{
			echo "<img border='1' width='80' height='100' src='$dir/$file'><br />";
		}
	}
	echo "<div id='logout'> <b><a href='emp_logout.php'>Logout</a></div>";	
?>

<div id="header">
<table id="1">
<tr><td> Designation: </td><td><?php mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	echo mysql_fetch_assoc(mysql_query("SELECT DESIGNATION FROM emp_designation WHERE EMPLOYEE_ID=$temp_eid "))['DESIGNATION'];

	?></td></tr>
<tr><td> Branch:</td><td><?php mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	echo mysql_fetch_assoc(mysql_query("SELECT BRANCH_ID FROM has WHERE D_ID=(SELECT D_ID FROM works_for where EMPLOYEE_ID=$temp_eid) "))['BRANCH_ID'];
	
	?></td></tr>
<tr><td> Department:</td><td><?php mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
	mysql_select_db("data") or die(mysql_error());
	echo mysql_fetch_assoc(mysql_query("SELECT D_ID FROM works_for where EMPLOYEE_ID=$temp_eid"))['D_ID'];
	
	?></td></tr>
</table>
<br/>
<br/>
</div>
<div id="footer">

<table id="2">
<tr><td><a href="emp_profile.php" target="_blank">Profile</a></td><td><a href="policy.html" target="_blank">View Policies</a></td></tr>
<tr><td><a href="cust_form.php">Add New Customer</a> </td><td><a href="emp_form.php">Add New Employee</a></td></tr>
<tr><td><a href="cust_update.php">View Customer Details</a> </td><td><a href="emp_update.php">View Employee Details</a></td></tr>
<tr><td><a href="cust_premium.php">Customer Premium Deposit</a></td><td><a href="cust_claim.php">Customer Claim</a></td></tr>

</table>

</div>

<div id="foot">&copy; 2017 VADA Insurance. All rights reserved.</div>
</body>
</html>
