<html>
<head>
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
margin-top:40px;
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

#n1{
margin-top:-50px;
}

#n1 td{
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


<h2>PREMIUM DEPOSIT</h2>

<h3>Customer ID: <?php echo $_REQUEST['pcids']; ?> </h3>

<form ENCTYPE="multipart/form-data" method="post" action="cust_proppremium_insert.php">

<table id="n1" border="0" width="60%">

<b>Please Enter the following Details:<b>
<tr><td width="20%">CUSTOMER ID: </td><td><input type="text" name="cid" value=<?php echo $_REQUEST['pcids']; ?> maxlength="4"/></td></tr>
<tr><td width="20%">PROPERTY POLICY ID: </td><td><input type="text" name="propid" value=<?php echo $_REQUEST['pids']; ?> maxlength="6"/></td></tr><br />
<tr><td width="20%">PAYMENT DATE: </td><td><input type="date" name="paydate" value="<?php $date = date('Y-m-d');echo $date; ?>"/></td></tr><br />
<tr><td width="20%">DUE DATE: </td><td><input type="date" name="duedate"/></td></tr><br />
<tr><td width="20%">TRANSACTION ID: </td><td><input type="int" name="transacid" maxlength="10"/></td></tr><br />
<tr><td width="20%">PAID_ON_TIME: </td><td><input type="text" name="paid" maxlength="10"/></td></tr><br />
<tr><td><input type="submit" value="PAY" /></tr></td>

</table>

</form>

<div id="foot">&copy; 2017 VADA Insurance. All rights reserved.</div>
</body>
</html>