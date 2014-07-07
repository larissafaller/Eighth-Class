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

			if ( isset($_GET["breakfast"]) ){ $clean_breakfast = preg_replace("/[^A-Za-z?! ]/","", $_GET["breakfast"]); }

			if ( isset($_GET["dinner"]) ){ $clean_dinner = preg_replace("/[^A-Za-z?! ]/","", $_GET["dinner"]); }



// 	if (submit button1 has been pressed) {
			if ( isset($_GET["submit_button1"]) ) {



// if (name is empty OR name doesn't contain a space) { set errors1[] }
				if ( empty($clean_name) ){
					$errors1[] = '<h4 class="text-center">Please fill in your name.</h4><br>'; 
				}

				if ( !empty($clean_name) AND ( stripos($_GET["full_name"], " ") === false ) ){
					$errors1[] = '<h4 class="text-center">Please fill in your full name. (e.g. John Smith)</h4><br>'; 
				}



// if (number is empty OR the number is not numeric ) { set error1[] }
				if ( empty($clean_number) ) {
					$errors1[] = '<h4 class="text-center">Please fill in your phone number.</h4><br>'; 
				}

				if ( !empty($clean_number) AND !is_numeric($clean_number) ) {
					$errors1[] = '<h4 class="text-center">Please fill in your correct phone number. (e.g. 640-3978)</h4><br>'; 
				}
			}



// if (there are any error1 messages in the array ) { print them all }

			if ( isset ($errors1[0]) ) { echo $errors1[0]; }

			if ( isset ($errors1[1]) ) { echo $errors1[1]; }

			if ( isset ($errors1[2]) ) { echo $errors1[2]; }

			if ( isset ($errors1[3]) ) { echo $errors1[3]; }



// if ( submit button2 has been pressed and there are no errors2 ) {

			if ( isset($_GET["submit_button2"]) AND  !isset($errors2) ) {



// then echo success message, show puppy; }
				echo "<h4 class=\"text-center\">Success!<br>Thank you for your information.</h4><br><br>";
				?>
				<div class="row">
					<div class="large-6 columns large-centered">
						<img src="img/smiling-pug.jpg" alt="Smiling Pug" class="th"> 
					</div>
				</div>
				<?php 
				die();
			}


// if (submit1 is not set OR there are errors1) { display the form }
			if ( !isset($_GET["submit_button1"]) OR ( isset($errors1)) ) {
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
										} ?> />
									</div>
								</div>
								<div class="row">
									<div class="large-4 columns large-centered">
										<input type="submit" value="Submit" name="submit_button1" class=" medium button radius"/>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<?php 
			} 



// if ( submit button2 has been pressed ) {
			if ( isset($_GET["submit_button2"]) ) {



// if breakfast is  empty { set errors2[] }
				if ( empty($clean_breakfast) ){  
					$errors2[] = '<h4 class="text-center">Please fill in your favourite breakfast.</h4><br>'; 
				}



// if dinner is  empty { set errors2[] }
				if ( empty($clean_dinner) ){
					$errors2[] = '<h4 class="text-center">Please fill in your favourite dinner.</h4><br>'; 
				}



// if there are any errors2 messages in the array, print them all.

				if ( isset ($errors2[0]) ) { echo $errors2[0]; }

				if ( isset ($errors2[1]) ) { echo $errors2[1]; }
			}



// if ( submit1 is set AND there are no erros1) {
// if ( submit2 is not set OR there are errors2 ) { display form2 }}
			if ( isset($_GET["submit_button1"]) AND !isset($errors1) ) {
				if ( !isset($_GET["submit_button2"]) OR isset($errors2) ) {

					?>
					<div class="row">
						<div class="large-6 columns large-centered">
							<div class=" panel">
								<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
									<input type="hidden" name="full_name" value="Lara Faller">
									<input type="hidden" name="phone_number" value="123-5555">
									<div class="row">
										<div class="large-12 columns">
											<label>Favourite Breakfast</label>
											<input type="text" placeholder="Your favourite breakfast" name="breakfast" 

											<?php if ( isset($_GET["breakfast"]) ) {
												echo "value='" . $_GET["breakfast"] . "' ";
											} ?>/>
										</div>
									</div>
									<div class="row">
										<div class="large-12 columns">
											<label>Favourite Dinner</label>					
											<input type="text" placeholder="Your favourite dinner" name="dinner"

											<?php if ( isset($_GET["dinner"]) ) {
												echo "value='" . $_GET["dinner"] . "' ";
											} ?> />
										</div>
									</div>
									<div class="row">
										<div class="large-4 columns large-centered">

											<input type="submit" value="Submit" name="submit_button2" class=" medium button radius"/>

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