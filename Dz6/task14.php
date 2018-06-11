<?php
/*14.	Сделайте функцию, которая создаёт html элемент. Функция должна иметь следующие параметры: type, name, value, placeholder. В функцию на вход может попасть только input или textarea. В любом другом случае необходимо вывести предупреждение об ошибке.*/
function html ($html) {
	if ($html=='input' || $html=='textarea') 
	{
	$name='html';
	$type='text';
	$value='';
	$placeholder='Какой то текст';
	$result='';
		if ($html=='input') 
		{
			$result="<input type='$type' name='$name' value='$value' placeholder='$placeholder'></input>";
		}
		if ($html=='textarea')
		{
			$result;
		}
	}
	else echo 'Не верный ввод! В функцию на вход может попасть только input или textarea.';
return $result;
} 
?>
<br/>
<div class="pusto">
<p>
14.	Сделайте функцию, которая создаёт html элемент. Функция должна иметь следующие параметры: type, name, value, placeholder. В функцию на вход может попасть только input или textarea. В любом другом случае необходимо вывести предупреждение об ошибке.	
</p>
<?php	echo html('input'); ?>
</div>