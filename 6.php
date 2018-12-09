<html>
<head>
<title>Display count</title>
</head>
<body>
<?php
 $file=fopen("count.txt","r");
 $count=fscanf($file,"%d");
 fclose($file);
 $count[0]++;
 $file=fopen("count.txt","w");
 fprintf($file,"%d",$count[0]);
 fclose($file);
 echo "$count[0]";
?>
</body>
</html>
 