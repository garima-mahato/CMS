<?php
if(isset($_SESSION['email']))
  header('location:index.html');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>College Management System</title>

	<link rel="shortcut icon" href="img/logo.jpg" />
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="jquery-1.11.3.min.js"></script>
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	
	<style>
  .affix {
      top: 0;
      width: 100%;
  }

  .affix + .container-fluid {
      padding-top: 170px;
  }
  
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
	  }
	  
	#header-panel {
	  background: url('img/header-panel.jpg') repeat-x;
	}
	
	.footer {
    position: fixed;
    height: 30px;
    bottom: 0;
    width: 100%;
    color: #ffffff;
    background-color: #0000a0;
}
  </style>

</head>

<body style="background-color:#b7ceec;">

<div class="container-fluid" id="header-panel">
  <div style="float:left;">
   <img src="img/logo.jpg" class="img-responsive; img-circle" alt="BIT Sindri logo">
  </div>
  <div style="float:right;">
     <a href="#" style="color:#b7ceec; text-decoration:none;"><h2 class="page-header">COLLEGE MANAGEMENT SYSTEM (CMS)</h2></a>
   </div>
</div>
<!-- Collapsible navigation bar -->
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">College Management System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Log In</a></li>
      </ul>
    </div>
  </div>
</nav>

<center>
  <div style="background-color:#FFFFFF;width:850px;font-family:copperplate gothic light">
     <form action="login-script.php" method="post">
				      <input type="hidden" name="item" value=""/>
		                 <h2 style="color:#cd15a6; text-align:center;">LOGIN</h2>
		                   <table border="0" align="center" width="200px" style="font-family:Arial; font-size:15px;">
						     <tr>
							     <td align="right" width="120" style="padding-right:5px;">User Type:</td>
							     <td>
								     <!--<select>
									     <option name="usertype" value="1">Administrator</option>
										 <option name="usertype" value="2">Staff</option>
										 <option name="usertype" value="3">Student</option>
									 </select>-->
									 <input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="text" name="usertype" placeholder="User Type" required="true"/>
								 </td>
							 </tr>
							 <tr>
							     <td align="right" width="120" style="padding-right:5px;">User ID:</td>
							     <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="text" name="userid" placeholder="User ID" required="true"/></td>
							 </tr>
		                     <tr>
							     <td align="right" width="120" style="padding-right:5px;">Password:</td>
								 <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="password" name="pwd" placeholder="Password" required="true"/></td>
						     </tr>
							 <tr><td></td>
							  <td>
                               <input type="submit" style="float:right; width:90px; height:30px; margin:10px; text-align:center; background-color:#cd15a6; border-radius:5px; color:#ffffff; font-size:0.8em; text-decoration:none;" value="Login!"/>
							  </td>
							 </tr>
						   </table>
						   <a href="" style="text-align:left; font-size:0.8em; float:left;">Forgot Password</a>
	 </form>
  </div>
</center>
<br>
<div class="footer"><center>&copy <?php echo date("Y");?></center></div>
</body>
</html>