<?php echo "<h1>Data Types</h1>"; ?>

<?php 
	
	$string = "My name is Kalob";
	$int = 30; // Int
	$float = 3.14; // Float/Decimal
	$boolean = true; // True / false
	$array = 
	["one", $int, 3.14, $boolean];

	echo $string . "<br />";
	echo $int . "<br />";
	echo $float . "<br />";
	echo $boolean . "<br />";
	echo $array[3] . "<br />";

?>