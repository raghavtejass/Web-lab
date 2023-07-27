<?php 
 	$file = "textfile.txt"; 
 	$count =0; 
 	$string1 = strval(file_get_contents($file)); 
 	$stringlength = strlen($string1);  	
 	$stringreverse = strrev($string1); 
 	file_put_contents($file, $string1." ".$stringlength." ".$stringreverse); 
 	echo "<center><h1>Web Lab Extra Program 6</h1><h2> 
 	Name: S Raghav Tejas <br> USN: 1CR17CS119</h2>"; 
 	echo "<center><h3>Original String  = ".$string1."<br> 
 	String Length = ".$stringlength."<br> 
 	String Reverse = ".$stringreverse."</h3></count>"; 
?> 
