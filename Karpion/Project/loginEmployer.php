<?php
include_once 'Header.php';
?>


<section class="signup-form" style="padding-top: 10%; text-align: center;">

<form action="Includes/login.inc.php"  method = "post">
  <div class="container">
    <h1>Login Page</h1>
    <p>Please fill in this form to login.</p>
    <hr>
        <label for="uid">Username: </label><br>
        <input type="text" name="uid" placeholder="username">
        <br>
        <label for="psw">Password: </label><br>
        <input type="password" name="psw" placeholder="password">
        <br><br><br>
        <button type="submit" name="submit" style="width: 25%">Login</button>
  </div>
</form>
<?php
   //signup errors
       if(isset($_GET["error"])){
           if($_GET["error"] == "emptyinput"){
               echo "<p>Fill all fields!<p>";
           }
           else if($_GET["error"] == "wronglogin"){
               echo "<p>Incorrect login information!<p>";
           }
       }
   ?>
<section>

    </body>
</html>
