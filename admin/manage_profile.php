<?php
	session_start();
	if($_SESSION['userid']!="")
	{
		$un=$_SESSION['userid'];
		$con=@mysql_connect("localhost","root","");
		mysql_select_db("cms",$con);
		$res=mysql_query("select * from t_cms_staff where c_staff_id='$un';");
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

    <title>Welcome <?php echo $fname?></title>

	<link rel="stylesheet" href="css/style2.css" type="text/css" media="screen"/>
	<link rel="shortcut icon" href="img/logo.jpg" />
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="jquery-1.11.3.min.js"></script>
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/prof.css">
    <script src="../js/prof.js"></script>
	
	<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

	
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
        <li><a href="../logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
      </ul>
	  
	  
    </div>
  </div>
</nav>
<!-- -->

<!-- Side navigation bar -->
<nav class="col-sm-2">
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
        <li><a href="welcome_admin.php">Home</a></li>
		<li><a href="master_form.php">Master Form</a></li>
        <li><a href="upload.php">Upload</a></li>
        <li><a href="attend.php">Attendance</a></li>
		<li><a href="change_pwd.php">Change Password</a></li>
      </ul>
    </nav>
<!--  -->

<div class="container">
      <div class="row">
      <!--div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="edit.html" >Edit Profile</A>

        <A href="edit.html" >Logout</A>
       <br>
<p class=" text-info">May 05,2014,03:00 pm </p>
      </div-->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $fname." ".$mname." ".$lname;?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../../../../<?php echo $img;?>" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
				<form action="update.php" method="post">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Department:</td>
                        <td><?php echo $dept;?></td>
						<td><input type="text" /></td>
                      </tr>
                      <tr>
                        <td>Hire date:</td>
                        <td><?php echo $doj;?></td>
						<td><input type="text" /></td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php echo $dob;?></td>
						<td><input type="text" /></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php echo $gender;?></td>
						<td><input type="text" /></td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td><?php echo $add;?></td>
						<td><input type="text" /></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="<?php echo $email;?>"><?php echo $email;?></a></td>
						<td><input type="text" /></td>
                      </tr>
                        <td>Phone Number</td>
                        <td><?php echo $mob;?>
						<td><input type="text" /></td>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  <input type="submit" value="Update" style="width:150px;
    height: 40px;
    color: #ffffff;
    background: url(img/contact_but.png);
    background-repeat:no-repeat;
    background-position:left bottom;
    border: none;
    font-family: Vardna, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: bold;margin-left:160px;" />
                  </form>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.php" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>

<br>
<div class="footer"><center>&copy <?php echo date("Y");?></center></div>
</body>
</html>

<?php
	}	
	else
	{
		header("location:../login.php");
	}
?>