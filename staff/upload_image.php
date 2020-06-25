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
		$fid=$row['c_staff_id'];
		
		
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload Image</title>

	<link rel="stylesheet" href="css/style2.css" type="text/css" media="screen"/>
	<link rel="shortcut icon" href="img/logo.jpg" />
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="jquery-1.11.3.min.js"></script>
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	
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

  <script type="text/javascript" charset="utf-8">
$(function() {
	$("input.file_1").filestyle({ 
	image: "../admin/img/upload_file.gif",
	imageheight : 29,
	imagewidth : 78,
	width : 300
	});
});
</script>
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
		<li class="active"><a href="upload_image.php">Upload Image</a></li>
        <li><a href="change_pwd.php">Change Password</a></li>
      </ul>
    </nav>
<!--  -->

<form method="POST" enctype="multipart/form-data">
<div class="clear"></div>
<div style="width:650px;
	margin: auto auto auto auto;
	margin-top:20px;
	background: #F5F5F5;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 55px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
<table style="margin-left: auto;margin-right: auto;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
<tr>
<td>
<div  style="margin-left:-15px;">
<img src="../admin/img/zip.png"  width="120" height="110"><br>
</div>
</td>
<td>
<div  style="margin-left:-150px;">
<input  type="file" class="file_1" name="file" style="margin-left:150px;"/><br
</div>
</td>
</tr>
<tr>
<td>
<input type="submit"  value="Upload" name="l1"   style="width:150px;
    height: 40px;
    color: #ffffff;
    background: url(img/contact_but.png);
    background-repeat:no-repeat;
    background-position:left bottom;
    border: none;
    font-family: Vardna, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: bold;margin-left:160px;"/>
</td>
</tr>
</table>
</div>
</form>
<br>
<div class="footer"><center>&copy <?php echo date("Y");?></center></div>
</body>
</html>
<?php
if(isset($_POST['l1']))
{
if($_FILES['file']['type']=="image/jpeg" || $_FILES['file']['type']=="image/gif")
{
	
	$tmp=$_FILES['file']['tmp_name'];
	$name=$_FILES['file']['name'];
	move_uploaded_file($tmp,"../../www.vivekanandcollege.ac.in/admin/image/".$name);
	$mypath="../admin/image/".$name;
	$qry="update faculty_master set path='$mypath' where fac_id=$fid;";
	mysql_query($qry);
	?>
	<script language="javascript">
	alert(" File  is successfullay upload to Server ");
	</script>
	<?php
}
else
{
?>
	<script language="javascript">
	alert("You can upload only WinRAR File or ZIP file file");
	</script>
	<?php
}
}
}
else
{
	
		header("location:../admin/login.php");
	
}
?>