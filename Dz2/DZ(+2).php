<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Задание 25 (+2)</title>
</head>
<style type="text/css">
html {height: 90%;}
body {margin: 2%;padding: 0;height: 100%;}
div#container{height: 100%;border: 1px solid;box-sizing:border-box; }
div#header{height: 20%; background:#139E0C;border: 1px solid;box-sizing:border-box;text-align: center;}
div#wrapper{height: 60%; }
div#menu1{width: 15%;height: 100%; float: left;background:#EB6810;  }
div#content{width: 85%;height: 100%; float: right; background:#B9CAFF;border: 1px solid;box-sizing:border-box;text-align: center;}
div#footer{height: 20%; background: #333; border: 1px solid;box-sizing:border-box;text-align: center;}
div#menu{ text-align: center; height: 20%; border: 1px solid;box-sizing:border-box;text-align: center;}
</style>
<body>
<div id="container">
<?php
$blocks=['header', 'content', 'footer'];  
$menu=['menu1','menu2','menu3','menu4','menu5',];
foreach ($blocks as $key => $value) {
	if ($value=='header') echo '<div id="header"> HEADER </div>';
	if ($value=='content') { echo '<div id="wrapper">
	 	<div id="content">CONTENT</div>';
		echo '<div id="menu1">';
		foreach ($menu as $key => $value) {
			if ($value=='menu1') echo '<div id="menu">menu1</div>';
			if ($value=='menu2') echo '<div id="menu">menu2</div>';
			if ($value=='menu3') echo '<div id="menu">menu3</div>';
			if ($value=='menu4') echo '<div id="menu">menu4</div>';
			if ($value=='menu5') echo '<div id="menu">menu5</div>';
		}
		echo '</div>';
		echo '</div>';
	}
	if ($value=='footer') echo '<div id="footer">FOOTER</div>';
	}
?>
</div>
</body>
</html>