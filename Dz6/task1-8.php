<!DOCTYPE html>
<html lang="en">
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>
<?php if (empty($_POST)) : ?>
<div id=conteiner>
<form action="task1-8.php" method="POST" id="forms">
	<div id="date">    
   		<div id="in"><strong>Date1</strong><input type="text" id="input" name='date1' value=""><div id="inputs"><input type="submit" " value="GO"></div></div>
         <div id="in"><strong>Date2</strong><input type="text" id="input" name='date2' value=""></div>
	</div>   
   <div id="radio">
         <label><input type="radio" name="format" value="Y-m-d" checked>
         Y-m-d </label>
         <label><input type="radio" name="format" value="d-m-Y ">
         d-m-Y</label>
   </div>
</form>
</div>	
<?php endif ?>
<?php
$zad3='';
$date1='';
$date2='';
$format='';
$t=0;
$t2=0;
$week = array('ВС', 'ПН', 'ВТ', 'СР','ЧТ', 'ПТ', 'СБ');
$timestamp=0;
if (!empty($_POST)) :
$date1=empty($_POST['date1']) ? '' : trim(strip_tags($_POST['date1'])); 
$format=empty($_POST['format']) ? '' : trim(strip_tags($_POST['format']));?>
   <div id="pole">
   <?php
   include 'buttons.php';
   $arr=[];
   $arr2=[];
   if (!empty($date1)) {
      //if (preg_match("/[0-9]{4}[-.\/](0[1-9]|1[012])[-.\/](0[1-9]|1[0-9]|2[0-9]|3[01])/",$date1)) {
         if ((bool)strtotime($date1)==true) {
         $arr=preg_split('/[-.\/]/',$date1);
         $t=date("t",mktime(0,0,0,$arr[1],1,$arr[0]));
            if (($arr[0]<2038 && $arr[0]>1900) && ($arr[1]>0 && $arr[1]<=12) && ($arr[2]>0 && $arr[2]<=$t)) {
echo "<strong>Введённая Вами дата Date 1 = $date1</strong><br/><br/>";

/*1.Пользователь вводит число, а скрипт определяет високосный ли год. Сделать проверку на формат и количество введенных значений. Если есть ошибка - уведомить об этом пользователя.*/
echo (date("L",mktime(0,0,0,$arr[1],$arr[2],$arr[0]))) ? "<strong>"."1.<em> Пользователь вводит число, а скрипт определяет високосный ли год. Сделать проверку на формат и количество введенных значений. Если есть ошибка - уведомить об этом пользователя.</em><br/> Задание 1: Год Date 1 высокосный :)"."</strong>"."<br/><br/>" : "<strong>"."1.<em>Пользователь вводит число, а скрипт определяет високосный ли год. Сделать проверку на формат и количество введенных значений. Если есть ошибка - уведомить об этом пользователя.</em><br/>Задание 1: Год Date 1 не высокосный :)"."</strong>"."<br/><br/>";

/*3.В поле вводится дата. Прибавьте к этой дате 1 год 2 месяца и 3 дня. Отнимите от этой даты 5 дней. Результат преобразуйте ее в выбранный формат и отобразите на экране.*/
$zad3=date_create($date1);
date_add($zad3,date_interval_create_from_date_string('1 year + 2 months + 3 days'));
date_sub($zad3,date_interval_create_from_date_string('5 days'));
echo "<strong>3.<em> В поле вводится дата. Прибавьте к этой дате 1 год 2 месяца и 3 дня. Отнимите от этой даты 5 дней. Результат преобразуйте ее в выбранный формат и отобразите на экране.</em><br/>Задание 3: ",date_format($zad3, $format),"</strong><br/><br/>";

/*4. С помощью адресной строки передайте GET-параметр date, который хранит год (4 числа). Посчитайте сколько воскресений в введенном году приходится на первое число месяца.*/
for ($i=1, $count=0; $i<12; $i++) {
   if (date('w',mktime(0,0,0,$i,1,$arr[0]))==0) {
      $count++;
   }
}
echo "<strong><em>",'4. С помощью адресной строки передайте GET-параметр date, который хранит год (4 числа). Посчитайте сколько воскресений в введенном году приходится на первое число месяца.',"</em><br/>Задание 4: Количество воскресений попадающих на 1е число месяца в этом году = $count</strong><br/><br/>";

/*5. С помощью адресной строки передайте GET-параметр date, который хранит год (4 числа). Найдите все пятницы 13-е в этом году. Результат выведите в виде списка дат.*/
for ($i=1, $piat13=''; $i <12 ; $i++) { 
   if (date('w',mktime(0,0,0,$i,13,$arr[0]))==4) {
      $piat13.=date($format,mktime(0,0,0,$i,13,$arr[0]))."<br/>";
   }
}
echo "<strong><em>",'5. С помощью адресной строки передайте GET-параметр date, который хранит год (4 числа). Найдите все пятницы 13-е в этом году. Результат выведите в виде списка дат.',"</em><br/>Задание 5: Список дат пятниц 13го в введённом году.<br/> $piat13</strong><br/>";

/*6. Дан GET-параметр date, в который вводится год. Узнайте, какой это будет год по восточному календарю. Результат выведите на экран.*/
$zoo=0;
$color=0;
$zoo=$arr[0] % 12;
$color=$arr[0] % 10;
$result='';

switch ($color) {
   case 0:
   case 1:
      $result.=' Бел';
      break;
   case 2:
   case 3:
     $result.='Чёрн';
      break;
   case 4:
   case 5:
      $result.=' Син';
      break;
   case 6:
   case 7:
      $result.=' Красн';
      break;
   case 8:
   case 9:
      $result.=' Жёлт';
      break;
   default:
      break;
}

if (($color==4)&&($color==5))
$result.='е'; 
else
$result.='о';

switch ($zoo) {
   case 0: 
      $result.='й обезьяны';
      break;
      case 1: 
      $result.='го петуха';
      break;
      case 2: 
      $result.='й собаки';
      break;
      case 3: 
      $result.='й свиньи';
      break;
      case 4: 
      $result.='го быка';
      break;
      case 5: 
      $result.='го тигра';
      break;
       case 6: 
      $result.='го зайца';
      break;
       case 7: 
      $result.='го тигра';
      break;
       case 8: 
      $result.='го дракона';
      break;
       case 9: 
      $result.='й змеи';
      break;
       case 10: 
      $result.='й лошади';
      break;
       case 11: 
      $result.='й овцы';
      break;
   default:
      break;
}
echo "<strong><em>",'6. Дан GET-параметр date, в который вводится год. Узнайте, какой это будет год по восточному календарю. Результат выведите на экран.',"</em><br/>Задание 6: Введённый год по восточному календарю будет - $result</strong><br/><br/>";

/*7. Пользователь в форму вводит дату, например, 2017-01-01. Найдите количество дней, часов, минут, секунд, прошедших с 2017-01-01 23:59:59 до настоящего момента.*/
$days=0;
$hours=0;
$min=0;
$sec=0;
$mom=0;
$boof=0;
$mom=abs(time()-mktime(23,59,59,$arr[1],$arr[2],$arr[0]));
$boof=$mom%(3600*24);
$days=($mom-$boof)/(3600*24);
$mom=$boof;
$boof=$mom%(3600);
$hours=($mom-$boof)/(3600);
$mom=$boof;
$boof=$mom%(60);
$min=($mom-$boof)/(60);
$sec=$boof;
echo "<strong><em>",'7. Пользователь в форму вводит дату, например, 2017-01-01. Найдите количество дней, часов, минут, секунд, прошедших с 2017-01-01 23:59:59 до настоящего момента.',"</em><br/>Задание 7: Разница меджу датами = $days дней, $hours часов, $min минут, $sec секунд.</strong><br/><br/>";

/*8. Пользователь в форму вводит дату. Узнайте какой день недели был 100 лет назад.*/
$dateboof=date_create("$arr[0]-$arr[1]-$arr[2]");
date_modify($dateboof, '-100 day');
$num = date_format($dateboof, 'w');
$week = ['вс', 'пн', 'вт', 'ср','чт', 'пт', 'сб'];
echo "<strong><em>",'8. Пользователь в форму вводит дату. Узнайте какой день недели был 100 лет назад.',"</em><br/>Задание 8: 100 лет назад был = $week[$num]</strong><br/><br/>";

if (!empty($_POST)) 
   $date2=empty($_POST['date2']) ? '' : trim(strip_tags($_POST['date2'])); 
      if (!empty($date2)) {
         //if (preg_match("/[0-9]{4}[-.\/](0[1-9]|1[012])[-.\/](0[1-9]|1[0-9]|2[0-9]|3[01])/",$date1)) {
            if ((bool)strtotime($date2)==true) {
            $arr2=preg_split('/[-.\/]/',$date2);
            $t2=date("t",mktime(0,0,0,$arr2[1],1,$arr2[0]));
               if (($arr2[0]<2038 && $arr2[0]>1900) && ($arr2[1]>0 && $arr2[1]<=12) && ($arr2[2]>0 && $arr2[2]<=$t)) {
echo "<strong>Введённая Вами дата Date 2 = $date2</strong><br/><br/>";

 /*2. Пользователь передает две даты. Первую дату запишите в переменную $date1, а вторую в $date2. Сравните, какая из введенных дат больше. С помощью функций explode и mktime переведите большую дату в формат timestamp. По этому timestamp узнайте день недели (словом, латиницей) и выведите его на экран.*/
if (strtotime($date1)>=strtotime($date2)) {
   $NumberOfDay=date("w",mktime(0,0,0,$arr[1],$arr[2],$arr[0]));
   echo "<strong>2. <em>",'Пользователь передает две даты. Первую дату запишите в переменную $date1, а вторую в $date2. Сравните, какая из введенных дат больше. С помощью функций explode и mktime переведите большую дату в формат timestamp. По этому timestamp узнайте день недели (словом, латиницей) и выведите его на экран.',"</em><br/>Задание 2: День недели введённой большей даты = $week[$NumberOfDay]</strong>","<br/>";
}
else {
  $NumberOfDay=date("w",mktime(0,0,0,$arr2[1],$arr2[2],$arr2[0]));
   echo "<strong>2. <em>",'Пользователь передает две даты. Первую дату запишите в переменную $date1, а вторую в $date2. Сравните, какая из введенных дат больше. С помощью функций explode и mktime переведите большую дату в формат timestamp. По этому timestamp узнайте день недели (словом, латиницей) и выведите его на экран.',"</em><br/>Задание 2: День недели введённой большей даты = $week[$NumberOfDay]</strong>","<br/>"; 
}

        } else echo 'Не верный формат даты в поле Date2! Вводите дату в формате год-месяц-день!!!';
      } else echo 'Не верный формат даты в поле Date2! Вводите дату в формате год-месяц-день!!!';
   //} else echo 'Не верный формат даты в поле Date2! Вводите дату в формате год-месяц-день!!!';
}
         } else echo 'Не верный формат даты в поле Date1! Вводите дату в формате год-месяц-день!!!';
      } else echo 'Не верный формат даты в поле Date1! Вводите дату в формате год-месяц-день!!!';
   //} else echo 'Не верный формат даты в поле Date1! Вводите дату в формате год-месяц-день!!!';
}
?>
</div>
<?php endif ?>
</body>
</html>