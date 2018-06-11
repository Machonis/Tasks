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
<form action="task9.php" method="POST" id="forms">
   <fieldset>
      <div class="pusto">
         <label><input type="checkbox" name="html" value="HTML"> HTML </label>
          <label><input type="checkbox" name="CSS" value="CSS"> CSS </label>
         <label><input type="checkbox" name="PHP" value="PHP"> PHP </label>
         <label><input type="checkbox" name="JavaScript" value="JavaScript "> JavaScript </label>
      </div>
      <br/>
      <div class="pusto">
         <input type="submit" name="Ответ" value="Ответить">
      </div>
   </fieldset>
</form>
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
$count=count($answear)-2;
if (count($answear)>1) {
   foreach ($answear as $key => $value) {
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