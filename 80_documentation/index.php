<?php 
	echo "The docs!";

	echo date("M d Y"). ', sunrise time: ' .date_sunset(time(), SUNFUNCS_RET_STRING, 43, -79);
	echo date("G:i:s T Y");
?>