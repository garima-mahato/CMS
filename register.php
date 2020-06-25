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
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</button></li>
      </ul>
	  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Log In</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="sel1">Select user:</label>
             <select class="form-control" id="sel1">
                 <option>Administrator</option>
                 <option>Staff</option>
                 <option>Student</option>
                 <option>Parent</option>
             </select>
          </div>
		  <div class="form-group">
             <label for="usr">User ID:</label>
             <input type="text" class="form-control" id="usr">
          </div>
          <div class="form-group">
             <label for="pwd">Password:</label>
             <input type="password" class="form-control" id="pwd">
          </div>
        </div>
		<a href="#">Forgot Password?</a>
        <div class="modal-footer">
		  <button type="button" class="btn btn-default">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
	  
    </div>
  </div>
</nav>
<!-- -->

<!-- Side navigation bar -->
    <nav class="col-sm-3">
      <ul class="nav nav-pills nav-stacked" data-offset-top="205">
        <li><a href="#section1" data-toggle="collapse" data-target="#dept">Departments</a></li>
		<div id="dept" class="collapse">
	     <nav class="col-sm-2">
          <ul class="nav nav-pills nav-stacked">
           <li><a href="#section1">Information Technology</a></li>
           <li><a href="#section2">Section 2</a></li>
           <li><a href="#section3">Section 3</a></li>
          </ul>
         </nav>
	    </div>
        <li><a href="#section2">Section 2</a></li>
        <li><a href="#section3">Section 3</a></li>
      </ul>
    </nav>
	
<!--  -->

<center>
  <div style="background-color:#FFFFFF;width:850px;font-family:copperplate gothic light">
     <form action="register-script.php" method="post">
	    <h2 style="color:#cd15a6; text-align:center;">REGISTER</h2>
		                   <table border="0" align="center" width="200px" style="font-family:Arial; font-size:15px;">
		                     <tr>
							     <td align="right" width="120" style="padding-right:5px;">Name : </td>
							     <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="text" name="fname" placeholder="First Name" required="true"/></td>
								 <td><input style="height:25px; border-radius:5px;" size="25px" type="text" name="mname" placeholder="Middle Name" required="true"/></td>
								 <td><input style="height:25px; border-radius:5px;" size="25px" type="text" name="lname" placeholder="Surname" required="true"/></td>
							 </tr>
							 <tr>
							     <td align="right" width="120" style="padding-right:5px;">Date of Birth: </td>
								 <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="text" name="dob" placeholder="DD/MM/YYYY" required="true"/></td>
						     </tr>
							 <tr>
							     <td align="right" width="120" style="padding-right:5px;">Father's Name: </td>
								 <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="text" name="father" placeholder="Father's name" required="true"/></td>
						     </tr>
							 <tr>
							     <td align="right" width="120" style="padding-right:5px;">Mother's Name:</td>
								 <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="text" name="mother" placeholder="Mother's name" required="true"/></td>
						     </tr>
							 <tr>
							     <td align="right" width="120" style="padding-right:5px;">Guardian's Name:</td>
								 <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="text" name="guard" placeholder="Guardian's name" required="true"/></td>
						     </tr>
							 <tr>
							     <td align="right" width="120" style="padding-right:5px;">Permanent Address:</td>
								 <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="text" name="email" placeholder="Permanent Address" required="true"/></td>
						     </tr>
							 <tr>
							     <td align="right" width="120" style="padding-right:5px;">Present Address:</td>
								 <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="text" name="email" placeholder="Present Address" required="true"/></td>
						     </tr>
							 <tr>
							     <td align="right" width="120" style="padding-right:5px;">Degree:</td>
								 <td><div class="form-group">
                                         <!--<label for="sel1">Select user:</label>-->
                                         <select class="form-control" id="sel_deg">
                                             <option>Select degree</option>
											 <option>B.Tech</option>
                                             <option>M.Tech</option>
                                         </select>
                                     </div>
								 </td>
						     </tr>
							 <tr>
							     <td align="right" width="120" style="padding-right:5px;">Department:</td>
								 <td><?php
                                       $servername = "localhost";
                                       $username = "root";
                                       $password = "password";
                                       $dbname = "myDB";

                                       // Create connection
                                       $conn = new mysqli($servername, $username, $password, $dbname);
                                       // Check connection
                                       if ($conn->connect_error) {
                                           die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "SELECT id, firstname, lastname FROM MyGuests";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                         // output data of each row
                                         while($row = $result->fetch_assoc()) {
                                             echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                                         }
                                        } else {
                                        echo "0 results";
                                        }
                                        $conn->close();
                                     ?></td>
						     </tr>
		                     <tr>
							     <td align="right" width="120" style="padding-right:5px;">E-mail:</td>
								 <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="text" name="email" placeholder="E-mail" required="true"/></td>
						     </tr>
		                     <tr>
							     <td align="right" width="120" style="padding-right:5px;">Password:</td>
								 <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="password" name="pass" placeholder="Password" required="true"/></td>
							 </tr>
		                     <tr>
							     <td align="right" width="120" style="padding-right:5px;">Contact:</td>
								 <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="text" name="contact" placeholder="Ten digit Mobile No." required="true"/></td>
							 </tr>
		                     <tr>
							     <td align="right" width="120" style="padding-right:5px;">Student Type:</td>
								 <td><div class="form-group">
                                         <!--<label for="sel1">Select user:</label>-->
                                         <select class="form-control" id="sel_std_type">
                                             <option>Select Student type</option>
											 <option>Regular</option>
                                             <option>Lateral Entry</option>
                                         </select>
                                     </div>
								 </td>
							 </tr>
		                     <tr>
							     <td align="right" width="120" style="padding-right:5px;">Category:</td>
								 <td><div class="form-group">
                                         <!--<label for="sel1">Select user:</label>-->
                                         <select class="form-control" id="sel_cat">
                                             <option>--Select Category--</option>
											 <option>General</option>
                                             <option>BC-I</option>
                                             <option>BC-II</option>
                                             <option>SC</option>
											 <option>ST</option>
                                         </select>
                                     </div>
								 </td>
							 </tr>
							 <tr>
							     <td align="right" width="120" style="padding-right:5px;">Admission Category:</td>
								 <td><div class="form-group">
                                         <!--<label for="sel1">Select :</label>-->
                                         <select class="form-control" id="sel_adm_cat">
                                             <option>--Select Category--</option>
											 <option>General</option>
                                             <option>BC-I</option>
                                             <option>BC-II</option>
                                             <option>SC</option>
											 <option>ST</option>
                                         </select>
                                     </div></td>
						     </tr>
							 <tr>
							     <td align="right" width="120" style="padding-right:5px;">Upload Image:</td>
								 <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="file" name="img_file" placeholder="E-mail" required="true"/></td>
						     </tr>
							 <tr>
							     <td align="right" width="120" style="padding-right:5px;">Upload Date of birth proof:</td>
								 <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="file" name="dob_file" placeholder="E-mail" required="true"/></td>
						     </tr>
							 <tr>
							     <td align="right" width="120" style="padding-right:5px;">Upload address proof:</td>
								 <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="file" name="add_proof" placeholder="E-mail" required="true"/></td>
						     </tr>
							 <tr>
							     <td align="right" width="120" style="padding-right:5px;">Upload category proof:</td>
								 <td><input style="height:25px; padding-left:10px; border-radius:5px;" size="25px" type="file" name="cat_proof" placeholder="E-mail" required="true"/></td>
						     </tr>
							 <tr>
							  <td></td>
							   <td>
                               <input type="submit" style="float:right; width:90px; height:30px; margin:10px; text-align:center; background-color:#cd15a6; border-radius:5px; color:#ffffff; font-size:0.8em; text-decoration:none;" value="Sign Up!"/></td>
							 </tr>
		                   </table>
					 </div>
	 </form>
  </div>
</center>

<div class="footer"><center>&copy <?php echo date("Y");?></center></div>
</body>