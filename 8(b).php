<html>
<head><title> Matrix Operation </title>
</head>
<body>
<h1 align="center"> Matrix Operations </h1>
<hr>
<?php
	$a=array(
				array(1,2,3),
				array(4,5,6),
				array(7,8,9));
	$b=array(
				array(2,2,2),
				array(2,2,2),
				array(2,2,2));
	echo("Matrix one element<br>");
	for($i=0;$i<3;$i++)
	{
	for($j=0;$j<3;$j++)
	echo " ".$a[$i][$j];
	echo "<br>";
	}
	echo("matrix two elements<br>");
	for($i=0;$i<3;$i++)
	{
	for($j=0;$j<3;$j++)
	echo " ".$b[$i][$j];
	echo "<br>";
	}
	echo("Transpose of Matrix one<br>");
	for($i=0;$i<3;$i++)
	{
	for($j=0;$j<3;$j++)
	echo " ".$a[$j][$i];
	echo "<br>";
	}
	echo("Transpose of Matrix two<br>");
	for($i=0;$i<3;$i++)
	{
	for($j=0;$j<3;$j++)
	echo " ".$b[$j][$i];
	echo "<br>";
	}
	echo("Addition of Matrix <br>");
	for($i=0;$i<3;$i++)
	{
	for($j=0;$j<3;$j++)
	echo " ".($a[$i][$j]+$b[$i][$j]);
	echo "<br>";
	}
	echo("Multiplication of matrix <br>");
	$c=array();
	for($i=0;$i<3;$i++)
	{
	for($j=0;$j<3;$j++)
	{
 	$c[$i][$j]=0;
	for($k=0;$k<3;$k++)
	$c[$i][$j]+=$a[$i][$k]*$b[$k][$j];
	}
	}
	for($i=0;$i<3;$i++)
	{
		for($j=0;$j<3;$j++)
		echo " ".$c[$i][$j];
	    echo"<br>";
	}
	?>
	</body>
	</html>
	