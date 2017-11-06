<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Employee Login</title>
<style type="text/css">

body{
background-color:#FFFFCC;
padding: 0px;
width: 100%;
height: 100%;
margin: auto;
font-family: Arial;
}

#header{
width: 100%;
height: 150px;
background: black;
text-align: center;
}

#main{
height: 500px;
width: 800px;
}

h4{
padding:3px 1px 3px 6px;

margin-left: 10px;
}

#foot{
background-color:green;
text-align:center;
width:102%;
margin-left:-10px;
color:white;
margin-top:306px;
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

<h4>Welcome Employee...&nbsp;Kindly login.</h4>

<form method="post" action="emp_manage_login.php">
<table>
	<tr><td>ID: </td><td><input type="text" name="eid" maxlength="4"/></td></tr><br />
	<tr><td>Password: </td><td><input type="password" name="password" maxlength="15"/></td></tr><br />
	<tr><td><br/></td></tr>

<td><input type="submit" value="login" /><br /></td>

</table>
</form>


<div id="foot">&copy; 2017 VADA Insurance. All rights reserved.</div>

</div>

</body>
</html>