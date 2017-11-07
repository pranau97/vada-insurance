<html>
<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Customer</title>
<style>     *{       font-family: 'Josefin Sans', sans-serif;     }
body{
background-color:#FFFFCC;}

h3{

color:white;
padding:3px 1px 3px 6px;
background-color: #606060; 
width:250px;
margin-left: 10px;
margin-top:10px;

}

h4{
font-size:25px;
}

/* #header
{

font-size: 25px;
}

#header table{
text-align:center;
font-size: 10px;
width:80%;
margin:auto;
margin-top:30px;
border:5px solid;
}

#header td.i{
font-size:20px;
padding: 10px 100px 10px 100px;
spacing: 30px;

}

#header td.j{
font-size:20px;
padding: 5px;
spacing: 30px;
}

#header img{
width:150px;
height: 170px;
}

#header a:link{color:black;} */

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

<div id="logo1">
<table id="logo2" >
  <tr>
    <td  id="logo3">&nbsp;
    	<a href= "cust_users.php"><img src="logo1.PNG" height="100" width="145"></a>
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

<?php $date = date('F d, Y');
echo "Today, " .$date."<br />"; 
?>

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
<td class="i"><a href="cust_profile.php" target="_blank"><img src="profile.svg"></img></a></td>
<td class="i"><a href="my_policy.php"><img src="my_policy.png"></img></a></td>
<td class="i"><a href="policy.html" target="_blank"><img src="our_policy.jpg"></img></a></td>
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