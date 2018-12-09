<html>
<head>
<title>Server Time</title>
</head>
<body>
<h1 align="center"> Server Time </h1>
<hr>
<p> current time in the server </p>
<meta http-equiv="refresh" content="1">
<?php 
date_default_timezone_set('Asia/Calcutta');
echo date("H:i:sA");
?>
</body>
</html>