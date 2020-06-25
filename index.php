<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>College Management System</title>

	<link rel="shortcut icon" href="img/logo.jpg" />
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="jquery-1.11.3.min.js"></script>
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	
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
	clear: both;
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
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">Degree</a></li>
        <li><a href="#">Departments</a></li> 
        <li><a href="contact.php">Contact</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <?php
	       if(session_status()!=PHP_SESSION_NONE)
	       {
		    session_start();
	        if($_SESSION['userid']!="")
	        {
		     echo "<li><a href='login.php'><span class='glyphicon glyphicon-user'></span> Logout</a></li>";
		    }
		   }
		   else
		   {
            echo "<li><a href='register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
            echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
		   }
	  ?>
      </ul>

	  
    </div>
  </div>
</nav>
<!-- -->

<!-- Side navigation bar --
<nav class="col-sm-3">
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
        <li class="active"><a href="#section1">Section 1</a></li>
        <li><a href="#section2">Section 2</a></li>
        <li><a href="#section3">Section 3</a></li>
      </ul>
    </nav>
<!--  -->

<!-- Carousel -->
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/bit1.jpg" alt="BIT Sindri" width="225" height="190">
      </div>

      <div class="item">
        <img src="img/bit2.jpg" alt="BIT Sindri" width="225" height="190">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--  -->


<h6 style="font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: normal;
    color: #ffffff;
    background: url(img/contact_but.png) no-repeat top left;
    text-align: center;
    width: 150px;
    height: 40px;
    padding-top: 10px;margin-top:50px;margin-left:150px;">Event</h6>
<div   class="col-sm-4" style="margin-top:0px;margin-left:100px;height:18em;width:265px;-moz-border-radius: 1em 4em 1em 4em;
border-radius: 0em 0em 2em 2em;
border-bottom: 1px  black solid;border-left: 1px  black solid;border-right: 1px  black solid;font: 15px Arial, Helvetica, sans-serif;color:#666666;">
<div class="align-content">			
<marquee onmouseover="stop()"  onmouseout="start()" direction="up" align="center"  scrollamount="2"
            scrolldelay="1">
<ul>
<?php
$con=@mysql_connect("localhost","root","");
if($con)
{
	mysql_select_db("cms",$con);
}
else
{
	echo "Connection is not Est"."<br>";
}
$day=date("d");
$mon=date("m");
$year=date("Y");

$res=mysql_query("select * from t_cms_event;");

while($row=mysql_fetch_array($res))
{
	$sdate=$row['d_start'];
	$edate=$row['d_end'];
	$syear=substr($sdate,0,4);
	$eyear=substr($edate,0,4);
	$mon=substr($sdate,5,2);
	$emon=substr($edate,5,2);
	$smon=substr($sdate,5,2);
	$sday=substr($sdate,8,2);
	$eday=substr($edate,8,2);
	if($eyear==$year)
	{
		if($emon==$mon)
		{
			if($eday>=$day)
			{
				$name=$row['c_event_name'];
				echo "<li style='margin-left:5px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['c_desc'];
				?>
				<img src="img/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</div>";
				
				
			}
		}
		else
		{
			if($emon>=$mon)
			{
				$name=$row['c_event_name'];
				echo "<li style='margin-left:35px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['c_desc'];
				?>
				<img src="img/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</div>";
			}
			else
			{
				
			}
		
		}	
	}
	else
	{
		if($eyear>=$year && $emon<$mon)
		{
		
				$name=$row['c_event_name'];
				echo "<li style='margin-left:35px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['c_desc'];
				?>
				<img src="img/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</div>";
				
		}
	}
}

?>
</li>
</ul>
</marquee>			
</div>
</div>

<!--div style="margin-top:0px;margin-left:250px;height:18em;width:500px;-moz-border-radius: 1em 4em 1em 4em;
border-radius: 0em 0em 2em 2em;
border-bottom: 1px  black solid;border-left: 1px  black solid;border-right: 1px  black solid;font: 15px Arial, Helvetica, sans-serif;color:#666666;">
<center style="font-family: Arial, Helvetica, sans-serif;">

</center>
</div-->
<center class="col-sm-2">
  <div style="margin-top:-60px;background-color:#FFFFFF;width:550px;font-family:copperplate gothic light">
         <h3>Welcome to CMS</h3>
	<p>CMS provides a means to manage various activities of college. It involves data maintenance of staff, faculty and students. Further, it provides a means for maintenance of blacklist and notification sending.</p>
  </div>
</center>


<div style="margin-top:100px;margin-right:0px;float:right;">
<h6 style="font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: normal;
    color: #ffffff;
    background: url(img/contact_but.png) no-repeat top left;
    text-align: center;
    width: 150px;
    height: 40px;
    padding-top: 10px;margin-top:-150px;margin-left:50px;">Fresh News</h6>

<div   class="col-sm-4" style="margin-top:-100px;margin-right:100px;height:18em;width:265px;-moz-border-radius: 1em 4em 1em 4em;
border-radius: 0em 0em 2em 2em;
border-bottom: 1px  black solid;border-left: 1px  black solid;border-right: 1px  black solid;font: 15px Arial, Helvetica, sans-serif;color:#666666;">
			<div class="align-content">
<marquee onmouseover="stop()"  onmouseout="start()" direction="up" align="center"  scrollamount="2"
            scrolldelay="1">
<?php
$day=date("d");
$mon=date("m");
$year=date("Y");
$con=@mysql_connect("localhost","root","");
if($con)
{
	mysql_select_db("cms",$con);
}
else
{
	echo "Connection is not Est"."<br>";
}
$res=mysql_query("select * from t_cms_news;");

while($row=mysql_fetch_array($res))
{
	$sdate=$row['d_start'];
	$edate=$row['d_end'];
	$syear=substr($sdate,0,4);
	$eyear=substr($edate,0,4);
	$mon=substr($sdate,5,2);
	$emon=substr($edate,5,2);
	$smon=substr($sdate,5,2);
	$sday=substr($sdate,8,2);
	$eday=substr($edate,8,2);
	if($eyear==$year)
	{
		if($emon==$mon)
		{
			if($eday>=$day)
			{
				$name=$row['c_news_name'];
				$id=$row['n_down_id'];
				if($id>0)
				{
				$res1=mysql_query("select * from t_cms_download where n_down_id=$id;");
				$row1=mysql_fetch_array($res1);
				$path="../../../../../".$row1['path'];
				?><a href="<?php echo $path?>"><?php
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:;'>";
				echo $row['c_desc'];
				?>
				<img src="img/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
				else
				{
				$name=$row['c_news_name'];
				echo "<li style='margin-left:35px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['c_desc'];
				?>
				<img src="img/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
				
				
			}
		}
		else
		{
			if($emon>=$mon)
			{
				$name=$row['c_news_name'];
				$id=$row['n_down_id'];
				if($id>0)
				{
				$res1=mysql_query("select * from t_cms_download where n_down_id=$id;");
				$row1=mysql_fetch_array($res1);
				$path="../../../../../".$row1['path'];
				?><a href="<?php echo $path?>"><?php
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:;'>";
				echo $row['c_desc'];
				?>
				<img src="img/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
				else
				{
				$name=$row['c_news_name'];
				echo "<li style='margin-left:35px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['c_desc'];
				?>
				<img src="img/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
				
			}
			else
			{
				
			}
		
		}	
	}
	else
	{
		if($eyear>=$year && $emon<$mon)
		{
		
			$name=$row['c_news_name'];
				$id=$row['n_down_id'];
				if($id>0)
				{
				$res1=mysql_query("select * from t_cms_download where n_down_id=$id;");
				$row1=mysql_fetch_array($res1);
				$path="../../../../../".$row1['path'];
				?><a href="<?php echo $path?>"><?php
				echo "<li style='margin-left:35px;'>"."<strong style=';'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:;'>";
				echo $row['c_desc'];
				?>
				<img src="img/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
				else
				{
				$name=$row['news_name'];
				echo "<li style='margin-left:35px;'>"."<strong style='color:#454545;'>";
				echo $sday."/".$smon."/".$syear." :: ";
				echo $name;
				echo "</strong>";
				echo "<br>";
				echo "<div 'style=color:#008cc4;'>";
				echo $row['c_desc'];
				?>
				<img src="img/new.gif" style="margin-left:4px;">
				<?php
				echo "<br>";
				echo "<br>";
				echo "</li>";
				echo "</a>";
				echo "</div>";
				}
			
		}
	}
}

?>
</li>
</ul>
</marquee>	
</div>	
</div>
</h6>
</div>
<div style="clear:both;"></div>
<h6 style="font-family: Arial, Helvetica, sans-serif;
    clear: both;
    font-size: 18px;
    font-weight: normal;
    color: #ffffff;
    background: url(img/button.png) no-repeat top left;
    text-align: center;
    width: 280px;
    height: 50px;
    padding-top: 10px;margin-left:500px;margin-top:-50px;">You are Visitor No. :

				<?php
				$count_my_page = ("hitcounter.txt");
				$hits = file($count_my_page);
				$hits[0] ++;
				$fp = fopen($count_my_page , "w");
				fputs($fp , "$hits[0]");
				fclose($fp);
				echo $hits[0];
				 ?>

</h6>
<br>
<div style="clear:both;"></div>
<div class="footer"><center>&copy <?php echo date("Y");?></center></div>
</body>

</html>