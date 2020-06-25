<?php
	session_start();
	if($_SESSION['userid']!="")
	{?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload Student Information</title>

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
	image: "img/upload_file.gif",
	imageheight : 29,
	imagewidth : 78,
	width : 300
	});
});
</script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->


<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
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
<nav class="col-sm-2">
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
        <li><a href="welcome_admin.php">Home</a></li>
		<li><a href="master_form.php">Master Form</a></li>
        <li class="active"><a href="upload.php">Upload</a></li>
        <li><a href="attend.php">Attendance</a></li>
		<li><a href="change_pwd.php">Change Password</a></li>
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

	<table border="0" width="80%" cellpadding="0" cellspacing="0" id="content-table">
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
			
				<form enctype="multipart/form-data" action="" method="post">
<div style="width:650px;
	margin: auto auto auto auto;
	margin-top:px;
	background: #F5F5F5;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 55px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
<table style="margin-left: auto;margin-right: auto;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
<tr>
<td>
<div  style="margin-left:-15px;">
<img src="img/xml.png"  width="120" height="110"><br>
</td>
<td>
<div  style="margin-left:-150px;">
<input  type="file" class="file_1" name="file" style="margin-left:150px;"/><br>
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

</div></div>

  </form>

				
		
		 
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				
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


  </body>
  </html>
<?php
if(isset($_POST['l1']))
{
if($_FILES['file']['type']=="text/xml")
{
 static $st=0;
 $con=@mysql_connect("localhost","root","");
	if($con)
	{
		mysql_select_db("cms",$con);
	}
	else
	{
		echo "Connection is not Est"."<br>";
	}
function add_stud($course_id,$fname,$mname,$lname,$mobile_no,$parent_mobile_no,$gender,$status,$add1,$add2,$email_id,$DOB)
{
  $qry="insert into t_cms_student(c_deg_id,c_f_name,c_mid_name,c_l_name,n_mob_no,n_parent_mob,n_gender,c_status,c_perm_add,c_pres_add,c_email_id,d_dob) values($course_id,'$fname','$mname','$lname','$mobile_no','$parent_mobile_no',$gender,'$status','$add1','$add2','$email_id','$DOB');";
  mysql_query("$qry");

  
}
$data = array();

if ( $_FILES['file']['tmp_name'] )
{
 $dom = DOMDocument::load( $_FILES['file']['tmp_name'] );
 $rows = $dom->getElementsByTagName( 'Row' );
 $first_row = true;
 foreach ($rows as $row)
 {
   if (!$first_row)
   {
     $course_id = "";
     $fname = "";
     $lname= "";
     $mname = "";
     $mobile_no = "";
     $parent_mobile_no = "";
     $gender = "";
     $status = "";
     $add1 = "";
     $add2= "";
     $email_id= "";
     $DOB= "";
     $index = 1;
     $cells = $row->getElementsByTagName( 'Cell' );
     foreach( $cells as $cell )
     {
      	$ind = $cell->getAttribute( 'Index' );
       	if ( $ind != null ) $index = $ind;

    	if ( $index == 1 ) $course_id = $cell->nodeValue;
       	if ( $index == 2 ) $fname = $cell->nodeValue;
       	if ( $index == 3 ) $mname = $cell->nodeValue;
       	if ( $index == 4 ) $lname = $cell->nodeValue;
        if ( $index == 5 ) $mobile_no = $cell->nodeValue;
	if ( $index == 6 ) $parent_mobile_no = $cell->nodeValue;
	if ( $index == 7 ) $gender = $cell->nodeValue;
	if ( $index == 8 ) $status = $cell->nodeValue;
	if ( $index == 9 ) $add1 = $cell->nodeValue;
	if ( $index == 10 ) $add2 = $cell->nodeValue;
	if ( $index == 11 ) $email_id = $cell->nodeValue;
	if ( $index == 12 ) $DOB = $cell->nodeValue;
       $index += 1;
     }
    
     add_stud($course_id,$fname,$mname,$lname,$mobile_no,$parent_mobile_no,$gender,$status,$add1,$add2,$email_id,$DOB);
    
    }
   $first_row = false;
 }
}
if($st>=0)
{?>
<script language="javascript">
confirm("Your Excel File Successfully Insert into table");
</script>
<?php
}
if($st==0)
{?>
<script language="javascript">
	var name="Some Error to Insert Excel File into table";
	alert(name);
	</script>
	<?php
}
}
else
{
?>
	<script language="javascript">
	alert("You can upload only XML file");
	</script>
	<?php
}
}
}
else
{
	
		header("location:../login.php");
	
}
?>