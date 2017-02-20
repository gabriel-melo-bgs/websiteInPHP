<?php
	echo "<title>Why not add a title?!</title>"; 
	echo "<h1>"."What's up, galera???"."</h1>";//just to try some concatenation

	$myArray = array("1st thing", "2nd thing", "last thing"); //This is wrong!!! $myArray = new array("bla", "bla", "bla");
	for($i = 0; $i<=10; $i++)
	{
		if($i<3){

			echo "<h2>"; //This will be concatenated with the following echo output
			echo $myArray[$i]."<br>";//just added a little line break using PHP's weird concatenation syntax again
			echo "</h2>";

		}
	}
	
?>