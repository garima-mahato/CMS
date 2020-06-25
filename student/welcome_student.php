<?php

	session_start();
	if($_SESSION['userid']!="")
	{
	    $un=$_SESSION['userid'];
		$con=@mysql_connect("localhost","root","");
		mysql_select_db("cms",$con);
		$res=mysql_query("select * from t_cms_student where c_std_id='$un';");
		$row=mysql_fetch_array($res);
		$path=$row['c_path'];
		$fname=$row['c_f_name'];
		$mname=$row['c_mid_name'];
		$lname=$row['c_l_name'];
		$img=$row['c_path'];
		$fid=$row['c_staff_id'];
		$dob=$row['d_dob'];
		$gender=$row['n_gender'];
		$deptid=$row['c_dept_id'];
		$email=$row['c_email_id'];
		$quali=$row['c_qualif'];
		$desig=$row['c_design'];
		$mob=$row['n_mob_no'];
		$add=$row['c_add'];
		$doj=$row['d_doj'];
		$tit=$row['c_title'];
		$exp=$row['c_exp'];
		error_reporting(E_ALL & ~E_NOTICE);
		$conn = @mysql_connect("localhost", "root", "");
		mysql_select_db("cms");
		$res1=mysql_query("select c_dept_name from t_cms_dept where c_dept_id='$deptid';");
		$row1=mysql_fetch_array($res1);
		$dept=$row1['c_dept_name'];
		mysql_query("SET NAMES 'utf8'");
		include("../admin/inc/jqgrid_dist.php");
	?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome <? echo $userid; ?></title>

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
        <li><a href="../index.php">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</button></li>
      </ul>
  </div>
</nav>
<!-- -->

<!-- Side navigation bar -->
<nav class="col-sm-3">
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
        <li><a href="staff.php">Staff</a></li>
        <li><a href="#section2">Section 2</a></li>
        <li><a href="#section3">Section 3</a></li>
      </ul>
    </nav>
<!--  -->


<center>
  <div style="background-color:#FFFFFF;width:850px;font-family:copperplate gothic light">
     
  </div>
</center>

<center><footer>&copy <?php echo date("Y");?></footer></center>
</body>
</html>

<?php
	}	
	else
	{
		header("location:../login.php");
	}
?>