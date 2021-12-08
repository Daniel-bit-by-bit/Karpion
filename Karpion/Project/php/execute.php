<?php 
session_start();
include('contractor_db.php');
$username=$_POST['UserName'];
$result = mysqli_query($con,"SELECT * FROM CONTRACTOR WHERE UserName='$username'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: login.php?remarks=failed"); 
}else {
 $name=$_POST['Name'];
 $contact=$_POST['Contact'];
 $address=$_POST['Header'];
 $username=$_POST['UserName'];
 $password=$_POST['Password'];
 if(mysqli_query($con,"INSERT INTO CONTRACTOR( Name, Contact, Header,UserName, Password)VALUES('$name', '$contact','$address', '$username', '$password')")){ 
 header("location: login.php?remarks=success");
 }else{
  $e=mysqli_error($con);
 header("location: login.php?remarks=error&value=$e");  
 }
}
?>