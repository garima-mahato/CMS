<?php
	session_start();
	if($_SESSION['userid']!="")
	{
		error_reporting(E_ALL & ~E_NOTICE);
		$conn = @mysql_connect("localhost", "root", "");
		mysql_select_db("cms");
		mysql_query("SET NAMES 'utf8'");
		include("inc/jqgrid_dist.php");
		$col = array();
		$col["title"] = "Course Id"; // caption of column
		$col["name"] = "c_course_id"; // grid column name, must be exactly same as returned column-name from sql (tablefield or field-alias) 
		$col["width"] = "30";
		# $col["hidden"] = true; // hide column by default
		$cols[] = $col;
        
		
        $col = array();
		$col["title"] = "Dept";
		$col["name"] = "c_dpt_id";
		$col["width"] = "30";
		$col["editable"] = true; // this column is not editable
		$col["align"] = "center"; // this column is not editable
		$col["search"] = true; // this column is not searchable
		$col["editrules"] = array("string"=>true,"limit"=>true,"required"=>true);
		# $col["formatter"] = "image"; // format as image -- if data is image url e.g. http://<domain>/test.jpg
		# $col["formatoptions"] = array("width"=>'20',"height"=>'30'); // image width / height etc
		$cols[] = $col;		

		
		$col = array();
		$col["title"] = "Deg";
		$col["name"] = "c_deg_id";
		$col["width"] = "30";
		$col["editable"] = true; // this column is not editable
		$col["align"] = "center"; // this column is not editable
		$col["search"] = true; // this column is not searchable
		$col["editrules"] = array("string"=>true,"limit"=>true,"required"=>true);
		# $col["formatter"] = "image"; // format as image -- if data is image url e.g. http://<domain>/test.jpg
		# $col["formatoptions"] = array("width"=>'20',"height"=>'30'); // image width / height etc
		$cols[] = $col;
		
		
		$col = array();
		$col["title"] = "No Of Sem";
		// fieldname is not with tablealias in sql, so we used plain fieldname
		$col["name"] = "n_sem_no"; 
		$col["width"] = "30";
		$col["editable"] = true; // this column is editable
		$col["editoptions"] = array("size"=>20); // with default display of textbox with size 20
		$col["editrules"] = array("required"=>true,"integer"=>true,"max"=>true); // and is required
		// $col["formatoptions"] = array("srcformat"=>'Y-m-d',"newformat"=>'d/m/Y'); // format as date, wont work for editing
		$cols[] = $col;
	
		
		$col = array();
		$col["title"] = "Course Name";
		$col["name"] = "c_course_name";
		$col["width"] = "30";
		$col["editable"] = true; // this column is not editable
		$col["align"] = "center"; // this column is not editable
		$col["search"] = true; // this column is not searchable
		$col["editrules"] = array("string"=>true,"limit"=>true,"required"=>true);
		# $col["formatter"] = "image"; // format as image -- if data is image url e.g. http://<domain>/test.jpg
		# $col["formatoptions"] = array("width"=>'20',"height"=>'30'); // image width / height etc
		$cols[] = $col;
		
		
		$col = array();
		$col["title"] = "Syllabus";
		$col["name"] = "c_syllabus";
		$col["width"] = "30";
		$col["editable"] = true; // this column is not editable
		$col["align"] = "center"; // this column is not editable
		$col["search"] = true; // this column is not searchable
		$col["editrules"] = array("string"=>true,"limit"=>true,"required"=>true);
		# $col["formatter"] = "image"; // format as image -- if data is image url e.g. http://<domain>/test.jpg
		# $col["formatoptions"] = array("width"=>'20',"height"=>'30'); // image width / height etc
		$cols[] = $col;


		/*$col = array();
		$col["title"] = "No Of Year";
		$col["name"] = "no_of_year";
		$col["width"] = "30"; // not specifying width will expand to fill space
		$col["sortable"] = false; // this column is not sortable
		$col["search"] = true; // this column is not searchable
		$col["editable"] = true;
		$col["editrules"] = array("integer"=>true,"limityear"=>true,"required"=>true,"zero"=>true);
		//$col["edittype"] = "textarea"; // render as textarea on edit
		$col["editoptions"] = array("size"=>20); // with these attributes
		$cols[] = $col;

		$col = array();
		$col["title"] = "Maximum Seat";
		$col["name"] = "max_seat";
		$col["width"] = "30";
		$col["editable"] = true;
		$col["editrules"] = array("integer"=>true,"limitseat"=>true,"required"=>true,"zero"=>true);
		$cols[] = $col;*/
		// To mask password field, apply following attribs
		# $col["edittype"] = "password";
		# $col["formatter"] = "password";

		// default render is textbox
		// $col["editoptions"] = array("value"=>'10');

		// can be switched to select (dropdown)
		# $col["edittype"] = "select"; // render as select
		# $col["editoptions"] = array("value"=>'10:$10;20:$20;30:$30;40:$40;50:$50'); // with these values "key:value;key:value;key:value"

		/*$col = array();
		$col["title"] = "Starting Date";
		// fieldname is not with tablealias in sql, so we used plain fieldname
		$col["name"] = "starting_date"; 
		$col["width"] = "30";
		$col["editable"] = true; // this column is editable
		$col["editrules"] = array("cdate"=>true,"required"=>true); // and is required
		$col["formatter"] = "date";*/
		//$col["formatoptions"] = array("srcformat"=>'Y-m-d',"newformat"=>'d-m-Y');


		#$col["edittype"] = "checkbox"; // render as checkbox
		#$col["editoptions"] = array("value"=>"Yes:No"); // with these values "checked_value:unchecked_value"
		//$col["edittype"] = "select"; // render as select
		//$col["editoptions"] = array("value"=>'No:Not Booked;Yes:Yes it is Booked'); // with these values "key:value;key:value;key:value"
		$cols[] = $col;

		$g = new jqgrid();

		// $grid["url"] = ""; // your paramterized URL -- defaults to REQUEST_URI
		$grid["rowNum"] = 10; // by default 20
		$grid["sortname"] = 'c_course_id'; // by default sort grid by this field
		$grid["sortorder"] = "asc"; // ASC or DESC
		$grid["caption"] = "Course Data"; // caption of grid
		$grid["autowidth"] = true; // expand grid to screen width
		$grid["multiselect"] = true; // allow you to multi-select through checkboxes
// RTL support
// $grid["direction"] = "rtl";

$g->set_options($grid);

$g->set_actions(array(	
						"add"=>true, // allow/disallow add
						"edit"=>true, // allow/disallow edit
						"delete"=>true, // allow/disallow delete
						"rowactions"=>false, // show/hide row wise edit/del/save option
						"autofilter" => true, // show/hide autofilter for search
					) 
				);

// you can provide custom SQL query to display data
$g->select_command = "SELECT * FROM t_cms_courses";

// this db table will be used for add,edit,delete
$g->table = "t_cms_courses";

// pass the cooked columns to grid
$g->set_columns($cols);

// generate grid output, with unique grid name as 'list1'
$out = $g->render("sub1".$_REQUEST["subgrid"]);

$themes = array("redmond","smoothness","start","dot-luv","excite-bike","flick","ui-darkness","ui-lightness","cupertino","dark-hive");
$i = rand(0,8);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Course Manage</title>

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
		<li class="active"><a href="master_form.php">Master Form</a></li>
        <li><a href="upload.php">Upload</a></li>
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
				
				
					<div style="margin-top:-45px;">
					<?php echo $out?>
					</div>
				
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