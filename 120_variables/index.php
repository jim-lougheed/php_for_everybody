<?php 
	echo "<h1>Variables</h1>"; 

	$urlName = $_GET['name'];
	$urlHobby = $_GET['hobby'];
	$name = "Kalob";
	$age = "30ish";

	echo "Hello, $name! You are $age years old";
	echo "Hello, $urlName, my hobby is $urlHobby";
?>