<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 
	

// 	if (submit button has been pressed) {
// 			and if ($name, $phone values are set) { echo thank you. }
// 			and if (value/s is/are empty) { show form with error message. }
// }	else { show form. 
// }


	$phone = $_GET["phone_number"];

	$name = $_GET["full_name"];

	if ( $_GET["button"] ){

		if ( !empty($name) AND !empty($phone) ) {

			echo "Thank you for your information <br>"; }

			if ( empty($name) OR empty($phone) ) {

				echo "There was a problem with your information. Please try again. <br>"; ?>

				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
					<div class="row">
						<div class="large-12 columns">
							<label>Full Name
								<input type="text" placeholder="Your Name" name="full_name"/>
							</label>
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns">
							<label>Phone Number						
								<input type="text" placeholder="123-5555" name="phone_number"/>
							</label>
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns">
							<input type="submit" value="Submit" name="button"/>
						</div>
					</div>
				</form>

				<?php } 

			} else { ?>

			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
				<div class="row">
					<div class="large-12 columns">
						<label>Full Name
							<input type="text" placeholder="Your Name" name="full_name"/>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-4 columns">
						<label>Phone Number						
							<input type="text" placeholder="123-5555" name="phone_number"/>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-4 columns">
						<input type="submit" value="Submit" name="button"/>
					</div>
				</div>
			</form>

			<?php } 


			?>


		</body>
		</html>