<html>
<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Customer</title>
<style>     *{       font-family: 'Josefin Sans', sans-serif;     }
body{
background-color:#FFFFCC;}

h3{

padding:3px 1px 3px 6px;
width:250px;
margin-left: 10px;
margin-top:10px;

}

h4{
font-size:25px;
}

#logout{
margin-top:100px;
text-align:center;
margin-right:0px;
}

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
padding: 40px;
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

#logout{
margin-left:1430px;
margin-top:-20px;
}

hr{
	border:1px solid black;
}

</style>
</head>
<script>
	import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
</script>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
  <div class="navbar-header">
	<a class="navbar-brand" href="#">Welcome</a>
  </div>
</nav>

<div style="height: 50px"></div>

<h3>Welcome <?php echo "$first_name  <br />Customer ID	-	$temp_cid"?> </h3>  
<?php $open = opendir($dir);
	while(($file = readdir($open)) != FALSE)
	{
		if($file!="."&&$file!=".."&&$file!="Thumbs.db")
		{
			echo "<img border='1' width='80' height='100' src='$dir/$file'><br />";
		}
	}
	echo "<div id='logout'> <b><a href='cust_logout.php'>Logout</a></div>";	
?>
<hr>

<div id="navbar-header">
<table>
<tr>
<td class="i"><a href="cust_profile.php" target="_blank"><img src="profile.svg" height="150" width="150"></img></a></td>
<td class="i"><a href="my_policy.php"><img src="my_policy.png" height="150" width="150"></img></a></td>
<td class="i"><a href="policy.html" target="_blank"><img src="our_policy.jpg" height="150" width="150"></img></a></td>
</tr>

<tr>
<td class="j"><a href="cust_profile.php" target="_blank">Profile</a></td>
<td class="j"><a href="my_policy.php">My Policies</a></td>
<td class="j"><a href="policy.html" target="_blank">All Policies</a></td>
</tr>
</table>
</div>

<?php
	include("footer.php");
?>
</body>
</html>