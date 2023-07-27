<!DOCTYPE html> 
<html>
<head><title>Selection Sort</title></head>
<body>
	<h1><b>NAME: S Raghav Tejas<br>USN: 1CR17CS119</b></h1>
    <br><br>        
	<table border="1px">
		<caption><b>SELECTION SORT</b></caption>
		<tr>
			<th colspan='3'>Before Sorting</th>
		</tr>
		<tr>
			<th>USN</th>
			<th>Name</th>
			<th>Batch</th>
		</tr>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "weblab3";
	$conn=mysqli_connect($servername, $username, $password, $dbname);
	if($conn->connect_error)
		die("Connection Error : ".$conn->connect_error);
	else
		echo "Connection Successful!!!!<br><br>";

	$sql = "Select * from student";
	$result = $conn->query($sql);

	$a=[];
	$b=[];
	$c=[];
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "<tr><td>".$row["usn"]."</td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["batch"]."</td></tr>";
			array_push($a, $row["usn"]);
			
		}
	}
	else
	{
		echo "Table is empty";
	}
	
	$n = count($a);
	for($i=0;$i<($n-1);$i++)
	{
		$pos = $i;
		for($j=$i+1;$j<$n;$j++)	
		{
			if($a[$pos]>$a[$j])
				$pos=$j;
		}
		if($pos!=$i)
		{
			$temp = $a[$i];
			$a[$i] = $a[$pos];
			$a[$pos] = $temp;

		}
	}

$result = $conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		for($i=0;$i<$n;$i++)
		{
			if($row["usn"] == $a[$i])
			{
				$b[$i] = $row["name"];
				$c[$i] = $row["batch"];
			}
		}
	}
}		
echo "<tr><th colspan='3'>After Sorting</th></tr><tr><th>USN</th><th>Name</th><th>Batch</th></tr>";
for($i=0;$i<$n;$i++)
{
	echo "<tr><td>".$a[$i]."</td>";
	echo "<td>".$b[$i]."</td>";
	echo "<td>".$c[$i]."</td></tr>";
	
	
}
echo "</table></body></html>";

$conn->close();



?>