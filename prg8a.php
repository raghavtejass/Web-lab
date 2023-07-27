<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<style type="text/css">
		#x
		{
			width: 100%;
		}
		input
		{
			color: brown;
			background-color: yellow;
		}
	</style>
</head>
<body>
	<center>
		<b>Name: S Raghav Tejas</b><br>
		<b>USN: 1CR17CS119</b><br>
	<form method="POST">
		<table border="4">
			<caption>CALCULATOR</caption>
			<tr>
				<th>value 1:</th>
				<td><input type="text" name="a"></td>
			</tr>
			<tr>
				<th>value 2:</th>
				<td><input type="text" name="b"></td>
			</tr>
				<td colspan="2"><input id="x"type="submit" name="cal" value="CALCULATE"></td>
			</tr>
	</form>
	<?php
		if(isset($_POST['cal']))
		{
			$a = $_POST['a'];
			$b = $_POST['b'];
			if(is_numeric($a)&& is_numeric($b))
			{

				echo"<tr><th>Addition: </th><td>".($a+$b)."</td></tr>";
				echo"<tr><th>Substraction: </th><td>".($a-$b)."</td></tr>";
				echo"<tr><th>Muliplication: </th><td>".($a*$b)."</td></tr>";
				echo"<tr><th>Division: </th><td>".($a/$b)."</td></tr>";
			}
			else
			{
				echo "Invalid input";
			}
		echo "</table>";
	}
	?>
</body>
</html>