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
<p><strong>Какие языки программирования или разметки Вы знаете?</strong></p>
<div class="conteiner">
<form action="task13.php" method="POST" id="forms">
   <fieldset>
      <div class="pusto">
            <select name="vopros[]" multiple>
            <option disabled>Выберите языки!</option>
            <option value="html">html</option>
            <option value="css">css</option>
            <option value="JavaScript">JavaScript</option>
            <option value="php">php</option>
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
$result='';
$count=0;
$i=0;
if (!empty($_POST)) :
$answear=$_POST;
include 'buttons.php';
?>
<div class="pusto">
<?php
if (!empty($answear['vopros']))
$count=count($answear['vopros'])-1;
if (count($answear)>1) {
   foreach ($answear['vopros'] as $key => $value) {
      if ($value!='' && $value!='Ответить') 
         $result.=trim(strip_tags($value)); 
      if ($count>$i)
         $result.=' + ';
      $i++;
   }
echo "<strong>Вы молодец, ваши знания = ".$result."</strong>";
}
else echo '<strong>Иди учи! Если ничего не знаешь...</strong>';
?>
</div>
<?php endif ?>
</body>
</html>