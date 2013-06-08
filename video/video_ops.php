<!DOCTYPE html>
<html>
<head>
<title>Westy RPi</title>
<link rel="stylesheet" type="text/css" href="../styling/stylesheet.css">
</head>
<body>

<?php 

        function list_dir($dir)
        {
        $files = scandir($dir);

        echo '<form name="choice" action="video_play.php" method="post">';
        foreach($files as $file)
        {       
                if($file != '.' && $file != '..')
                {
                        echo '<input name="file" type="radio" value="'.$dir.'/'.$file.'" />'.$file.'<BR>'; 
                }
        }
        echo '<input type="submit" value="Submit"></form>';
                
        } 

?>
</div>

</body>
</html>
