<!DOCTYPE html>
<html lang="en">
<head>
   <link href="style.css" rel="stylesheet">
   <meta charset="utf-8">
   <title>Work with forms</title>
</head>
<body>
<?php if (empty($_POST)) : ?>
<br/>
<p><strong>Знаете ли вы PHP?</strong></p>
<div class="conteiner">
<form action="task10.php" method="POST" id="forms">
   <fieldset>
      <div class="pusto">
         <div id="radio">
            <label><input type="radio" name="Vopros" value="1">
            Да! :)</label>
            <label><input type="radio" name="Vopros" value="0" checked>
            Нет :(</label>
         </div>
         <br/>
         <br/>
         <div class="pusto">
            <input type="submit" name="Ответ" value="Ответить">
         </div>
      </div>
<?php endif ?>
<?php
$answear='';
if (!empty($_POST)) :
$answear=empty($_POST['Vopros']) ? '' : trim(strip_tags($_POST['Vopros']));
include 'buttons.php';
?>
<div class="pusto">
<?php
if ($answear==1) echo "Вы молодец! :)";
else echo "Вы не молодец! Иди учи! :)";
?>
</div>
<?php endif ?>
</body>
</html>