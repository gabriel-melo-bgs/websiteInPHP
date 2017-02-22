<?php
	echo "<title>Why not add a title?!</title>"; 
	echo "<header><h1>Let's put a <strong>header</strong> here too!</h1></header>"; //It's kind of a title for the page

	$myArray = array("1st thing", "2nd thing", "last thing"); //The following is wrong $myArray = new array("bla", "bla", "bla");
	
	for($i = 0; $i<=10; $i++)
	{
		if($i<count($myArray)){ //I can use the array size instead

			echo "<h2>"; //This will be concatenated with the following echo output
			echo $myArray[$i]."<br>";//just added a little line break using PHP's weird concatenation syntax again
			echo "</h2>";
		}
	}

	$arr = array("one", "two", "three"); 
	//which is just like $arr = array(0 => "one", 1 => "two", 2 => "three");


	foreach ($arr as $key => $value) { //$arr is just the array in which I'm looping 
    	echo "Key: $key; Value: $value<br />\n";
	}
	echo "<br />\n";

	$chordHash = array('C9' => "C E G D", 'Dm7/9' => "D F A C E");

	foreach ($chordHash as $chord => $notes) {
		echo "Chord: $chord <br />Notes: $notes <br /><br />";
	}

?>
