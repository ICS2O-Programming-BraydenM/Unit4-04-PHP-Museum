<?php
// This function displays the discount depending on age and day of the week.

  // initialize variables
	$cost = "Please make a selection above.";
	
	// get age and day of the week
	$age = intval($_POST['age']);
	$day = $_POST['day'];
  	
	if ($age < 5 || $age > 95) {
		$cost = "The cost is FREE for you. Have fun bestie.";
	}
	else if (($day == "Tuesday") || ($day == "Thursday)") 
			 || ($age >=12) && ($age <=21)) {
		$cost = "You get a student discount. Could be worse.";
	}
	else {
		$cost = "You have to pay regular price. That is unfortunate.";
	}

  // display the greeting
  	echo "$cost";

?>