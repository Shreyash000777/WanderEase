<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
  		<meta name="author" content="Joydeep Dev Nath">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="images/favicon.ico">
	
		<title>About Us | Project Meteor</title>
    
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
		
		<?php 
		
			if(!isset($_SESSION["username"])) {
				include("common/headerLoggedOut.php");
			}
			else {
				include("common/headerLoggedIn.php");
			}
		
		?>
		
		<div class="spacer">a</div>
		
		<div class="col-sm-12 aboutUsWrapper">
			
			<div class="headingOne">
				
				About Us
				
			</div>
			
			<div class="para">
				
			About WanderEase:<br>

<b>Welcome to WanderEase</b>, a visionary travel project that transforms the way you experience the world. Born out of a passion for exploration and a commitment to seamless travel, WanderEase is your ultimate companion for every journey.

Our Vision:
At WanderEase, we envision a world where travel is not just a means to reach a destination but a captivating adventure in itself. We aim to empower travelers with choices, convenience, and a touch of excitement at every step of their journey.

What Sets Us Apart:

Comprehensive Options: WanderEase brings together a diverse array of travel options, from scenic bus routes to high-flying adventures and the cozy comfort of handpicked hotels.

User-Friendly Platform: Navigating through WanderEase is as easy as planning your dream trip. Our intuitive platform ensures that your travel planning experience is smooth, enjoyable, and tailored to your preferences.

Curated Selection: Discover carefully curated selections of hotels, ensuring that your accommodation is not just a place to stay but an integral part of your travel experience.

The WanderEase Experience:
Embark on a journey where every choice is yours to make. Feel the anticipation build as you select the mode of transportation and accommodation that resonates with your style. WanderEase is not just a travel website; it's a gateway to unforgettable adventures, where the journey itself becomes a source of excitement and joy.

Join Us:
Are you ready to redefine your travel experience? Wander with us, explore with us, and make every trip a tale worth telling. Your adventure begins with WanderEase—because the journey should be as memorable as the destination.				
			</div>
			
		</div> <!-- paymentWrapper -->
	
	<div class="spacerLarge">.</div> <!-- just a dummy class for creating some space -->
			
		<?php include("common/footer.php"); ?>
				
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>