<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Customer Login</title>
<style type="text/css">

body{
background-color:#FFFFCC;
width: 105%;
margin: auto;
font-family: Arial;
}

h4{
padding:3px 1px 3px 6px;
margin-left: 10px;
}


#footer{
background-color:green;
text-align:center;
width:102%;
margin-left:-10px;
color:white;
margin-top:296px;
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

#n1{margin-top:-30px;}
</style>

</head>

<body>

<div id="logo1">
<table id="logo2" >
  <tr>
    <td  id="logo3">&nbsp;
    	<a href= "main.php"><img src="logo1.PNG" height="100" width="145"></a>
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

<h4>Welcome Customer...&nbsp;Kindly login.</h4>

<form method="post" action="cust_login.php">
<table id="n1">
	<tr><td>ID: </td><td><input type="text" name="cid" maxlength="4"/></td></tr><br />
	<tr><td>Password: </td><td><input type="password" name="password" maxlength="15"/></td></tr><br />
	<tr><td><br/></td></tr>
	
<td><input type="submit" value="login" /><br /></td>

</table>
</form>

<!--<a href="cust_form.php">Register?</a>-->
<div id="footer">&copy; 2017 VADA Insurance. All rights reserved.</div>

</div>

</body>
</html>