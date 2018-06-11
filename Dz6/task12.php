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
<p><strong>Сколько вам лет?</strong></p>
<div class="conteiner">
<form action="task12.php" method="POST" id="forms">
   <fieldset>
      <div class="pusto">
            <select name="vopros">
            <option disabled>Выберите возраст</option>
            <option value="1">Мение 20</option>
            <option value="2">20-25</option>
            <option value="3">26-30</option>
            <option value="4">более 30</option>
            </select>
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
$answear=empty($_POST['vopros']) ? '' : trim(strip_tags($_POST['vopros']));
include 'buttons.php';
?>
<div class="pusto">
<?php
switch ($answear) {
   case 1:
      echo 'Вам мение 20 лет';
      break;

   case 2:
      echo 'Вам 20-25 лет';
      break;

   case 3:
      echo 'Вам 26-30 лет';
      break;

   case 4:
      echo 'Вам более 30 лет';
      break;
   
   default:
      echo 'Вы не выбрали ни один из пунктов. Сделайте свой выбор!';
      break;
}
?>
</div>
<?php endif ?>
</body>
</html>