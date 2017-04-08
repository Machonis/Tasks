<!-- 15.	Сделайте функцию, которая будет создавать селект. Функция должна принимать многомерный массив, например:
$arr = array(
    0=>array('value'=>'php', 'text'=>'Язык PHP'),
    1=>array('value'=>'html', 'text'=>'Язык HTML'),
); -->
<br/>
<?php 
$arr = array(
    0=>array('value'=>'php', 'text'=>'Язык PHP'),
    1=>array('value'=>'html', 'text'=>'Язык HTML'),
);
function select($arr) {
$result="<select name='vopros'>";
	foreach ($arr as $key => $value) {
		$value1=$value['value'];
		$text=$value['text'];
		$result.="<option value='$value1'>$text</option>";
	}
$result.="</select>";
return $result;
}
?>
<div class="pusto">
<p>
15.	Сделайте функцию, которая будет создавать селект. Функция должна принимать многомерный массив, например:
$arr = array(
    0=>array('value'=>'php', 'text'=>'Язык PHP'),
    1=>array('value'=>'html', 'text'=>'Язык HTML'),
);	
</p>
<?php	echo select($arr); ?>
</div>