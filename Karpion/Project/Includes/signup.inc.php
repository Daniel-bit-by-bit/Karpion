<?php

if(isset($_POST["submit"])){

  $name = $_POST["fname"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $psw = $_POST["psw"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';


  if(emptyInputSignUp($name,$email,$username,$psw)!== false){
      header("location: ../signupEmployer.php?error=emptyinput");
      exit();
  }
 if(invalidEmail($email)!== false){
      header("location: ../signupEmployer.php?error=invalidemail");
      exit();
  }
if(uidExists($conn, $username,$email)!== false){
    header("location: ../signupEmployer.php?error=usernametaken");
    exit();
  }
/*

  if(invalidUid($username)!== false){
      header("location: ../signupEmployer.php?error=invaliduid");
    
  exit();
  }
  if(invalidPassword($psw)!== false){
    header("location: ../signupEmployer.php?error=invalidpassword");
    exit();
  }
  if(uidExists($conn, $username,$email)!== false){
    header("location: ../signupEmployer.php?error=usernametaken");
    exit();
  }

*/
  //NO MISTAKES DONE IF GOTTEN HERE
  //create user in database
  createUser($conn,$name,$email,$username,$psw);
}
else{
  header("location: ../signupEmployer.php");
}
