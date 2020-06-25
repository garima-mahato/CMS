<?php
	session_start();
	if($_SESSION['userid']!="")
	{
		$username1=$_SESSION['userid'];
		include("inc/jqgrid_dist.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Change Password</title>

	<link rel="shortcut icon" href="img/logo.jpg" />
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="jquery-1.11.3.min.js"></script>
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	
	<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!--  checkbox styling script -->
<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="js/themes/<?php echo $themes[$i]?>/jquery-ui.custom.css"></link>
	<link rel="stylesheet" type="text/css" media="screen" href="js/jqgrid/css/ui.jqgrid.css"></link>	
	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
	
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
<nav class="col-sm-3">
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
        <li><a href="welcome_staff.php">Home</a></li>
		<li><a href="manage_profile.php">Manage Profile</a></li>
        <li><a href="upload_assign.php">Upload Assignment</a></li>
		<li><a href="disp_result.php">Display Result</a></li>
		<li><a href="disp_attend.php">Display Attendance</a></li>
		<li><a href="upload_image.php">Upload Image</a></li>
        <li class="active"><a href="change_pwd.php">Change Password</a></li>
      </ul>
    </nav>
<!--  -->

<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"></th>
		<th class="toplef"></th>
		<td id="tbl-border-t">&nbsp;</td>
		<th class="toprigh"></th>
		<th rowspan="3" class="sized"></th>
	</tr>
	<tr>
		<td id="tbl-border-le"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
				
		
		 
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="" method="post" onsubmit="return validate(this);">
				<div style="width:750px;
	
	margin: auto auto auto auto;
	margin-left: 100px;
	margin-top:-20px;
	background: #F5F5F5;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 55px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
				<table style="margin-left: auto;margin-right: auto;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
				<tr style="margin-bottom:15px;">
				<td>
				New Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br><br>
				</td>
				<td>
				<input type="password" name="t1"   maxlength="15" style="font-family: Verdana, Helvetica, sans-serif;font-size:19px;"><br><br><br><br>
				</td>
				</tr>
				<tr>
				<td>
				Confirm Password<br><br><br><br>
				</td><td>
				<input type="password" name="t2" maxlength="15" style="font-family: Verdana, Helvetica, sans-serif;font-size:19px;"><br><br><br><br>
				</td>
				</tr>
				<tr>
				<td>
				<input type="submit"  value="Change" name="l1"   style="width: 150px;
    height: 40px;
    color: #ffffff;
    background: url(img/contact_but.png);
    background-repeat:no-repeat;
    background-position:left bottom;
    border: none;
    font-family: Vardna, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: bold;margin-left:150px;" onclick="chn();"/>
					
				</td>
				</tr>
				</table>
				</table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
			
			<div class="clear"></div>
		 
		</div>
			<div class="clear">&nbsp;</div>

</div>
</div>
<script language="javascript">
function validate(form) {
var e = form.elements;

/* Your validation code. */
if(e['t1'].value != e['t2'].value) {
alert('Passwords do not match. Please type more carefully.');
return false;
}
return true;
}


</script>
</body>
</html>
<?php
if(isset($_POST['l1']))
{

	$new=$_POST['t1'];
	$conf=$_POST['t2'];
	
	$len=strlen($new);
	if($len<4 && $len<18)
	{
	?>
	<script language="javascript">
	alert('Password must be between 4 To 18');
	</script><?php
	}
	else
	{
	$con=@mysql_connect("localhost","root","");
	mysql_select_db("cms",$con);
	mysql_query("update t_cms_user set c_user_pwd='$new' where c_user_id='$username1';");
	?>
	<script language="javascript">
	alert('Your password has been successfully changed');
	</script><?php
	}
}	}
	else
	{
		header("location:../login.php");
	}

?>