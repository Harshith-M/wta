<?php
$con=mysqli_connect("localhost","root","","student")or die("can't connect".mysqli_error());
$res=mysqli_query($con,"select * from studentinfo");
echo"<------------before sorting-----------------<br><br>";
echo"<table border=1><tr><th>USN</th><th>Name</th><th>Address</th></tr>";
$a=array();
while($row=mysqli_fetch_row($res))
{
	echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
	array_push($a,$row[0]);
	
}
echo"</table>";
mysqli_free_result($res);
$n=count($a);
for($i=0;$i<($n-1);$i++)
{
	$pos=$i;
	for($j=$i;$j<$n;$j++)
	{
	if($a[$pos]>$a[$j])
		$pos=$j;
	}
	if($pos!=$i)
	{
	$temp=$a[$i];
	$a[$i]=$a[$pos];
	$a[$pos]=$temp;
	}
}
$c=array();
$d=array();
$res1=mysqli_query($con,"select * from studentinfo");

while($row=mysqli_fetch_row($res1))
{
	for($i=0;$i<$n;$i++)
	{
		if($row[0]==$a[$i])
		{
			$c[$i]=$row[1];
			$d[$i]=$row[2];
		}
	}
}
echo"<br><br>----------after sorting---------<br><br>";
echo"<table border=1><tr><th>usn</th><th>name</th><th>address</th></tr>";
for($i=0;$i<$n;$i++)
	echo"<tr><td>$a[$i]</td><td>$c[$i]</td><td>$d[$i]</td></tr>";
echo"</table>";
mysqli_free_result($res1);
mysqli_close($con);
?>