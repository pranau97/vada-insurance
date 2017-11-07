<html>
<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<style type="text/css">

body{
background-color:#FFFFCC;
}

#foot{
background-color:green;
text-align:center;
width:102%;
margin-left:-10px;
color:white;
margin-top:50px;
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

#n4{
margin-top:-40px;
}

#n4 td{
padding:10px;
}

</style>

<body>

<div id="logo1">
<table id="logo2" >
  <tr>
    <td  id="logo3">&nbsp;
    	<a href= "emp_users.php"><img src="logo1.PNG" height="100" width="145"></a>
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

<h2 align="center">Registration Form for Property Insurance</h2>
<form ENCTYPE="multipart/form-data" method="post" action="prop_form_insert.php">
<h3>PROPERTY INSURANCE</h3>

<table id="n4" border="0" width="60%">
<b>Please Enter The Following Details:</b>
<tr><td width="20%">CUSTOMER ID: </td><td><input type="text" name="cid" maxlength="4"/></td></tr>
<tr><td width="20%">POLICY ID: </td><td><input type="text" name="propid" maxlength="6"/></td></tr><br />
<tr><td width="20%">POLICY DATE: </td><td><input type="date" name="propdate" value="<?php $date = date('Y-m-d');echo $date; ?>"/></td></tr><br />
<tr><td width="20%">BUILD UP COST: </td><td><input type="int" name="buildupcost" maxlength="8"/></td></tr><br />
<tr><td width="20%">AREA(in sq. ft): </td><td><input type="int" name="area" maxlength="5"/></td></tr><br />
<tr><td width="20%">FULL ADDRESS: </td><td><input type="text" name="address" maxlength="30"/></td></tr><br />
<tr><td><input type="submit" value="register" /><br /></tr></td>
</table>
</form>

<div id="foot">&copy; 2017 VADA Insurance. All rights reserved.</div>
</body>
</html>