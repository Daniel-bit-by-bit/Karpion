<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Employer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link  rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/EmployerStyle.css" />
    <link rel="stylesheet" href="/css/styles.css" />
    <script type="text/javascript" src="/js/EmployerScript.js"></script>
  </head>
  <body>
    <header>
      <nav id="globalnav">
        <!--Logo goes here, brings us back to Landing-->
        <a href="index.html" id="logo"><img src="/images/logo.png" alt="Karpion Logo"/></a>
        <h1> Karpion </h1>
        <ul>
          <?php

          $profile ="EmployerIndex.php";
          $log = "#";
 	  $logout = "Includes/logout.inc.php";	
          $login = "loginEmployerc.php";
          $signup = "signupEmployer.php";

         if(isset($_SESSION["employerid"])){
            echo "<li><a href=\"$profile\">Profile</a></li>";
            echo "<li><a href=\"$log\">Edit</a></li>";
            echo "<li><a href=\"$log\">Messages</a></li>";
            echo "<li><a href=\"$logout\">Logout</a></li>";
          }else{
            echo "<li><a href=\"$signup\">Sign Up</a></li>";
            echo "<li><a href=\"$login\">Login</a></li>";
          }
          ?>
        </ul>

      </nav>
    </header>
