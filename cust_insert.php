
<?php

$mypic = $_FILES['upload']['name'];
$temp = $_FILES['upload']['tmp_name'];
$type = $_FILES['upload']['type'];


$name = $_POST['name'];
$last = $_POST['last'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$house = $_POST['house'];
$street = $_POST['street'];

$pincode = $_POST['pincode'];
$city = $_POST['city'];
$state = $_POST['state'];

$nomi_name = $_POST['nomi_name'];
$nphone = $_POST['nphone'];
$ndob = $_POST['ndob'];
$nsex = $_POST['nsex'];
$nrelation = $_POST['nrelation'];

$bankname = $_POST['bankname'];
$accountnum = $_POST['accountnum'];

$f=0;
mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
mysql_select_db("data") or die(mysql_error());

$query = mysql_query("SELECT * FROM customer_account");
while($row=mysql_fetch_assoc($query))
{
	$acc_num=$row['ACCOUNT_NUMBER'];
	if($accountnum==$acc_num)
	{
		
		echo "Bank Account Number already exists<br />
		Please enter another valid Account Number<br />";
		$f=1;
	}
}

if ($name && $last && $password && $cpassword && $dob && $sex && $email && $phone && $house && $street && $pincode && 
$city && $state && $nomi_name && $nphone && $ndob && $nsex && $nrelation && $bankname && $accountnum && $f==0) {

if (preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {

	if(preg_match("/^[0-9]{10}$/", $phone)){
		if(preg_match("/^[0-9]{10}$/", $nphone)){
		if (strlen($password) > 5) {

			if ($password == $cpassword) {

				mysql_connect("localhost:3306","root", "mysql") or die("Problem with connection...");
				mysql_select_db("data") or die(mysql_error());

            $username = mysql_query("SELECT phone_number FROM customer WHERE phone_number=$phone");
            $count = mysql_num_rows($username);
            $remail = mysql_query("SELECT email_id FROM customer WHERE email_id='$email'");
            $checkemail = mysql_num_rows($remail);

            if ($checkemail != 0) {

                echo "This email is already registered! Please type another email...";
            } else {


                if ($count != 0) {

                    echo "This phone number is already registered! Please type another number";
                } else {
					
					
					if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")){
						
						
						$dir = "custprofiles/$name/images/";
						mkdir($dir, 0777, true);
						move_uploaded_file($temp, "custprofiles/$name/images/$mypic");
						echo "This will be you profile picture!<p><img border='1' width='50' height='50' src='custprofiles/$name/images/$mypic'><p>";
						$passwordmd5 = md5($password);
						mysql_query("INSERT INTO customer(first_name,last_name,house_number,street,phone_number,sex,email_id,dob,password) VALUES('$name','$last','$house','$street',$phone,'$sex','$email','$dob','$passwordmd5')");
						mysql_query("INSERT INTO pin_city(pincode,city) VALUES('$pincode','$city')");
						mysql_query("INSERT INTO pin_state(pincode,state) VALUES('$pincode','$state')");
						mysql_query("INSERT INTO customer_pin(pincode) VALUES('$pincode')");
						mysql_query("INSERT INTO nominee(name,phone_number,dob,sex,relation) VALUES('$nomi_name',$nphone,'$ndob','$nsex','$nrelation')");
						mysql_query("INSERT INTO bank_details(bank_name,account_number) VALUES('$bankname','$accountnum')");
						mysql_query("INSERT INTO customer_account(account_number) VALUES('$accountnum')");
						
						mysql_close();
						echo "You have succefully registered!<a href='cust_home.php'>Login now!</a>";
					
					} else {
					
						echo "Please load a valid jpeg, jpg or bmp! And size must be less than 10k!";
					
					}
                }
            }
        } else {
            echo "Your passwords don't match!";
        }
    } else {

        echo "Your password is too short! You need to type a password between 4 and 15 charachters!";
    }
	}else
	{
		echo "Please type a valid nominee phone number!";
	}
	}else
	{
		echo "Please type a valid phone number!";
	}	
	
	}else{
			echo "Please type a valid email!";
	}
	
} else {
    echo "you have to complete the form!";
}

include("cust_reg_link.php");

?>