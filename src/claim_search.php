

<html>
<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
<center>
<form method="POST" action="claim_search.php">

	<input type="text" name="search">
	<input type="submit" name="submit" value="search database">

</form>
</center>
<hr />
<u>Results:</u>&nbsp


<?php
/*
if(!isset($_SESSION['eid'])){

echo "Access denied!";

}else{*/

if(isset($_REQUEST['submit'])) {

	$search = $_REQUEST['search'];
	$terms = explode(" ", $search);
	$query = "SELECT * FROM claim_policy_id WHERE ";
	
	$i=0;
	foreach($terms as $each){		
		$i++;
		if($i==1){
			$query .= "concat_ws('',first_name,last_name,sex,phone_number,email_id,dob,house_number,street,password) LIKE '%$each%' ";
		}else{
			$query .= "OR concat_ws('',first_name,last_name,sex,phone_number,email_id,dob,house_number,street,password) LIKE '%$each%' ";
		}
	}
	
	$url=parse_url(getenv("CLEARDB_DATABASE_URL"));    $server = $url["host"];   $username = $url["user"];   $password1 = $url["pass"];   $db = substr($url["path"],1);   $con= mysqli_connect($server, $username, $password1) or die("Problem with connection...");
	mysqli_select_db($con,$db) or die(mysqli_error($con));
	
	$query = mysqli_query($con, $query);
	$num = mysqli_num_rows($query);
	
	if($num > 0 && $search!=""){
	
		echo "$num result(s) found for <b>$search</b>!";
	
		while($row = mysqli_fetch_assoc($query)){
		
			$eid = $row['EMPLOYEE_ID'];
			$name = $row['FIRST_NAME'];
			$last = $row['LAST_NAME'];
			$password = $row['PASSWORD'];
			$dob = $row['DOB'];
			$sex = $row['SEX'];
			$email = $row['EMAIL_ID'];
			$phone = $row['PHONE_NUMBER'];
			$house = $row['HOUSE_NUMBER'];
			$street = $row['STREET'];
		
			echo "<table>
			<br /><h3>Name: $name(Customer ID: $eid)</h3>
			<tr><td>First Name: </td> <td>$name</td></tr>
			<tr><td>Last Name: </td> <td>$last</td></tr>
			<tr><td>Sex: </td> <td>$sex</td></tr>
			<tr><td>Phone Number: </td> <td>$phone</td></tr>
			<tr><td>Email ID: </td> <td>$email</td></tr>
			<tr><td>DOB: </td> <td>$dob</td></tr>
			<tr><td>House Number: </td> <td>$house</td></tr>
			<tr><td>Street: </td> <td>$street</td></tr>
			<tr><td>Password: </td> <td>$password</td></tr>
			</table>";
		
		}
	
	} else {
	
		echo "No results found!";
	
	}

	mysqli_close($con);

} else {

	echo "Please type any word...";

}



?>

</body>


</html>