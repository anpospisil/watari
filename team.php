<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Watari Counselling & Support Services Society</title>
    <meta name="description" content="Watari Counselling & Support Services Society">
    <meta name="keywords" content="watari, councelling, support services">
    <meta name="author" content="Yen Hua, Steven MacDougall, Andrew Pospisil, Lindsey McBrine, Thomas Tahamont">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">



  </head> <!-- closing head -->

  <body>

    <!-- NAV BAR -->
<nav class="navbar fixed-top navbar-expand-md bg-white">
<div class="container">
    <a class="navbar-brand" href="index.html"><img src="images/watari-logo.svg" alt="Watari logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon fas fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse w-100 flex-md-column" id="navbarCollapse">
        <ul class="navbar-nav ml-auto small mb-2 mb-md-0">
            <li class="nav-item active pr-3">
                <a class="nav-link py-1" href="#">Our Partners</a>
            </li>
            <li class="nav-item pr-3">
                <a class="nav-link py-1" href="#">My Account</a>
            </li>
            <li class="nav-item pr-3">
                <a class="nav-link py-1 phone-number-nav" href="tel:604-254-6995 ">604.254.6995</a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-1" href="https://www.facebook.com/WatariCounsellingandSupportServices/"><span class="fab fa-facebook-f"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-1" href="https://twitter.com/watarivancouver?lang=en"><span class="fab fa-twitter"></span></a>
            </li>
        </ul>
	    <ul class="navbar-nav ml-auto">
	<li class="nav-item dropdown pr-2">
        <a class="nav-link dropdown-toggle bold-nav-link" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         About
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item bold-nav-link" href="about.html">About Us</a>
          <a class="dropdown-item bold-nav-link" href="team.php">Our Team</a>
          <a class="dropdown-item bold-nav-link" href="news.php">News</a>
          <a class="dropdown-item bold-nav-link" href="ourimpact.html">Our Impact</a>
          <a class="dropdown-item bold-nav-link" href="report.html">Annual Report</a>
        </div>
      </li>
      <li class="nav-item pr-3">
        <a class="nav-link bold-nav-link" href="services.html">Services</a>
      </li>
    <li class="nav-item dropdown pr-2">
        <a class="nav-link dropdown-toggle bold-nav-link" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Get Involved
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item bold-nav-link" href="donate.html">Donate</a>
          <a class="dropdown-item bold-nav-link" href="partner.html">Partner</a>
          <a class="dropdown-item bold-nav-link" href="volunteer.html">Volunteer</a>
          <a class="dropdown-item bold-nav-link" href="learn.html">Learn</a>
          <a class="dropdown-item bold-nav-link" href="careers.html">Careers</a>
          </div>
      </li>
      <li class="nav-item pr-4">
        <a class="nav-link bold-nav-link" href="connect.html">Connect</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-red" href="https://www.canadahelps.org/en/dn/15463">Donate</a>
      </li>
    </ul>
    </div>
</div>
</nav>

<!--- OUR TEAM JUMPBOTRON -->
<div class="jumbotron green-gradient-bg">
	<div class="container"> <!-- CONTAINER START -->
		<div class="row pb-4">
			<div class="col-12 col-md-6 offset-md-3 jumobotron-text-margin-top">
				<h1 class="mt-5 text-center text-yellow">Our Team</h1>
				<h3 class="text-center text-white pb-4">Meet the great staff at Watari. We are committed to helping improve our community and beyond.</h3>
			</div>
		</div>
	    <div class="row">
			<div class="col-12 text-center pb-5">
    			<a class="btn btn-yellow" href="#" role="button">Join Our Team</a>
			</div>
		</div>

		<div class="row pt-5 pb-5">
			<div class="col-12 text-center">
				<span class="fas fa-angle-down text-white"></span>
			</div>
		</div>
	</div> <!-- CONTAINER END -->
</div>
<!-- Executive Profiles -->
<section id="profiles-our-team" class="light-gray-gradient-bg pb-5">
	<div class="container"> <!-- CONTAINER START -->
		<div class="row">
			<div class="col-12 col-md-6 offset-md-3">
				<h2 class="mt-5 text-center text-red">Executive Profiles</h2>
			</div>
		</div>
		
<?php 
$db = mysqli_connect("localhost","andrewp3_andrew","Watari19","andrewp3_watari");

$result1 = mysqli_query($db, "SELECT name, position, bio FROM our_team WHERE id='1'");
$row1 = mysqli_fetch_assoc($result1);

$result2 = mysqli_query($db, "SELECT name, position, bio FROM our_team WHERE id='2'");
$row2 = mysqli_fetch_assoc($result2);

$result3 = mysqli_query($db, "SELECT name, position, bio FROM our_team WHERE id='3'");
$row3 = mysqli_fetch_assoc($result3);

$result16 = mysqli_query($db, "SELECT name, position FROM our_team WHERE id='16'");
$row16 = mysqli_fetch_assoc($result16);

$result17 = mysqli_query($db, "SELECT name, position, bio FROM our_team WHERE id='17'");
$row17 = mysqli_fetch_assoc($result17);

$result18 = mysqli_query($db, "SELECT name, position, bio FROM our_team WHERE id='18'");
$row18 = mysqli_fetch_assoc($result18);

$result19 = mysqli_query($db, "SELECT name, position, bio FROM our_team WHERE id='19'");
$row19 = mysqli_fetch_assoc($result19);

$result20 = mysqli_query($db, "SELECT name, position, bio FROM our_team WHERE id='20'");
$row20 = mysqli_fetch_assoc($result20);

$result21 = mysqli_query($db, "SELECT name, position, bio FROM our_team WHERE id='21'");
$row21 = mysqli_fetch_assoc($result21);

$result22 = mysqli_query($db, "SELECT name, position, bio FROM our_team WHERE id='22'");
$row22 = mysqli_fetch_assoc($result22);

?>
		
      	<div class="row pt-5">
      		<div class="col-8 offset-2 col-md-6 offset-md-0 col-lg-3 pb-5">
      			<div class="album_photo">
        			<a href="#" class="photo_link"><img src="https://images.unsplash.com/photo-1524772128034-3ecf9a73cbe9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="image"/></a>
     			 </div>
				<h3 class="text-red text-center pt-4"><?php echo $row1['name'];?></h3>
				<h4 class="text-green text-center pt-2"><?php echo $row1['position'];?></h4>
				<p class="text-center pt-2"><?php echo $row1['bio'];?></p>
			</div>
			<div class="col-8 offset-2 col-md-6 offset-md-0 col-lg-3 pb-5">
      			<div class="album_photo">
        			<a href="#" class="photo_link"><img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="image"/></a>
     			 </div>
				<h3 class="text-red text-center pt-4"><?php echo $row2['name'];?></h3>
				<h4 class="text-green text-center pt-2"><?php echo $row2['position'];?></h4>
				<p class="text-center pt-2"><?php echo $row2['bio'];?></p>
			</div>
			      		<div class="col-8 offset-2 col-md-6 offset-md-0 col-lg-3 pb-5">
      			<div class="album_photo">
        			<a href="#" class="photo_link"><img src="https://images.unsplash.com/photo-1534751516642-a1af1ef26a56?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=635&q=80" alt="image"/></a>
     			 </div>
				<h3 class="text-red text-center pt-4"><?php echo $row16['name'];?></h3>
				<h4 class="text-green text-center pt-2"><?php echo $row16['position'];?></h4>
				<p class="text-center pt-2"><?php echo $row16['bio'];?></p>
			</div>
			<div class="col-8 offset-2 col-md-6 offset-md-0 col-lg-3 pb-5">
      			<div class="album_photo">
        			<a href="#" class="photo_link"><img src="https://images.unsplash.com/photo-1546525848-3ce03ca516f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="image"/></a>
     			 </div>
				<h3 class="text-red text-center pt-4"><?php echo $row3['name'];?></h3>
				<h4 class="text-green text-center pt-2"><?php echo $row3['position'];?></h4>
				<p class="text-center pt-2"><?php echo $row3['bio'];?></p>
			</div>
		</div>

		<div class="row pt-5">
			<div class="col-12 text-center">
				<span class="fas fa-angle-down text-red"></span>
			</div>
		</div>
	</div> <!-- CONTAINER END -->
</section>
<!-- Board of Directors -->
<section id="board-our-team" class="gray-gradient-bg pb-5">
	<div class="container"> <!-- CONTAINER START -->
		<div class="row">
			<div class="col-12 col-md-6 offset-md-3">
				<h2 class="mt-5 text-center text-purple">Board of Directors</h2>
			</div>
		</div>
      	<div class="row pt-5">
      		<div class="col-8 offset-2 col-md-6 offset-md-0 col-lg-3 pb-5">
      			<div class="album_photo">
        			<a href="#" class="photo_link"><img src="https://images.unsplash.com/photo-1514448553123-ddc6ee76fd52?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="image"/></a>
     			 </div>
				<h3 class="text-purple text-center pt-4"><?php echo $row17['name'];?></h3>
				<h4 class="text-red text-center pt-2"><?php echo $row17['position'];?> </h4>
				<p class="text-center pt-2"><?php echo $row17['bio'];?></p>
			</div>
			<div class="col-8 offset-2 col-md-6 offset-md-0 col-lg-3 pb-5">
      			<div class="album_photo">
        			<a href="#" class="photo_link"><img src="https://images.unsplash.com/photo-1522529599102-193c0d76b5b6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="image"/></a>
     			 </div>
				<h3 class="text-purple text-center pt-4"><?php echo $row18['name'];?></h3>
				<h4 class="text-red text-center pt-2"><?php echo $row18['position'];?></h4>
				<p class="text-center pt-2"><?php echo $row18['bio'];?></p>
			</div>
		    <div class="col-8 offset-2 col-md-6 offset-md-0 col-lg-3 pb-5">
      			<div class="album_photo">
        			<a href="#" class="photo_link"><img src="https://images.unsplash.com/photo-1458071103673-6a6e4c4a3413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="image"/></a>
     			 </div>
				<h3 class="text-purple text-center pt-4"><?php echo $row19['name'];?> </h3>
				<h4 class="text-red text-center pt-2"><?php echo $row19['position'];?> </h4>
				<p class="text-center pt-2"><?php echo $row19['bio'];?></p>
			</div>
			<div class="col-8 offset-2 col-md-6 offset-md-0 col-lg-3 pb-5">
      			<div class="album_photo">
        			<a href="#" class="photo_link"><img src="https://images.unsplash.com/photo-1543307711-f083bc0afbfd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80" alt="image"/></a>
     			 </div>
				<h3 class="text-purple text-center pt-4"><?php echo $row20['name'];?></h3>
				<h4 class="text-red text-center pt-2"><?php echo $row20['position'];?></h4>
				<p class="text-center pt-2"><?php echo $row20['bio'];?></p>
			</div>
		</div>

		<div class="row pt-5">
      		<div class="col-8 offset-2 col-md-6 offset-md-0 col-lg-3 pb-5">
      			<div class="album_photo">
        			<a href="#" class="photo_link"><img src="https://images.unsplash.com/photo-1496499354870-877088652a58?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80" alt="image"/></a>
     			 </div>
				<h3 class="text-purple text-center pt-4"><?php echo $row21['name'];?></h3>
				<h4 class="text-red text-center pt-2"><?php echo $row21['position'];?></h4>
				<p class="text-center pt-2"><?php echo $row21['bio'];?></p>
			</div>
			<div class="col-8 offset-2 col-md-6 offset-md-0 col-lg-3 pb-5">
      			<div class="album_photo">
        			<a href="#" class="photo_link"><img src="https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="image"/></a>
     			 </div>
				<h3 class="text-purple text-center pt-4"><?php echo $row22['name'];?></h3>
				<h4 class="text-red text-center pt-2"><?php echo $row22['position'];?> </h4>
				<p class="text-center pt-2"><?php echo $row22['bio'];?></p>
			</div>
		</div>
	</div> <!-- CONTAINER END -->
</section>
<!-- PRTNERS SHOWCASE -->
<section id="home-partners" class="light-gray-gradient-bg">
	<div class="container"> <!-- CONTAINER START -->
		<div class="row">
			<div class="col-12 col-md-6 offset-md-3">
				<h2 class="pt-5 pb-5 text-center text-purple">Our Partners</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-8 offset-2 col-sm-6 offset-sm-0 col-md-4 col-lg-2 pb-5"><img src="images/cibc.jpg" alt="Logo">
			</div>
			<div class="col-8 offset-2 col-sm-6 offset-sm-0 col-md-4 col-lg-2 pb-5"><img src="images/cityofvan.png" alt="Logo">
			</div>
			<div class="col-8 offset-2 col-sm-6 offset-sm-0 col-md-4 col-lg-2 pb-5"><img src="images/bclogo.jpg" alt="Logo">
			</div>
			<div class="col-8 offset-2 col-sm-6 offset-sm-0 col-md-4 col-lg-2 pb-5"><img src="images/bchousing.jpg" alt="Logo">
			</div>
			<div class="col-8 offset-2 col-sm-6 offset-sm-0 col-md-4 col-lg-2 pb-5"><img src="images/vhc.jpg" alt="Logo">
			</div>
			<div class="col-8 offset-2 col-sm-6 offset-sm-0 col-md-4 col-lg-2 pb-5"><img src="images/calgarylogo.png" alt="Logo">
			</div>
		</div>
	</div> <!-- CONTAINER END -->
</section>
  <!-- FOOTER SECTION -->
  <!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div>
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-12 text-center text-md-left mb-4 mb-md-0">
          <p class="mb-0 text-center">Watari is located on the unceded territories for the coast Salish People.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

           <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Watari</h6>
        <p>Watari Counselling & Support Services 200-678 East Hastings Street, Vancouver, B.C. V6A 1R1</p>
        <p>info@watari.ca</p>
        <p>604.254.6995</p>

        <a class="nav-link d-inline py-1" href="https://www.facebook.com/WatariCounsellingandSupportServices/"><span class="fab fa-facebook-f"></span></a>
        <a class="nav-link d-inline py-1" href="https://twitter.com/watarivancouver?lang=en"><span class="fab fa-twitter"></span></a>


      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Connect</h6>
        <p>
          <a href="#!">Contact</a>
        </p>
         <p>
          <a href="#!">Help</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Learn</h6>
        <p>
          <a href="#!">Download Assets</a>
        </p>
        <p>
          <a href="#!">FAQs</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">More</h6>
        <p>
          <a href="#!">Careers</a>
        </p>
        <p>
          <a href="#!">My Account</a>
        </p>
        <p>
          <a href="#!">Admin Login</a>
        </p>
        <p>
          <a href="#!">Privacy</a>
        </p>
        <p>
          <a href="#!">Sitemap</a>
        </p>

      </div>
      <!-- Grid column -->


    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright: Watari Conselling &amp; Support Services
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer CLOSE -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body> <!-- closing body -->
</html>
