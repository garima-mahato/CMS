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

    <title>Upload Assignment</title>

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
        <li class="active"><a href="upload_assign.php">Upload Assignment</a></li>
		<li><a href="disp_result.php">Display Result</a></li>
		<li><a href="disp_attend.php">Display Attendance</a></li>
		<li><a href="upload_image.php">Upload Image</a></li>
        <li><a href="change_pwd.php">Change Password</a></li>
      </ul>
    </nav>
<!--  -->

<form method="POST" enctype="multipart/form-data">
<div style="width:650px;
	margin: auto auto auto auto;
	margin-top:20px;
	height:600px;
	background: #FFFACD;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 55px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
<table style="margin-left: auto;margin-right: auto;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
<tr >
<td>
Subject<br><br><br>
</td>
<td>
<select name="en" size="1" style="font-family: Verdana, Helvetica, sans-serif;font-size:17px;margin-left:-150px;">		
<?php
$con=@mysql_connect("localhost","root","");
mysql_select_db("cms",$con);
$res=mysql_query("select d_start,d_end,c_course_id,c_deg_id from t_cms_fac_sub where c_staff_id=$fid;");
$cnt=mysql_num_rows($res);
while($cnt>0)
{
	while($row=mysql_fetch_array($res))
	{
		$sdate=$row['d_start'];
		$edate=$row['d_end'];
		$subid=$row['c_course_id'];
		$syear  = substr($sdate,0,4);
		$smonth = substr($sdate,5,2);
		$sday  = substr($sdate,8,2);
		$eyear  = substr($edate,0,4);
		$emonth = substr($edate,5,2);
		$eday  = substr($edate,8,2);
		$tyear  = date('Y');
		$cid=$row['c_deg_id'];
		$tmonth = date('m');
		$tday  = date('d');
		if($syear==$eyear)
		{
				
				if($tyear==$syear)
				{
					if($smonth<=$tmonth && $emonth>=$tmonth)
					{
						if($eday>=$tday)
						{
						$qry1="SELECT c_course_name FROM t_cms_courses where c_course_id=$subid;";
						$res2=mysql_query($qry1);
						while($row2=mysql_fetch_array($res2))
						{
						$sub=$row2['c_course_name'];?>
						<option value="<?php echo $sub."=".$cid?>">
						<?php  echo $sub?>
						</option><?php
						}
						}
							
					}
					
						
					
			      }
				
		}
		else			
		{
				if($syear==$tyear)
				{
					if($smonth<=$tmonth)
					{
						if($eday>=$tday)
						{
						$qry1="SELECT c_course_name FROM t_cms_courses where c_course_id=$subid;";
						$res2=mysql_query($qry1);
						while($row2=mysql_fetch_array($res2))
						{
						$sub=$row2['c_course_name'];?>
						<option value="<?php echo $sub."=".$cid?>">
						<?php  echo $sub?>
						</option><?php
						}
						}
					}
				}
				else
				{
					if($smonth>=$tmonth)
					{
						if($eday>=$tday)
						{
						$qry1="SELECT c_course_name FROM t_cms_courses where c_course_id=$subid;";
						$res2=mysql_query($qry1);
						while($row2=mysql_fetch_array($res2))
						{
						$sub=$row2['c_course_name'];?>
						<option value="<?php echo $sub."=".$cid?>">
						<?php  echo $sub?>
						</option><?php
						}
						}
					}
				}	
				
		}
			
				
					
	}
$cnt--;
}

?>
</select><br><br><br>
</td>
</tr>
<tr>
<td>
<div  style="margin-left:-15px;">
<img src="../admin/img/zip.png"  width="120" height="110"><br>
</div>
</td>
<td>
<div  style="margin-left:-150px;">
<input  type="file" class="file_1" name="file" style="margin-left:150px;"/><br>
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
$pa="";
$newname=$_POST['en'];
if($_FILES['file']['type']=="application/octet-stream")
{
	$str1=$newname;
	$len=strlen($str1);
	for($i=0;$i<=$len;$i++)
	{
		$temp=substr("$str1",$i,1);
		if($temp=="=")
		{
			$po=strpos("$str1","$temp");
			$d=$temp;
		}
		else
		{
			
		}
	}
	$exam=substr("$str1",0,$po);
	$couid=substr("$str1",$po+1);
	$tmp=$_FILES['file']['tmp_name'];
	move_uploaded_file($tmp,"../../www/cms/upload/assignment/".$exam);
	$mypath="www/cms/upload/assignment/".$exam;
	$qry="insert into t_cms_download(c_course_id,c_down_title,c_path,c_down_type) values($couid,'$exam','$mypath','assignment');";
	mysql_query($qry);
	$qry="select n_down_id from t_cms_download ORDER by n_down_id desc;";
	$res1=mysql_query($qry);
	$row=mysql_fetch_array($res1);
	$downid=$row['n_down_id'];
	$newsname=$exam." Assignment is declared";
	$y=date('Y');
	$m=date('m');
	$d=date('d');
	$sdate=$y."-".$m."-".$d;
	if($d<14)
	{
		$d+=15;
	}
	$edate=$y."-".$m."-".$d;
	$qry="insert into t_cms_news(c_news_name,d_start,d_end,c_desc,n_down_id) values('$newsname','$sdate','$edate','$newsname',$downid);";
	mysql_query($qry);
	?>
	<script language="javascript">
	alert(" File successfully upload to Server ");
	</script>
	<?php
}
else
{
?>
	<script language="javascript">
	alert("You can upload only WinRAR File or ZIP file");
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