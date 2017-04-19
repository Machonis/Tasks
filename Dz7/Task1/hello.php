<?php
	if (!empty($_COOKIE['username'])) {
        echo 'Привет '. $_COOKIE['username'];
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<br/>
<a href="index.php">Переход на страницу index</a>
</body>
</html>