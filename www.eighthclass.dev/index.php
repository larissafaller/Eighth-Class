<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<!-- if submit button has been pressed-->
	<?php 

	// $button = null;

	if ( $_GET["button"] ) {
		echo "The button has been pressed.";
	} else {
		?>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
			<div class="row">
				<div class="large-12 columns">
					<label>Phone Number
						<input type="text" placeholder="123-5555" name="phone_number"/>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="large-4 columns">
					<label>Full Name
						<input type="text" placeholder="Your Name" name="full_name"/>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="large-4 columns">
					<input type="submit" value="Submit" name="button"/>
				</div>
			</div>
		</form>

		<?php
	}





	?>

	<!-- then check $name, $phone values are set. --> 

	<!-- If value/s is/are empty, show form with error message. -->

	<!-- Else echo thank you -->



</body>
</html>