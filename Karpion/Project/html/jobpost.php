<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Job Posting</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/carousel.css" />
  </head>

  <body>
    <!-- Header Code Provided by Akhil -->
    <header>
      <nav id="globalnav">
        <!--Logo goes here, brings us back to Landing-->
        <a href="index.html" id="logo"
          ><img src="../images/logo.png" alt="Karpion Logo"
        /></a>
        <h1>Karpion</h1>
        <a id="menu"><img src="../images/menu-icon.svg" /></a>
        <ul>
          <!--The Other Web Pages Go Into This List-->
          <li><a href="other.html">Other Page</a></li>
        </ul>
      </nav>
    </header>
    <script src="../js/jquery-3.6.0.js"></script>
    <!-- Menu and Globalnav-related Scripts /!-->
    <script>
      $(document).ready(function () {
        // Menu Button Toggle
        $("#menu").click(function () {
          $("#globalnav").toggleClass("nav_open");
        });

        //Remove nav_open class on nav-link click
        $("#globalnav ul li a").click(function () {
          $("#globalnav").removeClass("nav_open");
        });
      });
    </script>
    <!-- End of header code -->
    <div class="center">
      <div class="wrapper">
        <div class="inner">
          <!-- PHP Script to grab info from database for three random profiles-->  
            <?php
            $dbservername="localhost";
            $dbusername="group3";
            $dbpass="5J7pONKvNY2K";
            $dbname="group3";
            $conn=@mysqli_connect($dbservername,$dbusername,$dbpass,$dbname);
        
            // Connection Check
            if (!$conn) {
              print("ERROR - Connection failed: could not connect to MySQL");
              exit;
            }
        
            //Database Select
            $er = mysqli_select_db($conn,$dbname);
            if (!$er) {
              print("ERROR - Connection failed: could not connect to database");
              exit;
            }
        
            $SQLstring = "SELECT Company, Job_Title, Duties, Qualifications  FROM JOB_POSTING ORDER BY RAND() LIMIT 3";
        
            //Execute calls
            $result = mysqli_query($SQLstring);
            if(!$result) {
              print "Error = the query could not be executed";
              $error = mysqli_error();
              print "<p>" . $error . "</p>";
              exit;
            }
            do{
              echo "<div class ="card">";
              echo "<div class ="content">";
              echo "<h1>" . $row['Company'] . "</h1>";
              echo "<h1>" . $row['Job_Title'] . "</h1>";
              echo "<h3>" . $row['Duties'] . "</h3>";
              echo "<h3>" . $row['Qualifications'] . "</h3>";
              echo "</div>"
              echo "</div>"
            }while($row);
          ?>
        </div>
      </div>
  </body>
</html>
