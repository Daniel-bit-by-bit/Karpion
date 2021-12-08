<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Talent Posting</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/carousel.css" />
  </head>
<body>
<?php
$servername="localhost";
$dbUsername="group3";
$dbPassword="5J7pONKvNY2K";
$dbName="group3";
$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

$er = mysqli_select_db($conn,$dbName);
if (!$er) {
	print("could not connect to database");
    exit;
}
$SQLstring = "SELECT Name, Contact, Header, Skillset FROM CONTRACTOR ORDER BY RAND() LIMIT 3";

$query = mysqli_query($conn, $SQLstring);
if(!$query) {
	print "query could not be executed";
    $error = mysqli_error();
    print "<p>" . $error . "</p>";
    exit;
   }
while($rows=mysqli_fetch_array($query)){
?>
	<div class="center">
	<div class="wrapper">
	<div class="inner">
	<div class ="card">
	<div class ="content">
	<?php echo "<h1>" . $rows['Name'] . "</h1>";  ?>
	<?php echo "<h1>" .$rows['Contact'] . "</h1>";  ?>
	<?php echo "<h3>" .$rows['Header'] . "</h3>";  ?>
	<?php echo "<h3>" .$rows['Skillset'] . "</h3>";  ?>
	</div>
</div>
</div>
<?php
}
mssqli_close($db);
?> 
</body>
</html> 