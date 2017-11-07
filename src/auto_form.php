<html>
<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<style type="text/css">

body{
background-color:#FFFFCC;
}

#main table{
margin-left:100px;
border: 1px solid black;
cell-spacing:10px;
}

#main th{
border: 1px solid black;
cell-spacing: 10px;
}

#main td{
border: 1px solid black;
text-align:center;
padding:5px;
}

h4{
margin-left:35px;
}

#foot{
background-color:green;
text-align:center;
width:102%;
margin-left:-10px;
color:white;

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

#n2{

text-align:center;
font-size:25px;
}

#n3{
margin-left:0px;
}


#n4{
margin-top:-100px;
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



<h2 id="n2">Registration Form for Automobile Insurance</h2>
<div id="n3">
<form  ENCTYPE="multipart/form-data" method="post" action="auto_form_insert.php">
<h3>AUTOMOBILE INSURANCE</h3>
Please Enter the following Details:
<table id="n4" border="0" width="60%">
<tr><td width="20%"> CUSTOMER ID: </td><td><input type="text" name="cid" maxlength="4"/></td></tr>
<tr><td width="20%">POLICY ID: </td><td><input type="text" name="autid" maxlength="6"/></td></tr><br />
<tr><td width="20%">POLICY DATE: </td><td><input type="date" name="autdate" value="<?php $date = date('Y-m-d');echo $date; ?>"/></td></tr><br />
<tr><td width="20%">LICENSE NUMBER: </td><td><input type="text" name="licnum" maxlength="15"/></td></tr><br />
<tr><td width="20%">REGISTRATION NUMBER: </td><td><input type="text" name="regnum" maxlength="15"/></td></tr><br />
<tr><td width="20%">VEHICLE MANUFACTURER: </td><td><input type="text" name="vehiclemanufac" maxlength="15"/></td></tr><br />
<tr><td width="20%">YEAR OF BUILT: </td><td><input type="int" name="yob" maxlength="4"/></td></tr><br />
<tr><td width="20%">COST OF VEHICLE: </td><td><input type="int" name="costofvehicle" maxlength="8"/></td></tr><br />
<tr><td><input type="submit" value="register" /></td></tr>
</table>


</form>
</div>

<div id="foot">&copy; 2017 VADA Insurance. All rights reserved.</div>
</body>
</html>