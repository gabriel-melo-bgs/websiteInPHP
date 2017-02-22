<?php
	echo "<title>Why not add a title?!</title>"; 
	echo "<header>Let's put a <strong>header</strong> here too!</header>"; 
	//the h1 tag is all bold, by default. So, the strong tag above does not make any difference
	//when used in the middle of two h1 tags 

	$chordsInCMajor = array('C9' => "C E G B D", 'Dm7/9' => "D F A C E");
	$chordsInCMajor["Em7"] = "E G B D"; //this is how a new key-value pair is added to the array

	echo "chords array <br/>";
	foreach ($chordsInCMajor as $chord => $notes) {
		echo "$chord => $notes <br/>";	
	}

	$bunchOfNumbers = array(3.14159, 171, 666);
	$bunchOfNumbers[] = 6.023;
	$bunchOfNumbers[] = 9.8; //this will add the previous number to the end of the array,
	//regardless of knowing or not the index where the content would have to be added

	echo "<br/>numbers array <br/>";
	foreach ($bunchOfNumbers as $index => $content) {
		echo $bunchOfNumbers[$index]."<br/>";
	}
	

?>
