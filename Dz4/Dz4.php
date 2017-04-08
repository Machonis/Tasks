<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ДЗ №4 'Funbctions'</title>
	<style type="text/css">
	html {height: 80%;}
	body {margin: 2%;padding: 0;height: 100%;}
	div#conteiner {
		width: 100%; 
		height: 100%;  
		font-style: cursive;
	}	

	div#mincon {
		float: left;	
		width: 100%;
	}

	div#green1 { 
		height: 100%; 
		background:#0A1BBE; 
		float: left;
		border: 2px outset #9FC1F0;
		box-sizing:border-box;
		font-style: oblique;
	}	

	div#green2 { 
		height: 100%; 
		background:#0A1BBE; 
		float: left;
		border: 2px outset #9FC1F0;
		box-sizing:border-box;
		font-style: oblique;
	}	

	div#main {
		height: 100%; 
		background:#10AFB5; 
		float: left;
		border: 2px outset #9FC1F0;;
		box-sizing:border-box;
		font-style: oblique;
	}	
	</style>
</head>
<body>
<div id='conteiner'>
<div id='mincon' style="font-style: italic; color: #F47611; font-size: 1.5em "><strong><center>Крутая табличка:)</center></strong></div>
<?php 
ini_set('default_charset','utf-8');
ini_set("display_errors", "1");
error_reporting(E_ALL);

/*1. Дан массив с произвольными числами. Сделайте так, чтобы элемент
повторился в массиве количество раз, соответствующее его числу.
Пример: array(1, 3, 2, 4)​ превратится в array(1, 3, 3, 3, 2, 2, 4, 4, 4, 4)​.*/
/*$arr=[1, 3, 2, 4];
$result=[];
foreach ($arr as $key => $value) {
	for ($i=0; $i < $value; $i++) { 
	$result[]=$value;	
	}
}
print_r ($result);*/

/*2. Дан массив с произвольными целыми числами. Сделайте так, чтобы первый элемент стал ключом второго элемента, третий элемент - ключом четвертого и так далее. Пример: array(1, 2, 3, 4, 5, 6)превратится в array(1=>2, 3=>4, 5=>6)​.*/
/*$arr=[1, 2, 3, 4, 5, 6]; 
$result=[];
foreach ($arr as $key => $value) {
	if ($key%2==0) $result[$key+1]=$arr[$value];  
}
print_r($result);*/

/*3. Дана строка. Удалите из этой строки четные символы.*/
/*$s='abcdef';
$s1='';
$var=strlen($s);
for ($i=0; $i < $var; $i+=2) { 
$s1.=$s{$i};	
}
echo $s1;*/

/*4. Дана строка. Поменяйте ее первый символ на второй и наоборот, третий на четвертый и наоборот, пятый на шестой и наоборот и так далее. То есть из строки '12345678'​ нужно сделать '21436587'​.*/
/*$s='12345678';
$var=strlen($s);
$boofer='';
for ($i=0; $i < $var; $i+=2) { 
	$boofer=$s{$i};
	$s{$i}=$s{$i+1};
	$s{$i+1}=$boofer;	
}
echo $s;*/

/*5. Напишите функцию, которая подсчитывает количество всех значений массива. Функция должна учитывать вложенность массивов. (функцией array_count_values пользоваться нельзя).*/
/*$arr=[1=>[2,3],4=>[5,6]];
$result=0;
function countmass($arr) {
$result=0;	
$type;
	foreach ($arr as $key => $value) {
	$type=gettype($value);
	$result++;
		if ($type=='array') {
			foreach ($value as $key1 => $value1) {
			$result++;	
			}
		}	
	}
	return $result;
}
$result=countmass($arr);
echo $result;*/

/*6. Напишите функцию, которой в параметре передается передается массив из случайных чисел. Функция возвращает массив из уникальных (не повторяющихся) значений (аналог функции array_unique).*/
/*$arr=[];
$n=rand(1,10);
for ($i=0 ; $i < $n ; $i++ ) { 
$arr[$i]=rand(1,10);	
}
print_r($arr);
$result=[];
function unique($arr) {
	$result=[];
	$bool=false;
	foreach ($arr as $key => $value) {
		$bool=false;
		for ($i=0; $i <= count($result)-1; $i++) { 
			if ($value==$result[$i]) {$bool=true; continue;}
		}
		if ($bool==false) $result[]=$value;
	}
	return $result;
}
$result=unique($arr);
print_r($result);*/

/*7.Напишите функцию, которая будет противоположной array_unique, т.е. будет оставлять дубликаты, но удалять не повторяющиеся значения.*/
/*$arr=[];
$n=rand(1,10);
for ($i=0 ; $i < $n ; $i++ ) { 
$arr[$i]=rand(1,10);	
}
print_r($arr);
$result=[];
function unique($arr) {
	$result=[];
	$count=count($arr)-1;
	$x=0;
	foreach ($arr as $key => $value) {
		$x=0;
		for ($i=0; $i <= $count; $i++) { 
			if ($value==$arr[$i]) $x++; 
		}
		if ($x>1) $result[]=$value;
	}
	return $result;
}
$result=unique($arr);
print_r($result);*/

/*8. Напишите функцию, которой передается фамилия имя и отчество, а функция возвращает фамилию и инициалы. Например, передаем Ivanov Ivan Ivanovich и нам выводит: Ivanov I. I.*/
/*function ini($s,$s1,$s2) {
$result=$s.' '.$s1{0}.'. '.$s2{0}.'. ';	
return $result;
}
$result=ini('Ivanov','Ivan','Ivanovich');
echo $result;*/

/*(+1) 9. Таблица умножения. Напишите функцию, которая принимает на вход два параметра: количество строк и количество колонок. Функция возвращает​ (не выводит на экран!) таблицу умножения вида http://joxi.ru/brR577kiJJNRXA. Можно использовать table или div теги html. Цвет перемножаемых колонок и строк можете задать отдельным третьим параметром в виде hex-кода цвета.*/
/*$col=7;
$row=15;
$result='';
function table($col,$row) {
	$width=100/$col;
	$height=100/$row;
	$result='';
	for ($j=1; $j<=$row; $j++) {
		$result.="<div id='mincon' style=' height:" .$height."%;'>";
		$result.="<div id='green1' style=' width:" .$width."%;'><strong><center>$j</center></strong></div>";
	for ($i=1; $i <= $col; $i++) { 	
		if ($j==1 && $i>=2)
		$result.="<div id='green2' style=' width:" .$width."%;'><strong><center>$i</center></strong></div>";
		if ($j>1 && $i>=2)
		$result.="<div id='main' style=' width:" .$width."%;'><strong><center>".$j*$i."</center></strong></div>";
		}
		$result.="</div>";
	}
	return $result;
}
$result=table($col,$row);
echo $result;*/

/*10. (+1) Написать рекурсивную функцию, которая на вход получает число и вычисляет и возвращает​ значение факториала этого числа.*/
/*$n=6;
$result=0;
function factorial($n) {
static $result=1;	
	if ($n>0) {
	$result*=$n;
	factorial($n-1);
	}
return $result;
}
$result=factorial($n);
echo $result;*/

/*11.(+1) Написать функцию (рекурсивную либо обычную - по желанию), которая принимает на вход параметр (например, $n) и вычисляет число Фибоначчи до предела $n. Результат вычисления возвращается этой же функцией.*/
/*$n=6;
$result=0;
function fibon($n) {
static $arr=[1,1];	
static $count=0;
	if ($count<$n-2) {
		$arr[$count+2]=$arr[$count]+$arr[$count+1];
		$count++;
		fibon($n);
	}
	return $arr;
}
$result=fibon($n);
print_r($result);*/

/*12.(+1) Напишите рекурсивную функцию, принимающую на вход натуральное число $n. Функция возвращает строку из всех чисел от 1 до $n либо от $n до 1. За порядок сортировки должен отвечать дополнительный параметр функции - $order, который может принимать значение ‘desc’ (убывающий) или ‘asc’ (возрастающий) и по-умолчанию должен быть равен ‘desc’.*/
/*$n=6;
$order='desc';
$result='';
function chisla($n,$order) {	
static $s='';	
static $count=1;
	if ($order=='desc') {
		if ($n>0) {	
    	$s.=$n.' ';
    	chisla($n-1,$order);
		}
	}
	if ($order=='asc') {
		if ($count<=$n) {
		$s.=$count.' ';	
		$count++;
		chisla($n,$order);
		}
	}	
	return $s;
}
$result=chisla($n,$order);
echo $result;*/

?>	
</div>
</body>
</html>