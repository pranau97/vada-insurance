<html>
<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<style>     *{       font-family: 'Josefin Sans', sans-serif;     }

body{
background-color:#FFFFCC;

}

#foot{
background-color:green;
margin-top:10px;
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

#n4{
margin-top:-50px;
}

#n4 td{
padding:10px;
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

<h2 id="n2">PREMIUM DEPOSIT</h2>

<h3>Customer ID: <?php echo $_REQUEST['acids']; ?> </h3>

<form ENCTYPE="multipart/form-data" method="post" action="cust_autopremium_insert.php">
Please Enter the following Details:
<table id="n4" border="0" width="60%">
<tr><td width="20%">CUSTOMER ID: </td><td><input type="text" name="cid" value=<?php echo $_REQUEST['acids']; ?> maxlength="4"/></td></tr>
<tr><td width="20%">AUTO POLICY ID: </td><td><input type="text" name="autoid" value=<?php echo $_REQUEST['aids']; ?> maxlength="6"/></td></tr><br />
<tr><td width="20%">PAYMENT DATE: </td><td><input type="date" name="paydate" value="<?php $date = date('Y-m-d');echo $date; ?>"/></td></tr><br />
<tr><td width="20%">DUE DATE: </td><td><input type="date" name="duedate"/></td></tr><br />
<tr><td width="20%">TRANSACTION ID: </td><td><input type="int" name="transacid" maxlength="10"/></td></tr><br />
<tr><td width="20%">PAID_ON_TIME: </td><td><input type="text" name="paid" maxlength="10"/></td></tr><br />
<tr><td><input type="submit" value="PAY" /></tr></td>

</table>



<?php      include('footer.php');     ?>

</form>
</body>
</html>