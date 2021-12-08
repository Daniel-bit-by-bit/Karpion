
<?php
include_once 'Header.php';

$servername="localhost";
$dbUsername="group3";
$dbPassword="5J7pONKvNY2K";
$dbName="group3";
$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);


$currentUser = $_SESSION['employerid'];
//print_r($currentUser);
$SQLstring = "SELECT * FROM EmployerUsers WHERE employerId = $currentUser";
//print_r($SQLstring);

//print "<p><b> user information </p>";

//execute the sql calls
$queryResult = mysqli_query($conn, $SQLstring);
//print_r($queryResult);
?>

<?php
while($rows=mysqli_fetch_array($queryResult)){
	
//echo $rows['employerUid'];
?>

    		
    <div class="profile">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <link
                  rel="stylesheet"
                  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
                />
		
                <img
                  src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png"
                  alt="avatar"
                  alt="John"
                  style="width: 70%"
                  style="border-radius: 50%"
                />
                <p class="name"><?php echo $rows['employerUid'];?></p>
                <p class="title"><?php echo $rows['Company']; ?></p>
                <p class="title"><?php echo $rows['Contact']; ?></p>
                <div style="margin: 24px 0">
                  <a href="#"
                    ><i class="fa fa-globe" aria-hidden="true"></i> </a
                  >
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card1">
              <div class="card-body">
                <div class="card1">
                  <div class="card-body">
                    <button onclick="window.location.href='talentpost.html';">
                      Search Talent
                    </button>
                  </div>
                </div>

                <div class="tab">
                  <button
                    class="tablinks"
                    onclick="openInfo(event, 'Description')"
                  >
                    Description
                  </button>
                  <button
                    class="tablinks"
                    onclick="openInfo(event, 'Eligibility')"
                  >
                    Eligibility
                  </button>
                  <button class="tablinks" onclick="openInfo(event, 'Salary')">
                    Salary
                  </button>
                  
                </div>
                <div id="Description" class="tabcontent">
                  <h3>Description</h3>
                  <p><?php echo $rows['Description']; ?></p>
                </div>
                <div id="Eligibility" class="tabcontent">
                  <h3>Eligibility</h3>
                  <p><?php echo $rows['Eligibility']; ?></p>
                </div>
                <div id="Salary" class="tabcontent">
                  <h3>Salary</h3>
                  <p><?php echo $rows['Salary']; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
}
?>

  </body>
</html>
