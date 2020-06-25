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

    <title>Upload Blacklist</title>

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
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
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

<!--  checkbox styling script -->

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
<div style="width:650px;
	margin: auto auto auto auto;
	margin-top:20px;
	background: #F5f5f5;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 55px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
<form enctype="multipart/form-data" action="" method="post">
<table style="margin-left: auto;margin-right: auto;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
<tr >
<td>
Course<br><br><br>
</td>
<td>
<select name="en" size="1" style="font-family: Verdana, Helvetica, sans-serif;font-size:17px;margin-left:-150px;">			
<?php
$con=@mysql_connect("localhost","root","");
mysql_select_db("cms",$con);
$res=mysql_query("select * from t_cms_attend where c_declared='Yes';");
$cnt=mysql_num_rows($res);
while($cnt>0)
{
	while($row=mysql_fetch_array($res))
	{
		$sdate=$row['d_start'];
		$edate=$row['d_end'];
		$sid=$row['n_sem_id'];
		$cid=$row['c_deg_id'];
		$id=$row['n_att_id'];	
		$syear  = substr($sdate,0,4);
		$smonth = substr($sdate,5,2);
		$sday  = substr($sdate,8,2);
		$eyear  = substr($edate,0,4);
		$emonth = substr($edate,5,2);
		$eday  = substr($edate,8,2);
		$qry1="SELECT c_deg_name FROM t_cms_degree where c_deg_id in(select c_deg_id from t_cms_attend where c_deg_id=$cid);";
		$res2=mysql_query($qry1);
		$row2=mysql_fetch_array($res2);
		$name=$row2['c_deg_name'];
		$qry1="SELECT n_sem_no,n_year FROM t_cms_sem where n_sem_id in(select n_sem_id from t_cms_attend where n_sem_id=$sid);";
		$res2=mysql_query($qry1);
		$row2=mysql_fetch_array($res2);
		$semno=$row2['n_sem_no'];
		if($semno==0)
		{
			$sem=$row2['n_year'];
		}
		else
		{
			$sem="Sem"."-".$semno;
		}
		if($smonth==1)
		{
			$asmonth='JAN';
		}
		if($smonth==2)
		{
			$smonth='FEB';
		}
		if($smonth==3)
		{
			$smonth='MAR';
		}
		if($smonth==4)
		{
			$smonth='APR';
		}
		if($smonth==5)
		{
			$smonth='MAY';
		}
		if($smonth==6)
		{
			$smonth='JUN';
		}
		if($smonth==7)
		{
			$smonth='JUL';
		}
		if($smonth==8)
		{
			$smonth='AUG';
		}
		if($smonth==9)
		{
			$smonth='SEP';
		}
		if($smonth==10)
		{
			$smonth='OCT';
		}
		if($smonth==11)
		{
			$smonth='NOV';
		}
		if($smonth==12)
		{
			$smonth='DEC';
		}
		if($emonth==1)
		{
			$emonth='JAN';
		}
		if($emonth==2)
		{
			$emonth='FEB';
		}
		if($emonth==3)
		{
			$emonth='MAR';
		}
		if($emonth==4)
		{
			$emonth='APR';
		}
		if($emonth==5)
		{
			$emonth='MAY';
		}
		if($emonth==6)
		{
			$emonth='JUN';
		}
		if($emonth==7)
		{
			$emonth='JUL';
		}
		if($emonth==8)
		{
			$emonth='AUG';
		}
		if($emonth==9)
		{
			$emonth='SEP';
		}
		if($emonth==10)
		{
			$emonth='OCT';
		}
		if($emonth==11)
		{
			$emonth='NOV';
		}
		if($emonth==12)
		{
			$emonth='DEC';
		}
		if($emonth==$smonth)
		{
			$s=$smonth."-".$syear;
			$e=$emonth." "."-"." ".$eyear;
			$exam=$name." ".$sem." "."(".$s.")";?>
			<option value="<?php echo $exam?>">
			<?php  echo $exam?>
			</option><?php
		}
		else
		{
			$s=$smonth."-".$syear;
			$e=$emonth."-".$eyear;
			$exam=$name." ".$sem." "."(".$s." "."TO"." ".$e.")";?>
			<option value="<?php echo $exam?>">
			<?php  echo $exam?>
			</option><?php
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
<img src="img/zip.png"  width="120" height="110"><br>
</td>
<td>
<div  style="margin-left:-150px;">
<input  type="file"  class="file_1" name="file" style="margin-left:150px;"/><br>
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
</form>
</div>
<?php
if(isset($_POST['l1']))
{
$newname=$_POST['en'];
if($_FILES['file']['type']=="application/octet-stream")
{
	
	
	$tmp=$_FILES['file']['tmp_name'];
	move_uploaded_file($tmp,"../../www/cms/upload/blacklist/".$newname);
	$mypath="www/cms/upload/blacklist/".$newname;
	$qry="insert into t_cms_download(c_deg_id,c_down_title,c_path,c_down_type) values('1','$exam','$mypath','blacklist');";
	mysql_query($qry);
	$qry="select n_down_id from t_cms_download ORDER by n_down_id desc;";
	$res1=mysql_query($qry);
	$row=mysql_fetch_array($res1);
	$downid=$row['n_down_id'];
	$newsname=$newname."Blacklist is declared.";
	$y=date('Y');
	$m=date('m');
	if($m==01)
	{
		$totdays=31;
	}
	else if($m==02)
	{
		$totdays=29;
	}
	else if($m==03)
	{
		$totdays=31;
	}
	else if($m==04)
	{
		$totdays=30;
	}
	else if($m==05)
	{
		$totdays=31;
	}
	else if($m==06)
	{
		$totdays=30;
	}
	else if($m==07)
	{
		$totdays=31;
	}
	else if($m==08)
	{
		$totdays=31;
	}
	else if($m==09)
	{
		$totdays=30;
	}
	else if($m==10)
	{
		$totdays=31;
	}
	else if($m==11)
	{
		$totdays=30;
	}
	else 
	{
		$totdays=31;
	}
	$d=date('d');
	$sdate=$y."-".$m."-".$d;
	if($d<=14)
	{
		$d+=15;
	}
	else
	{
		$tot=$totdays-$d;
		if($m<=11)
		{
			$m+=1;
			$d=15-$tot;
		}
		else
		{
			$m=1;
			if($tot==15)
			{
				$d=$totdays;
			}
			else
			{
				$d=15-$tot;
			}
		}
	}
	$edate=$y."-".$m."-".$d;
	$qry="insert into t_cms_news(c_news_name,d_start,d_end,c_desc,n_down_id) values('$newsname','$sdate','$edate','$newsname',$downid);";
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
	
		header("location:../login.php");
	
}
?>