<?php 
	$city_name = '';
	$person_name = '';

	if (isset($_GET['name'])) {
		$person_name = $_GET['name'];
	}

	if(isset($_GET['city'])) {
		$city_name = $_GET['city'];
	}
?>


<h2>Forms</h2>

<form method="GET">
	<label for="city">City Name:</label>
	<input type="text" value="<?php echo $city_name; ?>" name="city">
	<label for="name">Your name</label>
	<input type='text' value='<?php if(!empty($person_name)) {
		echo $person_name;
	} else {
		echo "I dont know you";
	}; ?>' name='name' >
	<button type="submit">Submit</button>
</form>

<?php 
	
	if(!empty($city_name)) {
		echo "Hey $person_name, you are from ";
		echo $city_name;
	}


?>










