<?php
	echo "<title>Why not add a title?!</title>"; 
	echo "<header><h1>Let's put a <strong>header</strong> here too!</h1></header>"; //It's kind of a title for the page

	$myArray = array("1st thing", "2nd thing", "last thing"); //This is wrong!!! $myArray = new array("bla", "bla", "bla");
	//$myArray2 = 
	for($i = 0; $i<=10; $i++)
	{
		if($i<3){

			echo "<h2>"; //This will be concatenated with the following echo output
			echo $myArray[$i]."<br>";//just added a little line break using PHP's weird concatenation syntax again
			echo "</h2>";
		}
	}
	echo "<h3>This is how I get the length of an array: <br>
				  count(\$myArray): " . (count($myArray)) . "</h3>"; 
				  //Without \, echo is not able to output the string "count($myArray)"
				  //I was given an error when I tried outputting count($myArray) on line 18

?>
