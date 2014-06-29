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

// 			3b. if 1. and 2b. , then echo error message; }
					echo "<h4 class=\"text-center\">Uh-Oh! There was a problem with your information.<br>Please try again.</h4><br>"; 

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
					<?php 
				} 

// 		2c. if 1. and if name and number are NOT empty {
				if ( !empty($clean_name) AND !empty($clean_number) ) {

// 			3c. if 1. and 2c. and if full name doesn't have a space {
					if ( stripos($_GET["full_name"], " ") === false ) {

// 				4c. if 1. and 2c. and 3c. , then echo error message and show form. 
						echo "<h4 class=\"text-center\">Oops! It seems there was a problem. Please input your full name (Name AND Surname).</h4><br>";

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
						<?php 

					}


// 			3cd. if 1. and 2c. and number is not numeric {
					if ( !is_numeric($clean_number) ) {

// 				4c. if 1. and 2c. and 3cd. , then echo error message and show form. 
						echo "<h4 class=\"text-center\">Oops! It seems there was a problem. Please input a correct phone number.</h4><br>";

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
						<?php 

					}
				}

// If not 1, just show form;
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
				<?php 
			}
			




			?>

		</div>
	</div>
</body>
</html>