<h2>Your Project</h2>

<ul>
	<li>Create a POST form</li>
	<li>Make 3 input fields</li>
	<li>Check make them all required fields</li>
	<li>Write clean code <sup>*very important</sup></li>
	<li>Echo a success message to the page when the form was successfully submitted</li>
	<li>Echo an error message if the form is missing fields</li>
</ul>

<?php 
	$name = '';
	$lastName = '';
	$email = '';
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	}
	if (isset($_POST['lastName'])) {
		$lastName = $_POST['lastName'];
	}
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}

?>

<form method="POST">
	<label for="name">Your name:</label>
	<input name="name" value="<?php echo $name; ?>" type="text">
	<label for="lastName">Your last name:</label>
	<input name="lastName" value="<?php echo $lastName; ?>" type="text">
	<label for="email">Your email:</label>
	<input name="email" value="<?php echo $email; ?>" type="text">
	<button type="submit">Submit</button>
</form>

<?php
	if (empty($name)) { ?>
		<p style='background-color: purple; color: white'>
		<?php echo 'You are missing a name';
	} elseif (empty($lastName)) { ?>
		<p style='background-color: purple; color: white'>
		<?php echo 'You are missing a last name';
	} elseif (empty($email)) { ?>
		<p style='background-color: purple; color: white'>
		<?php echo 'You are missing an email';
	} else {
		echo "Hello, $name!";
	}
