<?php
$phone='';
if(!empty($_COOKIE['phone']))
    $phone = $_COOKIE['phone'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../Style.css" rel="stylesheet">
</head>
<body>
<form action="" method="GET">
    <div id="prost"><label id="label-for" for="name">Имя</label>
        <input type="text" name="name" id="name"></div>
    <div id="prost"><label id="label-for" for="surname">Фамилия</label>
        <input type="text" name="surname" id="surname"></div>
    <div id="prost"><label id="label-for" for="phone">Телефон</label>
        <input type="text" name="phone" id="phone" value="<?php echo $phone ?>"></div>
    <input type="submit">
</form>
</body>
</html>

