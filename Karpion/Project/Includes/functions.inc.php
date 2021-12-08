<?php
/*****************************/
//if inputs are empty
function emptyInputSignUp($name,$email,$username,$psw){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($psw)){
      $result = true;
    }else{
      $result = false;
    }
    return $result;
}
/*****************************/
function invalidUid($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
      $result = true;
    }
    else{
      $result = false;
    }
    return $result;
  }
/*****************************/
function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $result = true;
    }
    else{
      $result = false;
    }
    return $result;
  }
/*****************************/
//checking if user exists
function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM EmployerUsers WHERE employerUid = ? OR employerEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signupEmployer.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    //grab data
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
      return $row;
    }else{
      $result = false;
      return $result;
    }
    mysqli_stmt_close($stmt);
  }
  /*****************************/
  //CREATE A USER IN THE DB
function createUser($conn,$name,$email,$username,$psw){
    $sql = "INSERT INTO EmployerUsers(employerName,employerEmail, employerUid,employerPwd) VALUES (?,?,?,?);";

    //prepared statement
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signupEmployer.php?error=stmtfailed");
        exit();
    }

    $hashedPsw = password_hash($psw, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name,$email,$username,$hashedPsw);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signupEmployer.php?error=none");
    exit();
  }
/*****************************/
/*****************************/
//if inputs are empty
  function emptyInputLogin($username,$psw){
      $result;
      if(empty($username) || empty($psw)){
        $result = true;
      }else{
        $result = false;
      }
      return $result;
  }
  /*****************************//*****************************/
  function loginUser($conn, $username,$psw){
   $uidExists = uidExists($conn, $username, $username);
   if($uidExists === false){
     header("location: ../loginEmployer.php?error=wronglogin");
     exit();
   }
$pswHashed = $uidExists["employerPwd"];
   $checkPsw = password_verify($psw, $pswHashed);
   if($checkPsw === false){
     header("location: ../loginEmployer.php?error=wronglogin");
     exit();
   }else if($checkPsw === true){
     session_start();
     $_SESSION["employerid"] = $uidExists["employerId"];
     $_SESSION["employeruid"] = $uidExists["employerUid"];
     header("location: ../EmployerIndex.php");
     exit();
   }
 }
