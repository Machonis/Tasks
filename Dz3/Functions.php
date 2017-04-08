<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ДЗ №3 'Funbctions'</title>
</head>
<body>
<pre>
<?php 
ini_set('default_charset','utf-8');
ini_set("display_errors", "1");
error_reporting(E_ALL);
/*1.	Сделайте функцию, которая возвращает куб числа. Число передается параметром.*/
/*$n=12;
$result='';
function sqr($n) {
return $n**=2;
}
$result=sqr($n);
echo $result;*/

/*2.	Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются ей первым и вторым параметром.*/
/*$n=12;
$n2=13;
$result='';
function sum($n,$n2) {
return $n+$n2;
}
$result=sum($n,$n2);
echo $result;*/

/*3.	Сделайте функцию, которая отнимает от первого числа второе и делит на третье.*/
/*$result='';
function prim($n,$n2,$n3) {
return ($n-$n2)/$n3;
}
$result=prim(20,5,3);
echo $result;*/

/*4.	Сделайте функцию, которая на вход принимает параметр в виде массива, разворачивает массив и возвращает результат.*/
/*$arr=[1,2,3,4,5,6,7,8,9];
$result=[];
function povorot($arr) {
	for ($i=count($arr); $i>0; $i--) {
	$var[]=$arr[$i-1];
	}
return $var;
}
$result=povorot($arr);
print_r($result);*/

/*5.	Сделайте функцию, которая принимает параметром число и проверяет четное оно или нет.*/
/*function chet($n) {
	echo ($n%2==0) ? "Чётное!": "Не чётное!";	
}
chet(4);*/

/*6.	Сделайте функцию, которая принимает параметром массив, а возвращает массив из четных элементов этого массива.*/
/*$arr=[1,2,3,4,5,6,7,8,9];
$result=[];
function chet($arr) {
$var=[];
	foreach ($arr as $key => $value) {	
		if ($value%2==0) $var[]=$value;
	}
	return $var;
}
$result=chet($arr);
print_r($result);*/

/*7.	Сделайте функцию, которая принимает параметром строку, а возвращает первые N символов этой строки (N – это второй параметр). Функция должна добавлять троеточие в конце возвращаемой строки.*/
/*$s='"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."';
$result='';
function char($s,$n) {
	$result='';
	for ($i=0; $i <= $n; $i++) { 
	$result.=$s{$i};	
	}
	return $result."...";
}
$result=char($s,55);
echo $result;*/

/*8.	Напишите функцию, которая в качестве параметра принимает массив, меняет у него ключи со значениями. Например $arr = array(‘php’ => ‘PHP’, ‘java’ => ‘Java’); А результатом будет array(‘PHP’ => ‘php’, ‘Java’ => ‘java’).*/
/*$arr=[‘php’ => ‘PHP’, ‘java’ => ‘Java’];
$result=[];
function oborot($arr) {
$result=[];
	foreach ($arr as $key => $value) {
	$result[$value]=$key; 
	}
	return $result;
}
$result=oborot($arr);
print_r($result);*/

/*9.	Напишите функцию, которая будет считать сумму цифр числа переданного пользователем в функцию. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6. Также функция должна сделать проверку на корректность введения данных пользователем (т.е. число больше нуля. не пустая строка, не равно null).*/
/*$n=1239;
$result='';
function sum($n) {
	if ($n>0 && $n!='' && $n!=null) {
	$result=0;
	$n=(string) $n;
		for ($i=0; $i <= strlen($n)-1; $i++) { 	
		$result+=(integer) $n{$i};
		}
		return $result;
	}
	else return "Неверный ввод! Введите число больше 0!";
}
$result=sum($n);
echo $result;*/

/*10.	Напишите функцию, которая возвращает число длиной $length ($length - это параметр функции, который отвечает за длину числа).*/
/*$n=4;
$result=0;
function dlina($n) {
	$result=0;
	if ($n>0) {
	$min="1";
	$max="9";
	for ($i=1; $i < $n ; $i++) { 
	$min.="0";
	$max.="9";
	}
	$result=rand ($min,$max);}
	return $result;
}
$result=dlina($n);
echo $result;*/

/*11.	На основании предыдущей задачи необходимо написать функцию, которая принимает два параметра: первый - это число, которое возвращает функция в задаче №3 ($x), второй параметр - это любое ваше число ($y). Функция должна подсчитать количество вхождений $y в числе $x. Например: цифра 5 в числе 442158755745 встречается 4 раза.*/
/*$n=10;
$y=2;
$x=0;
$result=0;
function dlina($n) {
	$result=0;
	if ($n>0) {
	$min="1";
	$max="9";
	for ($i=1; $i < $n ; $i++) { 
	$min.="0";
	$max.="9";
	}
	$result=rand ($min,$max);}
	return $result;
}
$x=dlina($n);
echo "x = $x <br/>";
echo "y = $y <br/>";
function vhod($x,$y) {
$count=0;
$x=(string) $x;
	for ($i=0; $i <= strlen($x)-1; $i++) { 
	if ($x{$i}==$y) $count++;
	}
	return $count;
}
$result=vhod($x,$y);
echo "Вхождений y в x = $result";*/

/*12.	Написать функцию, которая возвращает массив длиной $length, заполненный случайными числами (можно воспользоваться функцией rand).*/
/*$n=25;
$arr=0;
function massive($n) {
$arr=[];
	for ($i=0; $i <$n ; $i++) { 
	$arr[]=rand(1,100);
	}
	return $arr;
}
$arr=massive($n);
print_r($arr);*/

/*13.	Написать функцию, которая в качестве параметра принимает массив из задачи №4. Функция находит максимальное и минимальное значение массива и меняет их местами.*/
/*$n=5;
$result=0;
function massive($n) {
$arr=[];
	for ($i=0; $i <$n ; $i++) { 
	$arr[]=rand(1,100);
	}
	return $arr;
}
$result=massive($n);
print_r($result);
function MaxMin($arr) {
$min=$arr[0];
$max=$arr[0];
$keymax=0;
$keymin=0;
foreach ($arr as $key => $value) {
	if ($min>$value) {
	$min=$value;
	$keymin=$key;
	}	
	if ($max<$value) {
	$max=$value;
	$keymax=$key;
	}	
}
$arr[$keymin]=$max;
$arr[$keymax]=$min;	
return $arr;
}
$result=MaxMin($result);
print_r($result);*/

/*14.	Написать функцию, которая в качестве параметра принимает натуральное число n. Вычислить: 11 + 22 + .. + nn. Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел.*/
/*$n=10;
function sqr($n) {
	$result=0;
	for ($i=1; $i <= $n ; $i++) { 
    echo "$i*$i = ",$i**2,"<br/>";
	$result+=$i**2;
	}
echo "Сумма квадратов = ",$result;	
}
sqr($n);*/
?>	
<pre/>
</body>
</html>