<?php echo "Mixing HTML and PHP"; ?>


<?php 
	// file is always .php

	echo "<h1>this is h1</h1>";
	echo "<h2>this is h2</h2>";

	echo "<div style='border: 1px solid red;'>";
		echo "Hello! !!!! ! ! !";
	echo "</div>";

	$name = "Kalob";
	$name2 = "Bob";
?>


<h1>Name: <?php echo $name; ?></h1>

<div style='background-color: red;'>
	<?php echo $name; ?>
</div>

<div>
	<?php echo "Jim's Pokemon" ?>
</div>
<div style='display: flex; justify-content: space-between;'>
	<div>
		<?php echo "pengin-san" ?>
	</div>
	<div>
		<?php echo "zzzzzzzzzzap" ?>
	</div>
	<div>
		<?php echo "hyhorn" ?>
	</div>
	<div>
		<?php echo "farigiraf" ?>
	</div>
	<div>
		<?php echo "zubat" ?>
	</div>
	<div>
		<?php echo "ihadapony" ?>
	</div>
</div>



<script>
	$name2 = prompt("<?php echo 'What is your name?' ?>")
	alert("<?php echo $name2; ?>");
</script>










