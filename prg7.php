<!DOCTYPE html>
<html>
<head>
	<title>Digital clock</title> 
	<meta http-equiv="refresh" content="1"> 
	<style type="text/css">
		p
		{
			color: darkblue;
			border: 3px dashed red;
			margin: 5px 500px 500px 500px;
			padding: 5px;
			background-color: silver;
		}
	</style>
</head>
<body>
	<center>
		<b>NAME: S RAGHAV TEJAS</b><br>
		<b>USN: 1CR17CS119</b><br>
	</center>
	<?php
		date_default_timezone_set("Asia/kolkata");  
		echo "<center><p><b>";
		echo "Digital Clock :"."</br>";
		echo date("h : i : s A"); 
		echo "</b></p></center>";
	?>
</body>
</html>