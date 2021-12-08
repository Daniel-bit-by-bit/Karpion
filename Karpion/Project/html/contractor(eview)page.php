<?php include "../php/Clogincheck.php"; ?>
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="../css/Cstyle.css" />
 <title>Karpion - Edit Profile</title>
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
<div id="edit">
<div id="edit-st">
<div align="center">
<?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Save Changes Here</div> ';
}
if ($remarks=='success') {
echo ' <div id="reg-head" class="headrg">Success</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Failed!, Username exists</div> ';
}
if ($remarks=='error') {
echo ' <div id="reg-head-fail" class="headrg">Failed! <br> Error: '.$_GET['value'].' </div> ';
}
?>
</div>
<form name="reg" action="../php/edit.php" onsubmit="return validateForm()" method="post" id="reg">
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td class="t-1">
<div align="left" id="tb-name">First&nbsp;Name:</div>
</td>
<td width="171">
<input type="text" name="Name" id="tb-box"/>
</td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Contact:</div></td>
<td><input type="text" name="Contact" id="tb-box"/></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Email:</div></td>
<td><input type="text" id="tb-box" name="Header" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Username:</div></td>
<td><input type="text" id="tb-box" name="UserName" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Password:</div></td>
<td><input id="tb-box" type="password" name="Password" /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Save Changes" id="st-btn"/></div>
</form>
<div id="reg-bottom" class="btmrg"></div>
</div>
</div>
<div id="login">
<div id="login-st">

<div id="reg-bottom" class="btmrg"></div>
</div>
</div>
</div>
</div>
<div id="footer"><p> </p></div>
</body>
</html>