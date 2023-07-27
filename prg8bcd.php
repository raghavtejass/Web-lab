<?php
	$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
	$b=array(array(3,1,2),array(6,4,5),array(9,7,8));

	$m=count($a);
	$n=count($a[1]);
	$p=count($b);
	$q=count($b[1]);

	echo "Matrix A is: <br>";
	for ($r=0; $r < $m; $r++) 
	{ 
		for ($c=0; $c < $n; $c++) 
		{ 
			echo " ".$a[$r][$c];
		}
		echo "<br>";
	}
	echo "Matrix B is: <br>";
	for ($r=0; $r < $p; $r++) 
	{ 
		for ($c=0; $c < $q; $c++) 
		{ 
			echo " ".$b[$r][$c];
		}
		echo "<br>";
	}
	echo "Transpose of Matrix - A: <br>";
	for ($r=0; $r < $m; $r++) 
	{ 
		for ($c=0; $c < $n; $c++) 
		{ 
			echo " ".$a[$c][$r];
		}
		echo "<br>";
	}
	echo "Transpose of Matrix - B: <br>";
	for ($r=0; $r < $p; $r++) 
	{ 
		for ($c=0; $c < $q; $c++) 
		{ 
			echo " ".$b[$c][$r];
		}
		echo "<br>";
	}
	if($m==$p && $n==$q)
	{
	echo "Addition of 2 Matrices: <br>";
	for ($r=0; $r < $m; $r++) 
	{ 
		for ($c=0; $c < $p; $c++) 
		{ 
			echo $a[$r][$c]+$b[$r][$c]." ";
		}
		echo "<br>";
	}
	}	
	if($n==$p)
	{
		echo "Matrix Multiplication: <br>";
		$mul=array();
		for ($r=0; $r < $m; $r++) 
		{ 
			for ($c=0; $c < $q; $c++) 
			{ 
				$mul[$r][$c]=0;
				for ($k=0; $k < $n; $k++) 
				{				 
					$mul[$r][$c]+=$a[$r][$k]*$b[$k][$c];
				}
			}
		}
	}
	for ($r=0; $r < $m; $r++) 
	{ 
		for ($c=0; $c < $q; $c++) 
		{ 
			echo $mul[$r][$c]." ";
		}
		echo "<br>";
	}
?>


