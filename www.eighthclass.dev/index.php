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


// if (name is  empty OR name doesn't contain a space) {
				if ( empty($clean_name) ){
					$errors[] = '<h4 class="text-center">Please fill in your name.</h4><br>'; 
				}

				if ( !empty($clean_name) AND ( stripos($_GET["full_name"], " ") === false ) ){
					$errors[] = '<h4 class="text-center">Please fill in your full name. (e.g. John Smith)</h4><br>'; 
				}


// if number is not empty OR the number is numeric {
				if ( empty($clean_number) ) {
					$errors[] = '<h4 class="text-center">Please fill in your phone number.</h4><br>'; 
				}

				if ( !empty($clean_number) AND !is_numeric($clean_number) ) {
					$errors[] = '<h4 class="text-center">Please fill in your correct phone number. (e.g. 640-3978)</h4><br>'; 
				}
			}





// 2. If there are any error messages in the array, print them all.

			if ( isset ($errors[0]) ) { echo $errors[0]; }

			if ( isset ($errors[1]) ) { echo $errors[1]; }

			if ( isset ($errors[2]) ) { echo $errors[2]; }

			if ( isset ($errors[3]) ) { echo $errors[3]; }






// 3. If submit button has been pressed and there are no errors:


			if ( isset($_GET["submit_button"]) AND ( !isset($errors) )) {


// then echo success message, show puppy; }
				echo "<h4 class=\"text-center\">Success!<br>Thank you for your information.</h4><br><br>";
				?>
				<div class="row">
					<div class="large-6 columns large-centered">
						<img src="img/smiling-pug.jpg" alt="Smiling Pug" class="th"> 
					</div>
				</div>
				<?php
			} else {


// Display the form.
				if ( !isset($_GET["submit_button"]) OR ( isset($errors)) ) {
					?>
					<div class="row">
						<div class="large-6 columns large-centered">
							<div class=" panel">
								<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
									<div class="row">
										<div class="large-12 columns">
											<label>Full Name</label>
											<input type="text" placeholder="Your Name" name="full_name" 

											<?php if ( isset($_GET["full_name"]) ) {
												echo "value='" . $_GET["full_name"] . "' ";
											} ?>

											/>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns">
											<label>Phone Number</label>					
											<input type="text" placeholder="123-4567" name="phone_number"

											<?php if ( isset($_GET["phone_number"]) ) {
												echo "value='" . $_GET["phone_number"] . "' ";
											} ?>

											/>

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


			?>


		</div>
	</div>
</body>
</html>