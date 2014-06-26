<?php 

$phone = $_GET["phone_number"];

if (!empty($phone)) {
	echo "Hello there, here is your phone number: $phone. <br>";
} else {
	echo "MORON!";
}

// echo $phone;

$name = $_GET["full_name"];
// echo $name;

if (!empty($name)) {
	echo "This is your name: $name. <br>";
} else {
	echo "UH-OH!";
}

if ( empty($phone) OR empty($name) ) {
	echo "You need to add more information!";
}


?>