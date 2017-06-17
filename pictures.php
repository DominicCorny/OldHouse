<!DOCTYPE html>
<html>
<head>
    <title>Pictures</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<ul>
    <li><a href="main.php">OldHouse</a></li>
    <li><a class="active" href="pictures.php">Bilder</a></li>
    <li><a href="chat.php">Stammtisch</a></li>
    <li><a href="noLinkSry">Gästebuch</a></li>
    <li style="float:right"><a href="about.php">About</a></li>
</ul>
<?php
$dirname = "images/";
$images = glob($dirname."*.jpg");

foreach($images as $image) {
    echo '<img src="' . $image . '" /><br />';
}
?>

</body>
</html>