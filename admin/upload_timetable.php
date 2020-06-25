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

    <title>Upload Exam Time Table</title>

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


<form  action="" method="POST" enctype="multipart/form-data">
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
	
<table style="margin-left: auto;margin-right: auto;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
<tr >
<td>
Exam<br><br><br>
</td>
<td>
<select name="en" size="1" style="font-family: Verdana, Helvetica, sans-serif;font-size:17px;margin-left:-150px;">		
<?php
$con=@mysql_connect("localhost","root","");
mysql_select_db("cms",$con);
$res=mysql_query("SELECT c_res_declared,c_examtype,d_date,n_exam_id from t_cms_exam where c_status='No';");
$cnt=mysql_num_rows($res);
while($cnt>0)
{
	while($row=mysql_fetch_array($res))
	{
   		$type=$row['c_examtype'];
		$du=$row['d_date'];
		$syear  = substr($du,0,4);
		$smonth = substr($du,5,2);
		$sday  = substr($du,8,2);
		$eid=$row['n_exam_id'];
		$qry="SELECT c_deg_name FROM t_cms_degree where c_deg_id in(select c_deg_id from t_cms_exam where exam_id=$eid);";
		$res1=mysql_query($qry);
		while($row=mysql_fetch_array($res1))
		{
			$name=$row['course_name'];
			$qry="SELECT n_sem_no,n_year FROM t_cms_sem where n_sem_id in(select n_sem_id from t_cms_exam where n_exam_id=$eid);";
			$res2=mysql_query($qry);
			while($row=mysql_fetch_array($res2))
			{
				$semno=$row['n_sem_no'];
				if($semno==0)
				{
					$sem=$row['n_year'];
				}
				else
				{
				$sem="Sem"."-".$semno;
				}
				if($smonth==1)
						{
						$smonth='JAN';
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
				$s=$smonth."-".$syear;
				$exam=$name." ".$sem." ".$type." "."(".$s.")";?>
				<option value="<?php echo $exam."=".$eid?>">
				<?php  echo $exam?>
				</option><?php
	
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
<div  style="margin-left:-35px;">
<img src="img/zip.png"  width="120" height="110"><br>
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
</div>
</form>
<?php
if(isset($_POST['l1']))
{
$pa="";
$newname=$_POST['en'];
$nn=$newname;
if($_FILES['file']['type']=="application/octet-stream")
{
	$str=$_POST['en'];
	$len=strlen($str);
	static $id;
	for($i=0;$i<=$len;$i++)
	{
		$temp=substr("$str",$i,1);
		if($temp=="=")
		{
			$eid=substr("$str",$i+1);
			$po1=strpos("$str","$temp");
		}
		else
		{
			$newname=$temp;
		}
		
	}
	$exam1=substr("$str",0,$po1);
	$tmp=$_FILES['file']['tmp_name'];
	move_uploaded_file($tmp,"../../www/cms/upload/examtimetable/".$exam1);
	$qry="update t_cms_exam set c_status='Yes' where n_exam_id=$eid;";
	mysql_query($qry);
	$qry="select c_deg_id from t_cms_exam where n_exam_id=$eid;";
	$res1=mysql_query($qry);
	$row=mysql_fetch_array($res1);
	$couid=$row['c_deg_id'];
	$mypath="www/cms/upload/examtimetable/".$exam1;
	$qry="insert into t_cms_download(c_deg_id,c_down_title,c_path,c_down_type) values($couid,'$exam1','$mypath','timetable');";
	mysql_query($qry);
	$qry="select n_down_id from t_cms_download ORDER by n_down_id desc;";
	$res1=mysql_query($qry);
	$row=mysql_fetch_array($res1);
	$downid=$row['n_down_id'];
	$str1=$nn;
	$len=strlen($str1);
	for($i=0;$i<=$len;$i++)
	{
		$temp=substr("$str1",$i,1);
		if($temp=="(")
		{
			$po=strpos("$str1","$temp");
			$d=$temp;
		}
		else
		{
			
		}
	}
	$exam=substr("$str1",0,$po);
	$newsname=$exam."Exam Time Table is declared";
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
	alert(" File is successfully uploaded to Server. ");
	</script>
	<?php
}
else
{
?>
	<script language="javascript">
	alert("You can upload only RAR or ZIP file.");
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