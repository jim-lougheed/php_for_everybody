<?php echo "<h2>If Statements</h2>"; ?>
Conditionals!
<hr />

<?php 

	$age = 44;
	$name = "Kalob";
	
	if($age == 18) {
		echo "You are eightteen";
	}

	echo "<hr />";

	// Basic operators
	// >, <, >=, <=, ==

	if($age < 45) { // This has to be TRUE
		echo "Secret access granted!";
	}

	$age1 = 32;
	$name1 = 'Jim';
	if ($age1 > 30) {
		echo 'You OLD!';
	};
	if ($name1 === 'Jim') {
		echo "You are $name1";
	}


?>
