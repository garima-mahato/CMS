<?php
	session_start();
	if($_SESSION['userid']!="")
	{
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

    <title>Blacklist</title>

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
<nav class="col-sm-2">
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
        <li><a href="welcome_admin.php">Home</a></li>
		<li><a href="master_form.php">Master Form</a></li>
        <li><a href="upload.php">Upload</a></li>
        <li class="active"><a href="attend.php">Attendance</a></li>
		<li><a href="change_pwd.php">Change Password</a></li>
      </ul>
    </nav>
<!--  -->
<div style="clear:both;"></div>
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		
	</div>
	<!-- end page-heading -->
    <br>
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
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<form  method="post">
  <div style="margin-top:-360px;margin-left:200px;">
   <center>
<div style="width: 850px;
	margin-left:-178px;
	//margin: 160px auto 0 auto;
	background: #F5F5F5;;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 80px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
<table width="80%">
  <tr>
<td style="font-family: Verdana, Helvetica, sans-serif, Helvetica, sans-serif;font-size:18px;">
<div style="margin-top:30px;">Attendance</td></div>
<td>
<div style="">
<select name="att" size="1" style="width:200px;margin-right:200px;width:265px;margin-top:30px;font-family: Verdana, Helvetica, sans-serif, Helvetica, sans-serif;font-size:18px;"">
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
			<option value="<?php echo $id?>">
			<?php  echo $exam?>
			</option><?php
		}
		else
		{
			$s=$smonth."-".$syear;
			$e=$emonth."-".$eyear;
			$exam=$name." ".$sem." "."(".$s." "."TO"." ".$e.")";?>
			<option value="<?php echo $id?>">
			<?php  echo $exam?>
			</option><?php
		}
	}
$cnt--;	
}
?>
</select>
</div>
</td>
</tr>
<tr>
<td>
<div style="margin-top:30px;font-family: Verdana, Helvetica, sans-serif, Helvetica, sans-serif;font-size:18px;">
Maximum Present Rate
</div>
</td>
<td>
<div style="margin-top:30px;margin-left:px;">
<input type="text" name="per" style="font-family: Verdana, Helvetica, sans-serif, Helvetica, sans-serif;font-size:18px;">
</div>
</td>
</tr>
<tr>
<td><div style="margin-top:30px;margin-left:200px;">
<input type="submit"  value="Submit" name="l1"   style="width: 150px;
    height: 40px;
    color: #ffffff;
    background: url(img/contact_but.png);
    background-repeat:no-repeat;
    background-position:left bottom;
    border: none;
    font-family: Verdana, Helvetica, sans-serif, Helvetica, sans-serif;
font-size:18px;
    font-weight: bold;" />
</td>
<td>
<div style="margin-top:30px;margin-left:30px;">
	<div class="bubble-left"></div>
	<div class="bubble-inner">Select Attendance and Click Submit button</div>
	<div class="bubble-right"></div>
</div>
</div>
</td>
</tr>
</table>
</form>
<form action="save_excel.php" method="post" 
onsubmit='$("#datatodisplay").val( $("<div>").append( $("#ReportTable").eq(0).clone() ).html() )'>
</div>
</div>
<?php
if(isset($_POST['l1']))
{
	$str=$_POST['att'];
	if(isset($_POST['per']))
	{
		$pe=$_POST['per'];
		
	}
	if($pe==0)
	{
		?>
		<script language="javascript">
		alert("Zero is not valid");
		</script>
		<?php
	}
	$qry="SELECT c_course_name FROM t_cms_course where c_course_id in(select c_course_id from t_cms_stud_attend where n_att_id=$str);";
	$res=mysql_query("$qry");?>
	<br><br>

<table class="table1" style="margin-left:px;" id="ReportTable">
                <thead>
                    <tr>
                       <th>Stud Id</td>
                <th>Name</td>
                 <th>Working Days</td> 

                   
               <?php
	while($row=mysql_fetch_array($res))
	{
		?>
		<th><?php echo $row['c_course_name']?></td>
		<?php
	}
	echo "<th>Division</td>";
	echo "<th>Avg Present Rate(%)</td>";
	echo "</tr>";
	echo "</thead>";
	$qry="SELECT * FROM t_cms_attend where n_att_id=$id;";
		$res=mysql_query("$qry");
		$row=mysql_fetch_array($res);
		$m=$row['working_days'];
		$qry="SELECT * FROM t_cms_stud_attend where n_att_id=$id;";
		$res1=mysql_query("$qry");
		echo "<tbody>";
		static $lstudid,$tot;
		while($row=mysql_fetch_array($res1))
		{
			
   	            	echo "<tr>";
			$tot=0;
			$studid=$row['c_std_id'];
			if($studid!=$lstudid)
			{
			//echo "<td>".$studid."</td>";
			$qry1="select c_f_name,c_mid_name,c_l_name from t_cms_student where c_std_id=$studid;";
			$res=mysql_query($qry1) or die();
			while($row2=mysql_fetch_array($res))
			{
				$fn=$row2['c_f_name'];
				$mn=$row2['c_mid_name'];
				$ln=$row2['c_l_name'];
				$fullname=$fn." ".$mn." ".$ln;
			}
			$qry4="select * from t_cms_stud_attend where c_std_id=$studid;";
			$res4=mysql_query($qry4) or die();
			$cnt1=mysql_num_rows($res4);
			while($row4=mysql_fetch_array($res4))
			{
				$lstudid=$row['c_std_id'];
				$totp=$row4['tot_present'];
				$tot+=$totp;
				//echo "<td>".$totp."</td>";
			}
			$d=$row['division'];
			$totw=$m*$cnt1;
			$per=$tot/$totw*100;
			//echo "<td>";
			if($pe>=$per)
			{
				echo "<tr>";
				echo "<td>".$studid."</td>";
				echo "<td>".$fullname."</td>";
				echo "<td>".$m."</td>";
				
				$qry4="select * from t_cms_stud_attend where c_std_id=$studid;";
				$res4=mysql_query($qry4) or die();
				$cnt1=mysql_num_rows($res4);
				while($row4=mysql_fetch_array($res4))
				{
					$lstudid=$row['c_std_id'];
					$totp=$row4['tot_present'];
					$tot+=$totp;
					echo "<td>".$totp."</td>";
				}
				echo "<td>".$d."</td>";
				echo "<td>";
				printf("%6.2f",$per);
				echo "</tr>";
			}
			}
			
		}
		echo "</tbody>";
		echo "</table>";
?>
<td align="center">
<input type="hidden" id="datatodisplay" name="datatodisplay">
<input type="submit"  value="Create File " name="l1"   style="width:150px;
    height: 40px;margin-left:540px;
    color: #ffffff;
    background: url(img/contact_but.png);
    background-repeat:no-repeat;
    background-position:left bottom;
    border: none;
    font-family: Verdana, Helvetica, sans-serif, Helvetica, sans-serif;font-size:18px;
    font-weight: bold;" />
<input type="hidden" name='id' value="<?php echo $id?>">
</form>
<?php
}

?>
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

