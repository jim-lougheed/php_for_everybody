<?php echo "<h2>Type Casting</h2>"; ?>

Typecasting is forcing a data type on a 
variable's value

<?php 


	$age = "12";

	$age = (int) $age;

	var_dump($age);

	$name = 'Jim';
	$nameInt = (int) $name;
	$nameBoolean = (Boolean) $name;
	$nameFloat = (float) $name;
	$nameArray = (array) $name;
	$nameObject = (Object) $name;

	var_dump($name, $nameInt, $nameBoolean, $nameFloat, $nameArray, $nameObject)

?>