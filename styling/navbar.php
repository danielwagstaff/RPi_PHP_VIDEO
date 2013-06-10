<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../styling/stylesheet.css">
</head>
<style>
.navbar
{
        position:absolute;
        left:0;
        top:170px;
        right:0;
        height:20px;
        margin:0px;
        border:0;
        padding:5px;
	background-color:#660000;
	opacity:0.65;
}

ul
{
	list-style-type:none;
	margin:0;
	padding:0;
	overflow:hidden;
}

li
{
	float:left;
}

li.right
{
	float:right;
}

a.navlink
{
	display:block;
	width:100px;
	color:#FFFF33;
	text-decoration:none;
}

a:hover
{
	text-decoration:underline overline;
}
</style>

<div class=navbar>
	<ul>
	<li><a class="navlink" href="../index.php">Home</a></li>
	<li><a class="navlink" href="../video/video.php">Video</a></li>
	<li class="right"><a class="navlink" href="about.asp">Login</a></li>
	</ul>
</div>

</body>
</html>
