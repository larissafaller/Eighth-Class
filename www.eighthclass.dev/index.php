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
			<h2 class="text-center">PHP Form Practice</h2><br>

			<?php 


// 	if (submit button has been pressed) {
// 			and if ($name, $phone values are set) { echo thank you. }
// 			and if (value/s is/are empty) { show form with error message. }
// }	else { show form. 
// }

			
			if ( isset($_GET["phone_number"]) ){ $phone = $_GET["phone_number"]; }
			
			if ( isset($_GET["full_name"]) ){ $name = $_GET["full_name"]; }
			
			if ( isset($_GET["submit_button"]) ){ $button = $_GET["submit_button"]; }

			if ( isset($button) ) {

				if ( !empty($name) AND !empty($phone) ) {

					echo "<h4 class=\"text-center\">Thank you for your information.</h4><br>"; ?>
					<div class="row">
						<div class="large-6 columns large-centered">
							<img src="img/smiling-pug.jpg" alt="Smiling Pug" class="th"> 
						</div>
					</div>
					<?php
				}

				if ( empty($name) OR empty($phone) ) {

					echo "<h4 class=\"text-center\">There was a problem with your information. Please try again.</h4><br>" ; ?>

					<div class="row">
						<div class="large-6 columns large-centered">
							<div class=" panel">
								<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
									<div class="row">
										<div class="large-12 columns">
											<label>Full Name</label>
											<input type="text" placeholder="Your Name" name="full_name"/>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns">
											<label>Phone Number</label>					
											<input type="text" placeholder="123-4567" name="phone_number"/>
										</div>
									</div>
									<div class="row">
										<div class="large-4 columns large-centered">
											<input type="submit" value="Submit" name="submit_button" class=" medium button radius"/>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>


					<?php } 

				} else { 
					echo "<h4 class=\"text-center\">Please give your full name and phone number.</h4><br>";
					?>
					<div class="row">
						<div class="large-6 columns large-centered">
							<div class=" panel">
								<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
									<div class="row">
										<div class="large-12 columns">
											<label>Full Name</label>
											<input type="text" placeholder="Your Name" name="full_name"/>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns">
											<label>Phone Number</label>					
											<input type="text" placeholder="123-5555" name="phone_number"/>
										</div>
									</div>
									<div class="row">
										<div class="large-4 columns large-centered">
											<input type="submit" value="Submit" name="submit_button" class=" medium button radius"/>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<?php } 
					?>

				</div>
			</div>
		</body>
		</html>