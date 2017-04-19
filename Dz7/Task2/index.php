<?php
$phone='';
if (!empty($_POST['phone'])) :
    $phone = empty($_POST['phone']) ? '' : trim(strip_tags($_POST['phone']));
    setcookie('phone', $_POST['phone'], time() + 3600, '/');
    ?>
    <a href="phone.php">Переход на страницу phone</a>
<?php endif; ?>
<html>
<head>
    <link href="../Style.css" rel="stylesheet">
</head>
<body>
<?php
if (empty($_POST['phone'])) :?>
    <form action="" method="POST">
        <div id="prost"><label id="label-for">Телефон<input type="text" name="phone" value=""></label></div>
        <input type="submit">
    </form>
<?php endif; ?>
</body>
</html>