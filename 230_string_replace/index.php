<?php echo "<h2>String Replace</h2>"; ?>
str_replace();
<hr />

<?php 

	$sentence = "Hello World!";
	$sentence = str_replace("World", "Kalob", $sentence);

	echo $sentence;

	echo "<hr />";


	$sentence = "This sentence will have zero zeroes and oh my gawsh it has a few zeros";


	$sentence = str_replace(
		"o", "0", $sentence, $count
	);

	echo $sentence . '.. o was replaced with 0: ' . $count . ' times';

	$favouriteDog = 'My favourite dog in the world is Perra';
	echo $favouriteDog;
	echo "<hr />";
	$favouriteDog1 = str_replace('Perra', 'Perra and Rufio', $favouriteDog, $count1);
	echo $favouriteDog1;
	echo "<hr />";
	$favouriteDog2 = str_replace('dog', 'dogs', $favouriteDog1, $count2);
	echo $favouriteDog2;
	echo "<hr />";
	$favouriteDog3 = str_replace('is', 'are', $favouriteDog2, $count3);
	echo $favouriteDog3;
	echo "<hr />";
	echo $count1, $count2, $count3;



?>








