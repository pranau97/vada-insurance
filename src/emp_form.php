<html>
<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<style>     *{       font-family: 'Josefin Sans', sans-serif;     }

body{
background-color:#FFFFCC;
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
margin-top:-250px;
}

#n4 td{
padding:10px;
}

#n5{
	margin-top:-30px;
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


<h2 id="n2">Registration Form for NEW EMPLOYEE</h2><b>Please Enter the following Details:</b>
<div id="n3">
<form ENCTYPE="multipart/form-data" method="post" action="emp_insert.php">

<table id="n4" border="0" width="60%">
<tr><td width="20%">BRANCH_ID: </td><td><input type="int" name="b_id" maxlength="6"/></td></tr><br />
<tr><td width="20%">D_ID: </td><td><input type="int" name="d_id" maxlength="6"/></td></tr><br />
<tr><td width="20%">DESIGNATION: </td><td><input type="text" name="designation" maxlength="15"/></td></tr><br />
<tr><td width="20%">FIRST NAME: </td><td><input type="text" name="name" maxlength="15"/></td></tr><br />
<tr><td width="20%">LAST NAME: </td><td><input type="text" name="last" maxlength="15"/></td></tr><br />
<tr><td width="20%">PASSWORD: </td><td><input type="password" name="password" maxlength="15"/></td></tr><br />
<tr><td width="20%">CONFIRM PASSWORD: </td><td><input type="password" name="cpassword" maxlength="15"/></td></tr><br />
<tr><td width="20%">SEX: </td><td><select name = "sex"><option value='M'>MALE</option><option value='F'>FEMALE</option></select><!--<input type="text" name="sex" maxlength="1"/></td></tr><br />-->
<tr><td width="20%">EMAIL ID: </td><td><input type="text" name="email" maxlength="35"/></td></tr><br />
<tr><td width="20%">DOB: </td><td><input type="date" name="dob"/></td></tr><br />
<tr><td width="20%">PHONE NUMBER: </td><td><input type="int" name="phone" maxlength="10"/></td></tr><br />
<tr><td width="20%">HOUSE NUMBER: </td><td><input type="text" name="house" maxlength="4"/></td></tr><br />
<tr><td width="20%">STREET: </td><td><input type="text" name="street" maxlength="15"/></td></tr><br />
<tr><td width="20%">PIN CODE: </td><td><input type="text" name="pincode" maxlength="6"/></td></tr><br />
<tr><td width="20%">CITY: </td><td><input type="text" name="city" maxlength="15"/></td></tr><br />
<tr><td width="20%">STATE: </td><td><input type="text" name="state" maxlength="15"/></td></tr><br />
<tr><td width="20%">SALARY: </td><td><input type="int" name="salary" maxlength="7"/></td></tr><br />
</table>
<h3>BANK DETAILS</h3>
<table id="n5" border="0" width="60%">
<tr><td width="20%">BANK NAME: </td><td><input type="text" name="bankname" maxlength="15"/></td></tr><br />
<tr><td width="20%">ACCOUNT NUMBER: </td><td><input type="text" name="accountnum" maxlength="15"/></td></tr><br />
</table>

<input type="hidden" name="MAX_FILE_SIZE" value="10000">
</table>
<p>

Choose your picture: <input type="file" name="upload"><p>
<input type="submit" value="register" /><br />

</form>
</div>
<?php      include('footer.php');     ?>
</body>


</html>