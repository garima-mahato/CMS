<?php
session_start();
session_unset('$userid');
header("location:login.php");
?>