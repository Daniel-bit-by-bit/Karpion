<?php
if(isset($_POST["submit"])){
  $username = $_POST["uid"];
  $psw = $_POST["psw"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if(emptyInputLogin($username,$psw)!== false){
      header("location: ../loginEmployer.php?error=emptyinput");
      exit();
  }

  loginUser($conn, $username,$psw);

}
else{
  header("location: ../loginEmployer.php");
  exit();
}
