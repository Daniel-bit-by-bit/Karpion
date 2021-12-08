<?php
include_once 'Header.php';
?>


<section class="signup-form" style="padding-top: 10%;text-align: center;">

<form action="Includes/signup.inc.php"  method = "post">
  <div class="container">
    <h1>Sign Up Page</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

      <label for="fname">Full name: </label><br>
      <input type="text" name="fname" placeholder="full name..." required>
        <br>
        <label for="email">Email: </label><br>
        <input type="text" name="email" placeholder="email...">
        <br>
        <label for="uid">Username: </label><br>
        <input type="text" name="uid" placeholder="username">
        <br>
        <label for="psw">Password: </label><br>
        <input type="password" name="psw" placeholder="password">
        <br><br><br>
        <button type="submit" name="submit" style="width: 25%">Sign Up</button>
  </div>
</form>
<section>

  <?php
     //signup errors
         if(isset($_GET["error"])){
             if($_GET["error"] == "emptyinput"){
                 echo "<p>Fill all fields!<p>";
             }
             else if($_GET["error"] == "invalidemail"){
                 echo "<p>Choose a proper email!<p>";
             }
             else if($_GET["error"] == "invaliduid"){
                 echo "<p>Choose a proper username!<p>";
             }
             else if($_GET["error"] == "invalidpassword"){
                 echo "<p>Choose a proper password!<p>";
             }
             else if($_GET["error"] == "usernametaken"){
                 echo "<p>Email already taken!<p>";
             }
             else if($_GET["error"] == "none"){
                 echo "<p>You have signed up!<p>";
             }

         }
     ?>
    </body>
</html>

