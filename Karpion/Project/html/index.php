<!DOCTYPE html>
<!--index.php
    Landing page
    Links redirect user to either Login page, or Job/Talent posting page
    Showcases a couple contractors randomly queried from the database-->
<html lang="en">
    <head>
        <title>LANDING</title>
        <meta charset="utf-8">
        <link rel=stylesheet type="text/css" href="../css/styles.css">
    </head>
    <body>
        <header>
            <nav id="globalnav">
                <!--Logo goes here, brings us back to Landing-->
                <a href="index.php" id="logo"><img src="../images/logo.png" alt="Karpion Logo"></a>
                <h1> Karpion </h1>
            </nav>
        </header>
        <main>
            <nav class="landnav">
                <div>
                    <!--Navigate to the login page-->
                    <button onclick="window.location.href='login.html';">Login</button>
                </div><br>
                <div>
                    <!--TODO not guaranteed what the next pages specific names are, just insert filename into href for the next 2 buttons-->
                    <!--this button goes to the Job Posting page-->
                    <button onclick="window.location.href='../html/jobpost.html';">Look for Jobs</button>
                    <!--this button goes to the Talent Posting page-->
                    <button onclick="window.location.href='../html/talentpost.html';">Look for Talent</button>
                </div>
            </nav>
            <!--Last bit of main content reserved for featured profiles-->
            <div id="landingshowcase">
                <h1>Featured Profiles</h1>
                <?php
                $h = "localhost";
                //$u == database name
                $u = "group3";
                $p = "5J7pONKvNY2K";
                $DBConnect = @mysqli_connect($h, $u, $p);
                @mysqli_select_db($DBConnect, $u);
                //$q == the mysql query
                $q = "SELECT name, contact, header, education, skillset FROM CONTRACTOR ORDER BY RAND() LIMIT 3;";
                $query = @mysqli_query($DBConnect, $q);
                //TODO check if the output looks right
                $Row = mysqli_fetch_row($query);
                do{
                    echo "<div><h1>{$Row[0]}</h1><h2>{$Row[1]}</h2><h3>{$Row[2]}</h3><p>{$Row[3]}</p><p>{$Row[4]}</p></div>";
                    $Row = mysqli_fetch_row($query);
                }while($Row);
                mysqli_close($DBConnect);
                ?>
            </div>
        </main>
        <footer>
            <!--Footer for any site info, contact info, whatever else-->
        </footer>
        <script src="../js/jquery-3.6.0.js"></script>
    </body>
</html>
