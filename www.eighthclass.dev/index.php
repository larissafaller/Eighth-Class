<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 
	

	// If "button" has been pressed AND if $name, $phone values are set { 
	// echo Thank you for your information. } 
	// else { show error message with form. }
	$phone = $_GET["phone_number"];

	$name = $_GET["full_name"];

	if ( $_GET["button"] AND !empty($name) AND !empty($phone) ) {
		echo "Thank you for your information <br>";
	} 

	if ( $_GET["button"] AND empty($name) AND empty($phone) ) {

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

		<?php } ?>


	</body>
	</html>