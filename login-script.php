<?php
$con=@mysql_connect("localhost","root","");
$db=mysql_select_db('cms');

$usertype=$_POST['usertype'];
$userid=$_POST['userid'];
$password=$_POST['pwd'];
$sql="select C_USER_ID,C_USER_PWD,N_USER_TYPE from t_cms_user where C_USER_ID='$userid' and C_USER_PWD='$password' and N_USER_TYPE='$usertype';";
$result=mysql_query($sql);
if ($result==false)
{
    die(mysql_error());
}
$num=mysql_num_rows($result);
$row=mysql_fetch_row($result);
if($num==0 || $usertype>3)
{
  header('location:login.php');
}
else if($usertype==1)
 {
  session_start();
  $_SESSION['userid']=$userid; #row['c_user_id'];
  header('location:admin/welcome_admin.php');
 }
 else if($usertype==2)
 {
  session_start();
  $_SESSION['userid']=$userid; #row['c_user_id'];
  header('location:staff/welcome_staff.php');
 }
 else
 {
  session_start();
  $_SESSION['userid']=$userid; #row['c_user_id'];
  header('location:student/welcome_student.php');
 }
 
 
 mysql_close($con);
?>