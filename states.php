<?php
	$states="Mississippi Alabama Texas Massachusetts Kansas";
	$StateArray=explode(" ",$states);
	$statesList=[];
	echo "<b>The Original Array is: </b><br>";
	foreach ($StateArray as $key => $value) 
		print("StateArray[$key] = $value<br>");
	foreach ($StateArray as $value) 
		if (preg_match('/.*xas$/', $value)) 
			$statesList[0]=$value;

	foreach ($StateArray as $value) 
		if (preg_match('/^k.*s$/i', $value)) 
			$statesList[1]=$value;

	foreach ($StateArray as $value) 
		if (preg_match('/^M.*s$/', $value)) 
			$statesList[2]=$value;

	foreach ($StateArray as $value) 
		if (preg_match('/.*a$/', $value)) 
			$statesList[3]=$value;

	echo "<b>The resultant array is: </b><br>";
	foreach ($statesList as $key => $value) 
	{
		echo "StateList[$key]=$value<br>";
	}
?>
