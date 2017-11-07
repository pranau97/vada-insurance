<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Manager Login</title>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
  <style>
    *{
      font-family: 'Josefin Sans', sans-serif;
    }
    h1 {
      position: absolute;
      font-size: 3.5em;
      padding: 0.5em 2em;
      font-size: 45px;
      top: 50%;
      left: 50%;
      margin-top: -100px;
      margin-left: -250px;
      color: #000000;
    }

    .bg {
      background-image: url("health-insurance.jpg");
      opacity: 1.0;
      height: 100%;
      width: 100%;
      background-repeat: repeat;
      position: fixed;
      overflow-x: hidden;
      overflow-y: hidden;
      /* Center and scale the image nicely */
      background-position: center;
      background-size: cover;
    }
    body {
      background-color: #f3f3f3;
      font-weight: 400;
    }
	.content{
		padding-top: 50px;
	}



	.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
  </style>

</head>

<body>
<div class="bg">
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
  <div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
	  aria-controls="navbar">
	  <span class="sr-only">Toggle navigation</span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="main.php">Vada Insurance</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
	<ul class="nav navbar-nav navbar-right">
	  <li>
		<a href="cust_home.php">Customers</a>
	  </li>
	  <li>
		<a href="emp_home.php">Managers</a>
	  </li>
	  <li>
		<a href="emp_manage_home.php">Employees</a>
	  </li>
	  <li>
		<a href="branch_details.php">Branches</a>
	  </li>
	  <li>
		<a href="contact_us.php">Contact Us</a>
	  </li>
	</ul>
  </div>
</div>
</nav>
<div class="content">

<div class="container">

      <form class="form-signin" method="post" action="emp_login.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="eid" class="sr-only">Manager ID</label>
		<input type="text" id="eid" class="form-control" placeholder="ID" required autofocus name="eid">
		<br>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" required name="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="login" name="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

</table>
</form>
</div>

<!--<a href="cust_form.php">Register?</a>-->
<?php
	include("footer.php");
?>

</div>
</div>

</body>
</html>