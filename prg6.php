<?php 
 $file = "count.txt"; 
 $count =0; 
 $count = strval(file_get_contents($file)); 
 $count = (int)$count;  
 file_put_contents($file, $count+1); 
 echo "<center><h1>Web Lab Program 6</h1><h2>Name: S Raghav Tejas<br>USN: 1CR17CS119</h2>";  
 echo "<center><h3>The Visitor's count = ".$count."</h3></count>"; 
?>

