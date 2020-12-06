<!DOCTTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initual-scale=1.0">
	<title>usando php</title>
	<link rel="stylesheet" type="text/css" href="css/p2.css">
</head>
<body>
	<h1>estamos usando php y html</h1>
	<?php 
	for ($i=1; $i 1 ; $i+1) { 
		echo '<input type="text" name="txtc.$i.'" placeholder="casilla numero'.$i.' "><br'";
		# code...
	}
	?>
</body>
</html>
