<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ДЗ №5 'Functions for massive'</title>
</head>
<body>
<pre>
<?php 
ini_set('default_charset','utf-8');
ini_set("display_errors", "1");
error_reporting(E_ALL);

/*На count и range
1. Создайте массив, заполненный числами от 1 до 100.
*/
$a = range(0,100);
print_r($a);

/*2. Дан массив $arr. Подсчитайте количество элементов этого массива.*/
$arr=[1,8,6,4,3,2];
$result=count($arr);
echo $result;

/*3. Дан массив $arr. Выведите на экран первый и последний элемент данного массива.*/
$arr=[1,8,6,4,3,2];
reset($arr);
echo current($arr),"</br>";
end($arr);
echo current($arr);

/*На array_sum и array_product
4. Дан массив $arr. С помощью функций array_sum и count найдите среднее арифметическое элементов данного массива.*/
$arr=[1,8,6,4,3,2];
echo array_sum($arr)/count($arr);

/*5. Создайте массив, заполненный числами от 1 до 300. Найдите произведение элементов данного массива.*/
$a = range(1,300);
echo array_product($a);

/*На array_merge и array_slice
6. Даны два массива: первый с элементами '1', '2', '3', второй с элементами 'a', 'b', 'c'. Сделайте из них массив с элементами '1', '2', '3', 'a', 'b', 'c'.*/
$arr1=['1', '2', '3',];
$arr2=['a', 'b', 'c'];
print_r(array_merge($arr1,$arr2));

/*7. Даны массив с элементами '1', '2', '3', '4', '5'. С помощью функции array_slice создайте массив $b с элементами '2', '3', '4'.*/
$arr=['1', '2', '3', '4', '5'];
$b=array_slice($arr,1,3);
print_r($b);

/*На array_keys, array_values, array_combine
8. Дан массив 'green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'. Запишите в массив $key английские названия цветов, а в $values – русские.*/
$arr=['green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'];
$key=array_keys($arr);
$value=array_values($arr);
print_r($key);
print_r($value);

/*9. Даны два массива: 'green', 'blue', 'red' и ''зеленый', 'голубой', 'красный'. Создайте с их помощью массив 'green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'. Используйте функцию array_combine.*/
$key=['green', 'blue', 'red'];
$value=['зеленый', 'голубой', 'красный'];
$arr=array_combine($key,$value);
print_r($arr);

/*На array_flip, array_count_values, array_reverse, array_unique
10. Дан массив 'green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'. Поменяйте местами ключи и значения.*/
$arr=['green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'];
$arr=array_flip($arr);
print_r($arr);

/*11. Дан массив с элементами '1', '2', '3', '4', '5'. Создайте массив с элементами '5', '4', '3', '2', '1'.*/
$arr=['1', '2', '3', '4', '5'];
$arr=array_reverse($arr);
print_r($arr);

/*12. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Удалите из него повторяющиеся элементы.*/
$arr=['a', 'b', 'c', 'b', 'a'];
$arr=array_unique($arr);
print_r($arr);

/*13. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Подсчитайте сколько раз встречается каждая из букв.*/
$arr=['a', 'b', 'c', 'b', 'a'];
$count=array_count_values($arr);
print_r($count);

/*На сортировку, shuffle и array_rand
14. Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'. Попробуйте на нем различные типы сортировок.*/
$arr=['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
ksort($arr);
print_r($arr);
asort($arr);
print_r($arr);
sort($arr);
print_r($arr);

/*15. Дан массив $arr. Перемешайте его элементы в случайном порядке.*/
$arr=[1,2,4,5,6,7];
shuffle($arr);
print_r($arr);

/*16. Дан массив с элементами '1', '2', '3', '4', '5'. Выведите на экран случайный элемент данного масссива.*/
$arr=['1', '2', '3', '4', '5'];
$result=array_rand($arr);
echo $arr[$result];

/*На array_map и array_walk
17. Дан массив с элементами '1', '2', '3', '4', '5'. Создайте новый массив, в котором будут лежать квадратные корни данных элементов.*/
$arr=['1', '2', '3', '4', '5'];
function koren($n)
{
    return sqrt($n);
}
$b = array_map("koren", $arr);
print_r($b);

/*18. Дан массив с элементами '<b>php</b>', '<i>html</i>'. Создайте новый массив, в котором из элементов будут удалены теги.*/
$arr=['<b>php</b>', '<i>html</i>'];
$b=[];
function del ($value) {
$s='';	
return $s=strip_tags($value);
}
$b=array_map("del",$arr);
print_r($b);

/*19. Дан массив с элементами ' a ', ' b ', ' с '. Создайте новый массив, в котором будут данные элементы без концевых пробелов.*/
$arr=[' a ', ' b ', ' c '];
$b=[];
function dele ($value) {
$s='';	
return $s=trim($value);
}
$b=array_map("dele",$arr);
var_dump($b);

/*На array_chunk и array_pad
20. Дан массив с элементами '1', '2', '3'. Сделайте из него массив с элементами '1', '2', '3', '0', '0', '0'.*/
$arr=['1', '2', '3'];
$arr=array_pad($arr,6,'0');
print_r($arr);

/*21. Создайте массив, заполненный целыми числами от 1 до 20. С помощью функции array_chunk разбейте этот массив на 5 подмассивов ('1', '2', '3', '4'; '5', '6', '7', '8' и т.д.).*/
$arr=range(1,20);
$arr=array_chunk($arr,4);
print_r($arr);
?>	
<pre/>
</body>
</html>