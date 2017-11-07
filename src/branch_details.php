<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
		padding-top: 75px;
    color: black;
    font-size: 20px;
    padding-left: 50%;
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
<div class="content"
<h3><strong>Branch Details</strong></h3>

<div id="main">

<table>



<tr><td>Branch ID:</td><td>B01</td></tr>
<tr><td>Address:</td><td>X-51, Budh Vihar, Phase-I, New Delhi-86</td></tr>
<tr><td><b>Contact Details</b></td></tr>
<tr><td>Email:</td><td>delhioffice@vada.com</td></tr>
<tr><td>Phone no.:</td><td>011-234324</td></tr>


</table>
<br/>
<table>



<tr><td>Branch ID:</td><td>B02</td></tr>
<tr><td>Address:</td><td>B-317, Iris Port, Mahindra World City, New Chennai-02</td></tr>
<tr><td><b>Contact Details</b></td></tr>
<tr><td>Email:</td><td>chennaioffice@vada.com</td></tr>
<tr><td>Phone no.:</td><td>044-284509</td></tr>


</table>



</div>
</div>

<?php      include('footer.php');     ?>
</div>
</body>
</html>
