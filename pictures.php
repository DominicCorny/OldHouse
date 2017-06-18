<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pictures</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
</head>
<body>
<nav id="navigation">
    <a class="menuElement">Menü</a>
    <ul>
        <li><a class="navElement" href="main.php">OldHouse</a></li>
        <li><a class="navElement" id="current" href="pictures.php">Bilder</a></li>
        <li><a class="navElement"href="chat.php">Stammtisch</a></li>
        <li><a class="navElement"href="visitors.php">Gästebuch</a></li>
        <li><a class="navElement" href="about.php">About</a></li>
    </ul>
</nav>
<?php
$dirname = "images/";
$images = glob($dirname."*.jpg");

foreach($images as $image) {
    echo '<img src="' . $image . '" /><br />';
}
?>

</body>
</html>