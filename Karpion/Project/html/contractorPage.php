
<?php
 include('../php/session.php');
?>
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="../css/Cstyle.css" />
 <title>Contractor Profile</title>
</head>
<body>
<header>
 <nav>
  <ul>
   
  </ul>
 </nav>
</header>
<div id="center">
<div id="center-set"> 
<h1 align='center'>Welcome <?php echo $loggedin_session; ?>,</h1>
You are now logged in. you can logout by clicking on signout link given below.
<div id="contentbox">
<?php
$sql="SELECT * FROM CONTRACTOR where USER_ID=$loggedin_id";
$result=mysqli_query($con,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Reg id:</div> </td>
<td class="tl-4"><?php echo $rows['User_ID']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td class="tl-4"><?php echo $rows['UserName']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-4"><?php echo $rows['Name']; ?> <?php echo $rows['Contact']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email id:</div></td>
<td class="tl-4"><?php echo $rows['Header']; ?></td>
</tr>
</table>
<div id="reg-bottom" class="btmrg"></div>
</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="../php/logout.php" id="st-btn">Sign Out</a></div>
<div id="st"><a href="../php/deleteac.php" id="st-btn">Delete Account</a></div>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>
<div id="footer"><p>  </p></div>
</body>
</html>