<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Eighth Class</title>
	<link rel="stylesheet" href="css/foundation.css" />
	<script src="js/vendor/modernizr.js"></script>
</head>
<body>

	<div class="row">
		<div class="large-12 columns large-centered">
			<br><h2 class="text-center">PHP Form Practice</h2><br>

			
			<?php 

			if ( isset($_GET["full_name"]) ){ $clean_name = preg_replace("/[^A-Za-z?! ]/","", $_GET["full_name"]); }

			$bad_items = array("-", " ", "(", ")", ".");

			if ( isset($_GET["phone_number"]) ){ $clean_number = str_replace($bad_items, "", $_GET["phone_number"]); }



// 	1. if (submit button has been pressed) {
			if ( isset($_GET["submit_button"]) ) {

//  	2a. if 1. and if (name AND number are both NOT empty) {
				if ( !empty($clean_name) AND !empty($clean_number) ) {

//  		3a. if 1. and 2. and if there is no space between the words and the number is numeric {
					if ( stripos($_GET["full_name"], " ") == true AND is_numeric($clean_number) ) { 

//  			4a. if 1. and 2. and 3. then echo success message, show puppy; }}
						echo "<h4 class=\"text-center\">Success! Thank you for your information.</h4><br>";
						?>
						<div class="row">
							<div class="large-6 columns large-centered">
								<img src="img/smiling-pug.jpg" alt="Smiling Pug" class="th"> 
							</div>
						</div>
						<?php
					}
				}

//  	2b. if 1. and if (name OR number is empty) {

				if ( empty($clean_name) OR empty($clean_number) )  {

// 			3b. if 1. and 2b. , then echo error message and show form}
					echo "<h4 class=\"text-center\">Uh-Oh! There was a problem with your information.<br>Please try again.</h4><br>"; 
					include 'form.php'; 
				} 

// 		2c. if 1. and if name and number are NOT empty {
				if ( !empty($clean_name) AND !empty($clean_number) ) {

// 			3c. if 1. and 2c. and if full name doesn't have a space, but number is numeric {
					if ( stripos($_GET["full_name"], " ") === false AND is_numeric($clean_number)) {

// 				4c. if 1. and 2c. and 3c. , then echo 'full name' error message and show form. 
						echo "<h4 class=\"text-center\">Oops! It seems there was a problem. Please input your full name.</h4><br>";
						include 'form.php';  

					}


// 			3d. if 1. and 2c. if full name does have a space, but phone number is not numeric  {
					if ( stripos($_GET["full_name"], " ") == true AND !is_numeric($clean_number) ) {

// 				4d. if 1. and 2c. and 3cd. , then echo 'phone number' error message and show form. 
						echo "<h4 class=\"text-center\">Oops! It seems there was a problem. Please input a correct phone number.</h4><br>";
						include 'form.php'; 

					}
				}

// 			3e. if 1. and 2c. if full name doesn't have a space and phone number is not numeric {

				if ( !empty($clean_name) OR !empty($clean_number) )  {
					
					if ( stripos($_GET["full_name"], " ") === false AND !is_numeric($clean_number) ) {

// 				4e. if 1. and 2c. and 3cd. , then echo error 'full name and phone number' message and show form. 
						echo "<h4 class=\"text-center\">Oops! It seems there was a problem. Please input your full name and a correct phone number.</h4><br>";
						include 'form.php'; 

					}
				}


// If not 1, show start up message and show form;
			} else { 
				echo "<h4 class=\"text-center\">Please give your full name and phone number.</h4><br>";
				include 'form.php'; 
			} ?>


		</div>
	</div>
</body>
</html>