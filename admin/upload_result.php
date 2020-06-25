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

    <title>Upload Result</title>

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
<td>
Exam<br><br><br>
</td>
<td>
<select name="en" size="1" style="font-family: Verdana, Helvetica, sans-serif;font-size:17px;margin-left:-150px;">			
<?php
$con=@mysql_connect("localhost","root","");
mysql_select_db("cms",$con);
$res=mysql_query("SELECT c_res_declared,c_examtype,d_date,n_exam_id from t_cms_exam where c_res_declared='No';");
$cnt=mysql_num_rows($res);
while($cnt>0)
{
	while($row=mysql_fetch_array($res))
	{
   		$type=$row['c_examtype'];
		$du=$row['d_date'];
		$asyear  = substr($du,0,4);
		$asmonth = substr($du,5,2);
		$asday  = substr($du,8,2);
		$eid=$row['n_exam_id'];
		$qry="SELECT c_deg_name FROM t_cms_degree where c_deg_id in(select c_deg_id from t_cms_exam where n_exam_id=$eid);";
		$res1=mysql_query($qry);
		while($row=mysql_fetch_array($res1))
		{
			$name=$row['c_deg_name'];
			$qry="SELECT n_sem_no,n_year FROM t_cms_sem where n_sem_id in(select n_sem_id from t_cms_exam where n_exam_id=$eid);";
			$res2=mysql_query($qry);
			while($row=mysql_fetch_array($res2))
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
				$exam=$name." ".$sem." ".$type."(".$s.")";
							?>
				<option value="<?php echo $eid ?>">
				<?php
				echo $exam;
				?>
				</option>
				<?php
	
	
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
<img src="img/xml.png"  width="120" height="110"><br>
</td>
<td>
<div  style="margin-left:-180px;">
<input  type="file" class="file_1" name="file" style="margin-left:150px;"/><br>
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
<?php 
if(isset($_POST['l1']))
{
	if($_FILES['file']['type']=="text/xml")
	{
	static $st=0;
	$con=mysql_connect("localhost","root","");
	$eid=$_POST['en'];
	if($con)
	{
		mysql_select_db("cms",$con);
	}
	else
	{
		echo "Connection is not Est"."<br>";
	}
	if ($_FILES['file']['tmp_name'])
	{
		$qry1="select c_course_id from t_cms_course where n_sem_id in(select n_sem_id from t_cms_exam where n_exam_id=$eid);";
		$res1=mysql_query($qry1);
 		$dom = DOMDocument::load( $_FILES['file']['tmp_name'] );
 		$rows = $dom->getElementsByTagName( 'Row' );
 		$cnt=mysql_num_rows($res1);
		if($cnt==1)
		{
			while($row=mysql_fetch_array($res1))
 			{ 
	 		if($cnt==1)
 			{
		 		$s1=$row['c_course_id'];
			}
			$cnt--;
			}
			
		}
		if($cnt==2)
		{
			while($row=mysql_fetch_array($res1))
 			{ 
	 		if($cnt==1)
 			{
		 		$s2=$row['c_course_id'];
			}
			if($cnt==2)
 			{
		 		$s1=$row['c_course_id'];
			}
			$cnt--;
			}
			
		}
		if($cnt==3)
		{
			while($row=mysql_fetch_array($res1))
 			{ 
	 		if($cnt==1)
 			{
		 		$s3=$row['c_course_id'];
			}
			if($cnt==2)
			{
				$s2=$row['c_course_id'];
        		}
        		if($cnt==3)
			{
				$s1=$row['c_course_id'];
        		}
			$cnt--;
			}
			
		}
		if($cnt==4)
		{
			while($row=mysql_fetch_array($res1))
 			{ 
	 		if($cnt==1)
 			{
		 		$s4=$row['c_course_id'];
			}
			if($cnt==2)
			{
				$s3=$row['c_course_id'];
        		}
        		if($cnt==3)
			{
				$s2=$row['c_course_id'];
        		}
			if($cnt==4)
			{
				$s1=$row['c_course_id'];
        		}
			$cnt--;
			}
			
		}
		if($cnt==5)
		{
			while($row=mysql_fetch_array($res1))
 			{ 
	 		if($cnt==1)
 			{
		 		$s5=$row['c_course_id'];
			}
			if($cnt==2)
			{
				$s4=$row['c_course_id'];
        		}
        		if($cnt==3)
			{
				$s3=$row['c_course_id'];
        		}
			if($cnt==4)
			{
				$s2=$row['c_course_id'];
        		}
			if($cnt==5)
			{
				$s1=$row['c_course_id'];
        		}
			$cnt--;
			}
			
		}
		
  		if($cnt==6)
		{
 		while($row=mysql_fetch_array($res1))
 		{ 
	 		if($cnt==1)
 			{
		 		$s6=$row['c_course_id'];
			}
			if($cnt==2)
			{
				$s5=$row['c_course_id'];
        		}
        		if($cnt==3)
			{
				$s4=$row['c_course_id'];
        		}
			if($cnt==4)
			{
				$s3=$row['c_course_id'];
       			}
			if($cnt==5)
			{
				$s2=$row['c_course_id'];
        		}
			if($cnt==6)
			{
				$s1=$row['c_course_id'];
 			}
			$cnt--;
		}
		}
 	$first_row = true;
 	foreach ($rows as $row)
 	{	
		$le=count($rows);
   		if (!$first_row)
   		{
     			$stud_id="";
			$id="";
			$sid="";
    			$marks1 = "";
			$marks2 = "";
 			$marks3 = "";
       			$marks4 = "";
  			$marks5 = "";
  			$marks6 = "";
			$div="";
    			$index = 1;
     			$cells = $row->getElementsByTagName( 'Cell' );
     			
     			foreach( $cells as $cell)
    			{
      				$ind = $cell->getAttribute( 'Index' );
       				if ( $ind != null ) $index = $ind;
    				if ( $index == 1 ) $stud_id = $cell->nodeValue;
       				if ( $index == 2 ) $marks1 = $cell->nodeValue;
       				if ( $index == 3 ) $marks2  = $cell->nodeValue;
				if ( $index == 4 ) $marks3  = $cell->nodeValue;
				if ( $index == 5 ) $marks4  = $cell->nodeValue;
				if ( $index == 6 ) $marks5  = $cell->nodeValue;
				if ( $index == 7 ) $marks6  = $cell->nodeValue;
				if ( $index == 8 ) $div  = $cell->nodeValue;
				$index += 1;
    			}
		
		$cnt=mysql_num_rows($res1);
		if($cnt==4)
		{
		$cnt=1;
    		while($cnt<=4)
   		{
    			if($cnt==1)
   	 		{
    			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s1,$marks1);";
			if(mysql_query($qry) or die())
			$st+=1;
    			}
    			if($cnt==2)
    			{
    			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s2,$marks2);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
    			if($cnt==3)
    			{
   			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s3,$marks3);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
			if($cnt==4)
    			{
   			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s4,$marks4);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
   			$cnt++;
    		}
		$cnt=0;
		}	
		if($cnt==5)
		{
		$cnt=1;
    		while($cnt<=5)
   		{
    			if($cnt==1)
   	 		{
    			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s1,$marks1);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
    			if($cnt==2)
    			{
    			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s2,$marks2);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
    			if($cnt==3)
    			{
   			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s3,$marks3);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
			if($cnt==4)
    			{
   			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s4,$marks4);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
			if($cnt==5)
    			{
   			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s5,$marks5);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
   			$cnt++;
    		}
		$cnt=0;
		}	
		if($cnt==6)
		{
		$cnt=1;
    		while($cnt<=6)
   		{
    			if($cnt==1)
   	 		{
    			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s1,$marks1);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
    			if($cnt==2)
    			{
    			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s2,$marks2);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
    			if($cnt==3)
    			{
   			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s3,$marks3);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
    			if($cnt==4)
    			{
    			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s4,$marks4);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
    			if($cnt==5)
    			{
    			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s5,$marks5);";
   			if(mysql_query($qry) or die())
			$st+=1;
    			}
    			if($cnt==6)
    			{
    			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s6,$marks6);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
   			$cnt++;
    		}
		$cnt=0;
		}
		if($cnt==3)
		{
		$cnt=1;
    		while($cnt<=3)
   		{
    			if($cnt==1)
   	 		{
    			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s1,$marks1);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
    			if($cnt==2)
    			{
    			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s2,$marks2);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
    			if($cnt==3)
    			{
   			$qry="insert into t_cms_result(n_exam_id,c_std_id,c_course_id,n_marks) values($eid,$stud_id,$s3,$marks3);";
    			if(mysql_query($qry) or die())
			$st+=1;
    			}
   			$cnt++;
    		}
		}
		$cnt=0;	
 		}

$first_row = false;
 	}
}
if($st>0)
{
	?>
	<script language="javascript">
	confirm("Your excel file is successfully inserted into the table.");
	</script>
	<?php
	$qry="update t_cms_exam set c_res_declared='Yes' where n_exam_id=$eid;";
	mysql_query($qry);
	$qry="select * from t_cms_exam where n_exam_id=$eid;";
	$res=mysql_query($qry);
	$row=mysql_fetch_array($res);
	$date=$row['d_date'];
	$semid=$row['n_sem_id'];
	$cid=$row['c_deg_id'];
	$year  = substr($date,0,4);
	$month = substr($date,5,2);
	$day  = substr($date,8,2);
	$qry1="select * from t_cms_fac_sub where c_deg_id=$cid and n_sem_id=$semid;";
	$res1=mysql_query($qry1);
	while($row=mysql_fetch_array($res1))
	{
		$sdate=$row['d_start'];
		$edate=$row['d_end'];
		$fid=$row['c_staff_id'];
		$syear  = substr($sdate,0,4);
		$smonth = substr($sdate,5,2);
		$sday  = substr($sdate,8,2);
		$eyear  = substr($edate,0,4);
		$emonth = substr($edate,5,2);
		$eday  = substr($edate,8,2);
		if($syear==$eyear)
		{
			if($syear>=$year && $eyear >= $year)
			{
				if($smonth<=$month && $emonth>=$month)
				{
					
					$qry="update t_cms_fac_sub set c_declared='Yes',n_exam_id=$eid where c_staff_id=$fid and c_deg_id=$cid and n_sem_id=$semid and d_start='$sdate' and d_end='$edate';";
					mysql_query($qry);
				}
			}	
		}
		else
		{
			if($syear<$year && $eyear >= $year)
			{
				if($smonth>=$month && $emonth>=$month)
				{
					
					$qry="update t_cms_fac_sub set c_declared='Yes',n_exam_id=$eid where c_staff_id=$fid and c_deg_id=$cid and n_sem_id=$semid and d_start='$sdate' and d_end='$edate';";
					mysql_query($qry);
				}
			}	
		}
		
	}
	
	
}
if($st==0)
{
	?>
	<script language="javascript">
	var name="Error encountered while inserting data.";
	alert(name);
	</script>
	<?php
}
}
}
}
else
{
	
		header("location:../login.php");
	
}
?>