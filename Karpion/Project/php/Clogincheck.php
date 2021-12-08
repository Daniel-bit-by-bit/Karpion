<?php
include("contractor_db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
 $username=mysqli_real_escape_string($con,$_POST['UserName']);
 $password=mysqli_real_escape_string($con,$_POST['Password']);
 $result = mysqli_query($con,"SELECT * FROM CONTRACTOR");
 $c_rows = mysqli_num_rows($result);
 if ($c_rows!=$username) {
  header("location: login.php?remark_login=failed");
 }
 $sql="SELECT User_ID FROM CONTRACTOR WHERE UserName='$username' and Password='$password'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 $active=$row['active'];
 $count=mysqli_num_rows($result);
 if($count==1) {
  $_SESSION['login_user']=$username;
  header("location: ../html/contractorPage.php");
 }
}
?>