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
margin-top:90px;
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

#n1 td{padding:10px;}

</style>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
  <div class="navbar-header">
	<a class="navbar-brand" href="#">Welcome</a>
  </div>
</nav>

<div style="height: 50px"></div>


<h3>Edit Customer: <?php echo $_REQUEST['names']; ?> </h3>

<form method="POST" action ="cust_change.php">
<table id="n1" border="0" width="60%">

<tr><td width="30%">First Name: </td><td><input type="text" name="newname"
value="<?php echo $_REQUEST['names'];?>"> </td></tr>

<tr><td width="30%">Last Name: </td><td><input type="text" name="newlast"
value="<?php echo $_REQUEST['lasts'];?>"> </td></tr>

<tr><td width="30%">Password: </td><td><input type="password" name="newpassword"
value="<?php echo $_REQUEST['passwords'];?>"> </td></tr>

<tr><td width="30%">DOB: </td><td><input type="date" name="newdob"
value="<?php echo $_REQUEST['dobs'];?>"> </td></tr>

<tr><td width="30%">Sex: </td><td><input type="text" name="newsex"
value="<?php echo $_REQUEST['sexs'];?>"> </td></tr>

<tr><td width="30%">Email: </td><td><input type="text" name="newemail"
value="<?php echo $_REQUEST['emails'];?>"> </td></tr>

<tr><td width="30%">Phone Number: </td><td><input type="int" name="newphone"
value="<?php echo $_REQUEST['phones'];?>"> </td></tr>

<tr><td width="30%">House Number: </td><td><input type="text" name="newhouse"
value="<?php echo $_REQUEST['houses'];?>"> </td></tr>

<tr><td width="30%">Street: </td><td><input type="text" name="newstreet"
value="<?php echo $_REQUEST['streets'];?>"> </td></tr>

</table>
<!--
<tr><td width="30%">Pin Code: </td><td><input type="text" name="newpincode"
value="<?php echo $_REQUEST['pincodes'];?>"> </td></tr>

<tr><td width="30%">City: </td><td><input type="text" name="newcity"
value="<?php echo $_REQUEST['citys'];?>"> </td></tr>

<tr><td width="30%">State: </td><td><input type="text" name="newstate"
value="<?php echo $_REQUEST['states'];?>"> </td></tr>
</table>

<h3>EDIT NOMINEE DETAILS</h3>
<table border="0" width="60%">
<tr><td width="30%">Nominee Name: </td><td><input type="text" name="newnomi_name"
value="<?php echo $_REQUEST['nomi_names'];?>"> </td></tr>

<tr><td width="30%">Phone Number: </td><td><input type="number" name="newnphone"
value="<?php echo $_REQUEST['nphones'];?>"> </td></tr>

<tr><td width="30%">DOB: </td><td><input type="date" name="newndob"
value="<?php echo $_REQUEST['ndobs'];?>"> </td></tr>

<tr><td width="30%">Sex: </td><td><input type="text" name="newnsex"
value="<?php echo $_REQUEST['nsexs'];?>"> </td></tr>

<tr><td width="30%">Relation: </td><td><input type="text" name="newnrelation"
value="<?php echo $_REQUEST['nrelations'];?>"> </td></tr>
</table>

<h3>EDIT BANK DETAILS</h3>
<table border="0" width="60%">
<tr><td width="20%">BANK NAME: </td><td><input type="text" name="newbankname"
value="<?php echo $_REQUEST['banknames'];?>"> </td></tr>

<tr><td width="20%">ACCOUNT NUMBER: </td><td><input type="text" name="newaccountnum"
value="<?php echo $_REQUEST['accountnums'];?>"> </td></tr>
</table>
-->
<p>

<input type="submit" value="Save & Update" />
<input type="hidden" name="id" value="<?php echo $_REQUEST['ids'];?>">

</form>

<?php      include('footer.php');     ?>
</body>

</html>

<?php //include("emp_links.php");  ?>