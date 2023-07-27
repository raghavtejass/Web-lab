<!DOCTYPE html>
<html>
<head>
	<title>Date and ime</title> 
	<meta http-equiv="refresh" content="1">
	<style type="text/css">
		p{
			color: darkblue;
			border: 3px solid red;
			margin: 10px 500px 500px 500px;
			padding: 5px;
			background-color: silver;
			text-align-last: left;
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

		echo "<center><p>";
		echo "(Date)<br>";
		echo date("d/m/Y")."<br/>";
		echo date("d-m-Y")."<br/>";
		echo date("d.m.Y")."<br/>";
		echo date("d.M.Y/D")."<br/>";

		echo "(Time)<br>";
		echo date("h:i:s")."<br/>";
		echo date("M,d,Y h:i:s A")."<br/>";
		echo date("h:i a");

		echo "</p></center>";
	?>
</body>
</html>