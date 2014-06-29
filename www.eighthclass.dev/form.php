<!-- ?> -->
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