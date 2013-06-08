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
        include 'video_vars.php';
?>      
        
<div class="mainpage">

<a class="small" href="javascript:javascript:history.go(-1)">Go Back</a><BR>

<?php 
	$toplay = $_POST["file"];

	if($toplay == "")
	{
		echo "Please select something to play";
	}
	else
	{
		if(!is_dir("$toplay"))
		{
			$toplay = "\"" . $toplay . "\""; //Add "" to filepath for cmd later
			echo "Playing " . $toplay . "<BR>";

			if( !posix_mkfifo("$pipe", 0777) && !file_exists("$pipe") )
			{
				echo "Cannot create command pipe - cannot play";
			}
			else
			{
				exec("pgrep omxplayer", $pids);
				if(empty($pids)) 
				{
					popen("omxplayer $toplay -o hdmi < $pipe &", "r");
					shell_exec("echo . > $pipe");

					echo '<BR>	<a href="control/video_pause.php" target="_blank">Pause</a>
							<a href="control/video_stop.php" target="_blank">Stop</a>';
				}
				else
				{
					echo 'Unable to play - player instance already exists';
				}
			}
		}
		else
		{
			list_dir($toplay);
		}
	}

?>
</div>

</body>
</html>
