<html>
	<head>
	    <title>ITM Group of Institution</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
			
	</head>
	<body>
        <?php
		 include("headtitle.php");
		 ?>
		 
		 <!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h2 class="text-white">
							 Edit Fee Structure 				
							</h2>	
							<p class="text-white link-nav"><a href="dashboard.php">Dashboard </a>
						</div>	
					</div>
				</div>
			</section>  
			<br>
			<section class="info-area pb-40">
				<div class="container-fluid">
				    <div class="col-md-12">
					<!-----------------main content------>
					    <form method="POST" action="" 
			onsubmit="return validate()">
				<table class="table">
				<tr>
					<td>Type/Course</td>
					<td>
						<input type="text" name="course" id="course" class="form-control" onblur="checkTextBox(this)">
						<span class="text-danger" id="course_error"></span>
					</td>
				</tr>
				<tr>
					<td>Tuition Fee</td>
					<td>
						<input type="text" name="tuition" id="tuition" class="form-control" onblur="checkTextBox(this)" value="0">
						<span class="text-danger" id="tuition_error"></span>
					</td>
				</tr>
				<tr>
					<td>Examination Fee</td>
					<td>
						<input type="text" name="examin" id="examin" class="form-control" onblur="checkTextBox(this)" value="0">
						<span class="text-danger" id="examin_error"></span>
					</td>
				</tr>
				<tr>
					<td>Security Fee</td>
					<td>
						<input type="text" name="security" id="security" class="form-control" onblur="checkTextBox(this)" value="0" >
						<span class="text-danger" id="security_error"></span>
					</td>
				</tr>
				<tr>
					<td>Other Fee</td>
					<td>
						<input type="text" name="other" id="other" class="form-control" onblur="checkTextBox(this)" value="0" >
						<span class="text-danger" id="other_error"></span>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input class="btn btn-primary" type="submit"  name="upload" value="Upload"></td>
				</tr>
			</table>
			</form>
					</div>
				</div>
			</section>
		<?php
		 include("footer.php");
		 ?>
		    <script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>								    			

	</body>
</html>
</html>