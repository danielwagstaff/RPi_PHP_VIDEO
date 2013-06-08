<!DOCTYPE html>
<html>
<head>
<title>Westy RPi</title>
<link rel="stylesheet" type="text/css" href="../styling/stylesheet.css">
</head>
<body>

<?php
	include '../styling/top_banner.php';
	include '../styling/navbar.php';
	include 'video_ops.php';
?>

<div class="mainpage" style="overflow:auto">
<?php	
	$dir = "/mnt/USB";

	echo"<h1>Welcome to the video control page</h1>";	

	echo "<BR><h2>Choose a video:</h2>";
	list_dir($dir);	
?>
</div>

</body>
</html>
