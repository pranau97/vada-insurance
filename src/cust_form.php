<html>
<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<style>     *{       font-family: 'Josefin Sans', sans-serif;     }

body{
background-color:#FFFFCC;
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

#n1 {margin-top:-200px;}
#n2{margin-top:-60px;}
#n3{margin-top:-40px;}

#foot{
background-color:green;
text-align:center;
width:102%;
margin-left:-10px;
color:white;
margin-top:50px;
}
</style>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
  <div class="navbar-header">
	<a class="navbar-brand" href="#">Welcome</a>
  </div>
</nav>

<div style="height: 50px"></div>


<h2>Registration Form for NEW CUSTOMER</h2>
<b>Please Enter The Following Details:</b>
<form ENCTYPE="multipart/form-data" method="post" action="cust_insert.php">
<table id="n1" border="0" width="60%">
<tr><td width="20%">FIRST NAME: </td><td><input type="text" name="name" maxlength="15"/></td></tr><br />
<tr><td width="20%">LAST NAME: </td><td><input type="text" name="last" maxlength="15"/></td></tr><br />
<tr><td width="20%">PASSWORD: </td><td><input type="password" name="password" maxlength="15"/></td></tr><br />
<tr><td width="20%">CONFIRM PASSWORD: </td><td><input type="password" name="cpassword" maxlength="15"/></td></tr><br />
<tr><td width="20%">DOB: </td><td><input type="date" name="dob"/></td></tr><br />
<tr><td width="20%">SEX: </td><td><select name = "sex"><option value='M'>MALE</option><option value='F'>FEMALE</option></select><!--<input type="text" name="sex" maxlength="1"/></td></tr><br />-->
<tr><td width="20%">Email: </td><td><input type="text" name="email" maxlength="35"/></td></tr><br />
<tr><td width="20%">PHONE NUMBER: </td><td><input type="int" name="phone" maxlength="10"/></td></tr><br />
<tr><td width="20%">HOUSE NUMBER: </td><td><input type="text" name="house" maxlength="4"/></td></tr><br />
<tr><td width="20%">STREET: </td><td><input type="text" name="street" maxlength="15"/></td></tr><br />
<tr><td width="20%">PIN CODE: </td><td><input type="text" name="pincode" maxlength="6"/></td></tr><br />
<tr><td width="20%">CITY: </td><td><input type="text" name="city" maxlength="15"/></td></tr><br />
<tr><td width="20%">STATE: </td><td><input type="text" name="state" maxlength="15"/></td></tr><br />
</table>
<h3>NOMINEE DETAILS</h3>
<table id="n2" border="0" width="60%">
<tr><td width="20%">NOMINEE NAME: </td><td><input type="text" name="nomi_name" maxlength="30"/></td></tr><br />
<tr><td width="20%">PHONE NUMBER: </td><td><input type="int" name="nphone" maxlength="10"/></td></tr><br />
<tr><td width="20%">DOB: </td><td><input type="date" name="ndob"/></td></tr><br />
<tr><td width="20%">SEX: </td><td><select name = "nsex"><option value='M'>MALE</option><option value='F'>FEMALE</option></select><!--<input type="text" name="nsex" maxlength="1"/></td></tr><br />-->
<tr><td width="20%">RELATION: </td><td><input type="text" name="nrelation" maxlength="10"/></td></tr><br />
</table>
<h3>BANK DETAILS</h3>
<table id="n3" border="0" width="60%">
<tr><td width="20%">BANK NAME: </td><td><input type="text" name="bankname" maxlength="15"/></td></tr><br />
<tr><td width="20%">ACCOUNT NUMBER: </td><td><input type="text" name="accountnum" maxlength="15"/></td></tr><br />
</table>

<input type="hidden" name="MAX_FILE_SIZE" value="10000">
<p>

Choose your picture: <input type="file" name="upload"><p>
<input type="submit" value="register" /><br />

</form>
<?php      include('footer.php');     ?>
</body>
</html>