<?php
$phone='';
if (!empty($_POST)) :
    $username = empty($_POST['username']) ? '' : trim(strip_tags($_POST['username']));
    $phone = empty($_POST['phone']) ? '' : trim(strip_tags($_POST['phone']));
    setcookie('username', $_POST['username'], time() + 3600, '/');
    ?>
<a href="hello.php">Переход на страницу Hello</a>
<?php endif; ?>
<html>
<head>
    <link href="../Style.css" rel="stylesheet">
</head>
<body>
<?php
if (empty($_POST['username'])) :?>
    <form action="" method="POST">
        <div id="prost"><label id="label-for">Имя</label><input type="text" name="username"></div>
        <input type="submit">
    </form>
<?php endif; ?>
</body>
</html>


