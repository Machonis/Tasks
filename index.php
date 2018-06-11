<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link href="../Style.css" rel="stylesheet">
</head>
<body>
<?php
if(!empty($_POST['name-cookie']) || !empty($_POST['text-cookie'])) {
    if(isset($_COOKIE[$_POST['name-cookie']])) echo '<span id="for_span"><strong>Такие куки уже существуют!</strong></span>';
    if(!isset($_COOKIE[$_POST['name-cookie']])) {
        setcookie($_POST['name-cookie'], $_POST['text-cookie']);
        echo 'Куки успешно сохранены!';
    }
}
if(!empty($_POST['destroy-name']) || !empty($_POST['destroy-text'])) {
    if(!isset($_COOKIE[$_POST['destroy-name']])) echo '<span id="for_span"><strong>Вы пытаетесь удалить несуществующие куки!</strong></span>';
    if(isset($_COOKIE[$_POST['destroy-name']])) {
        setcookie($_POST['destroy-name'], $_POST['destroy-text'], time());
        echo 'Куки успешно удалены!';
    }
}
if(!empty($_POST['old-name']) || !empty($_REQUEST['new-text'])) {
    if(!isset($_COOKIE[$_POST['old-name']])) echo '<span id="for_span"><strong>Вы пытаетесь редактировать несуществующие куки!</strong></span>';
    if(isset($_COOKIE[$_POST['old-name']])) {
        setcookie($_REQUEST['old-name'], $_POST['new-text']);
        echo 'Куки успешно изменены!';
        echo "<pre>";
        var_dump($_COOKIE);
        echo "<pre/>";
    }
}
?>
<h1>Оболочка над cookie</h1>
<div id="prost">
<form action="" method="POST">
    <p><strong>Сохранение куки:</strong></p>
    <div id="container">
        <div id="prost"><label id="label-for" for="name-cookie">Введите имя куки</label>
        <input type="text" name="name-cookie" id="name-cookie"></div>
        <div id="prost"><label id="label-for">Введите значение куки</label>
        <input type="text" name="text-cookie" id="text-cookie"></div>
        <div id="prost"><input type="submit" value="Сохранить куки"></div> <br><br>
    </div>

    <p><strong>Удаление куки:</strong></p>
    <div id="container">
        <div id="prost"><label id="label-for" for="destroy-name">Введите имя куки, которое нужно удалить</label>
        <input type="text" name="destroy-name" id="destroy-name"></div>
        <div id="prost"><label id="label-for" for="destroy-text">Введите значение куки, которое нужно удалить</label>
        <input type="text" name="destroy-text" id="destroy-text"></div>
        <div id="prost"><input type="submit" value="Удалить сохраненные куки"></div> <br><br>
    </div>

    <p><strong>Редактирование куки:</strong></p>
    <div id="container">
        <div id="prost"><label id="label-for" for="old-name">Введите имя куки, значение которой хотите изменить</label>
        <input type="text" name="old-name" id="old-name"></div>
        <div id="prost"><label id="label-for" for="new-text">Введите новое значение куки</label>
        <input type="text" name="new-text" id="new-text"></div>
        <div id="prost"><input type="submit" value="Редактировать куки"></div> <br><br>
    </div>
</form>
</div>
</body>
</html>
