<!DOCTYPE html>
<html lang="en">
<head>
	<link href="style.css" rel="stylesheet">
	<meta charset="utf-8">
	<title>Work with forms</title>
</head>
<body>
<p><strong>С помощью кнопок выберите интересующие Вас задание:)</strong></p>
<?php
$button=0;
include 'buttons.php';
if (!empty($_GET)) {
    $button=empty($_GET['button']) ? '' : trim(strip_tags($_GET['button']));
}
?>
<?php
switch ($button) { 
	case ($button=="Задание 1-8"):
		include  'task1-8.php';
		break;

	case ($button=="Задание 9"):
		include  'task9.php';
		break;

	case ($button=="Задание 10"):
		include  'task10.php';
		break;

	case ($button=="Задание 11"):
		include  'task11.php';
		break;

	case ($button=="Задание 12"):
		include  'task12.php';
		break;

		case ($button=="Задание 13"):
		include  'task13.php';
		break;

		case ($button=="Задание 14"):
		include  'task14.php';
		break;

		case ($button=="Задание 15"):
		include  'task15.php';
		break;
	
	default:
		break;
}
?>
</body>
</html>