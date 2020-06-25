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

    <title>View Result</title>

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
		<li class="active"><a href="disp_result.php">Display Result</a></li>
		<li><a href="disp_attend.php">Display Attendance</a></li>
		<li><a href="upload_image.php">Upload Image</a></li>
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
			
				
				
		
		 
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				
				
				
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

<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<form  method="post">
  <div style="width:550px;
	margin: auto auto auto auto;
	margin-top:-375px;
	background: #F5F5F5;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding:20px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
<table style="margin-left: auto;margin-right: auto;font-family: Verdana, Helvetica, sans-serif;font-size:19px;color:">
<tr >
<td>
<br>Select Exam<br><br><br>
</td>
<td>
<br><select name="en" size="1" style="font-family: Verdana, Helvetica, sans-serif;font-size:17px;margin-left:-150px;width:auto;">
<?php
$res=mysql_query("select * from t_cms_fac_sub where c_staff_id=$fid and c_declared='Yes';");
$cnt=mysql_num_rows($res);
	while($cnt>0)
	{
		while($row=mysql_fetch_array($res))
		{
			$examid=$row['n_exam_id'];
			//$div=$row['division'];
			$res1=mysql_query("SELECT * from t_cms_exam where n_exam_id=$examid;");
			while($row=mysql_fetch_array($res1))
			{
   				$type=$row['c_examtype'];
				$du=$row['d_date'];
				$asyear  = substr($du,0,4);
				$asmonth = substr($du,5,2);
				$asday  = substr($du,8,2);
				$eid=$row['n_exam_id'];
				$qry="SELECT c_deg_name FROM t_cms_degree where co_deg_id in(select c_deg_id from t_cms_exam where n_exam_id=$eid);";
				$res2=mysql_query($qry);
				while($row=mysql_fetch_array($res2))
				{
					$name=$row['c_deg_name'];
					$qry="SELECT n_sem_no,n_year FROM t_cms_sem where n_sem_id in(select n_sem_id from t_cms_exam where n_exam_id=$eid);";
					$res3=mysql_query($qry);
					while($row=mysql_fetch_array($res3))
					{
						

						if($asmonth==1)
						{
						$asmonth='JAN';
						}
						if($asmonth==2)
						{
						$asmonth='FEB';
						}
						if($asmonth==3)
						{
						$asmonth='MAR';
						}
						if($asmonth==4)
						{
						$asmonth='APR';
						}
						if($asmonth==5)
						{
						$asmonth='MAY';
						}
						if($asmonth==6)
						{
						$asmonth='JUN';
						}
						if($asmonth==7)
						{
						$asmonth='JUL';
						}
						if($asmonth==8)
						{
						$asmonth='AUG';
						}
						if($asmonth==9)
						{
						$asmonth='SEP';
						}
						if($asmonth==10)
						{
						$asmonth='OCT';
						}
						if($asmonth==11)
						{
						$asmonth='NOV';
						}
						if($asmonth==12)
						{
						$asmonth='DEC';
						}
						$semno=$row['n_sem_no'];
						if($semno==0)
						{
						$sem=$row['n_year'];
						}
						else
						{
						$sem="Sem"."-".$semno;
						}
						$s=$asmonth."-".$asyear;
						$exam=$name." ".$sem." ".$type."(".$s.")"."-".$div;
						?>
						<option value="<?php echo $eid.$div?>">
						<?php
						echo $exam;
						?>
						</option>
						<?php
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
<input type="submit"  value="Search" name="l1"   style="width:150px;
    height: 40px;
    color: #ffffff;
    background: url(images/contact_but.png);
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
<?php
if(isset($_POST['l1']))
{
	$str=$_POST['en'];
	$len=strlen($str);
	static $id;
	for($i=0;$i<=$len;$i++)
	{
		$temp=substr("$str",$i,1);
		if($temp=="A" || $temp=="B" || $temp=="C" || $temp=="D")
		{
			$d=$temp;
		}
		else
		{
			$id.=$temp;
		}
		
	}
	$qry="SELECT c_course_name,c_course_id,n_tot_marks FROM t_cms_courses,t_cms_exam where c_course_id in(SELECT c_course_id FROM t_cms_fac_sub where n_exam_id=$id and c_staff_id=$fid) and t_cms_courses.c_course_id=t_cms_exam.c_course_id;";// and division='$d');";
	$res=mysql_query("$qry");
	while($row=mysql_fetch_array($res))
	{
		
		
		?>
		<br><br>
 <style type="text/css">    
#ma
{
	width: 1000px;
	margin-left:auto;
	margin-right:auto;
	//margin: 160px auto 0 auto;
	background: white;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 30px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;
}

/*Features table------------------------------------------------------------*/
.features-table
{
  width: 60%;
  //margin-left:-13px;
margin-left:auto;
	margin-right:auto;
  margin:auto auto auto auto ;
  border-collapse: separate;
  border-spacing: 0;
  text-shadow: 0 1px 0 #fff;
  color: #2a2a2a;
  background: #fafafa;  
  background-image: -moz-linear-gradient(top, #fff, #eaeaea, #fff); /* Firefox 3.6 */
  background-image: -webkit-gradient(linear,center bottom,center top,from(#fff),color-stop(0.5, #eaeaea),to(#fff)); 
}
.features-table td
{
  height: 37px;
  line-height: 50px;
  padding: 0 20px;
  border-bottom: 1px solid #cdcdcd;
  box-shadow: 0 1px 0 white;
  -moz-box-shadow: 0 1px 0 white;
  -webkit-box-shadow: 0 1px 0 white;
  white-space: nowrap;
  text-align: center;
}

/*Body*/
.features-table tbody td 
{
  text-align: center;
  font: normal 12px Verdana, Arial, Helvetica;
  width: 150px;
}






.features-table td:nth-child(1),.features-table td:nth-child(6),.features-table td:nth-child(2),.features-table td:nth-child(3),.features-table td:nth-child(4),.features-table td:nth-child(5)
{
  background: #e7f3d4;  
  background: rgba(184,243,85,0.3);
}

/*Header*/
.features-table thead td
{
  font: bold 1.1em 'trebuchet MS', 'Lucida Sans', Arial;  
  -moz-border-radius-topright: 10px;
  -moz-border-radius-topleft: 10px; 
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  border-top: 1px solid #eaeaea; 
}
.features-table thead th
{
  font: bold 0.5em 'trebuchet MS', 'Lucida Sans', Arial;  
  -moz-border-radius-topright: 10px;
  -moz-border-radius-topleft: 10px; 
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  border-top: 1px solid #eaeaea; 
}

.features-table thead td:first-child
{
  border-top: none;
}
</style> 
 <div id="ma">

<table class="features-table" style="margin-left:px;">
				<thead>
					<tr>
						<td>Stud Id</td>
						<td>Name</td>
						<td>Total Marks</td>
						<td><?php echo $row['c_course_name']?></td>
						<!--td>Division</td-->
					</tr>
				</thead>






		
<?php
		
		$subid=$row['c_course_id'];
		$m=$row['c_tot_marks'];
		$qry="SELECT * FROM t_cms_result where n_exam_id=$id  and c_course_id=$subid;";// and division='$d';";
		$res1=mysql_query("$qry");
		echo "<tbody>";
		static $a,$p,$f;
		while($row=mysql_fetch_array($res1))
		{
			
   	            	echo "<tr>";
			$id=$row['c_std_id'];
			echo "<td>".$id."</td>";
			$a+=1;
			$qry1="select c_f_name,c_mid_name,c_l_name from t_cms_student where c_std_id=$id;";
			$res=mysql_query($qry1) or die();
			while($row2=mysql_fetch_array($res))
			{
				$fn=$row2['c_f_name'];
				$mn=$row2['c_mid_name'];
				$ln=$row2['c_l_name'];
				$fullname=$fn." ".$mn." ".$ln;
			}
			echo "<td>".$fullname."</td>";
			echo "<td>".$m."</td>";
			if($row['n_marks']>=18)
			{
				$p+=1;
			}
			else
			{
				$f+=1;
			}
			echo "<td>".$row['n_marks']."</td>";
			//echo "<td>".$d."</td>";
			echo "</tr>";
			
		}
		echo "</tbody>";
		echo "</table>";
			?>
		<br><br>
		<table class="features-table" style="margin-left:px;">
				<thead>
					<tr>
						<!--td>Division</td-->
						<td>Appeared</td>
						<td>Passed</td>
						<td>Failed</td>
						<td>Success Rate(%)</td>
					</tr>
				</thead>
			
		<?php
		echo "<tbody>";
		echo "<tr>";
		//echo "<td>".$d."</td>";
		echo "<td>".$a."</td>";
		echo "<td>".$p."</td>";
		if($f==0 && $a!=0)
		{
		echo "<td>0</td>";
		}
		else
		{
			echo "<td>".$f."</td>";
		}
		if($a!=0)
		{
		$rate=$p/$a*100;
		echo "<td>".$rate."%"."</td>";
		}
		else
		{
			echo "<td>"."-"."</td>";
		}
	}
	
}
}
else
{
		header("location:../login.php");
}
?>
</div>
  </form>

<br>
<div class="footer"><center>&copy <?php echo date("Y");?></center></div>
</body>
</html>