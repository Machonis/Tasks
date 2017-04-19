<?php
$date='';
if (!empty($_POST)) {
    $date = empty($_POST['date']) ? '' : trim(strip_tags($_POST['date']));
    setcookie('date', $date, time() + 99999999);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="../Style.css" rel="stylesheet">
</head>
<body>
<?php if (empty($_POST)) : ?>
<div id="prost">
    <form action="" method="POST">
        <div id="container">
            <div id="prost"><label id="label-for" for="date">Введите свою дату рождения в формате год-месяц-день</label>
                <input type="text" name="date" id="date"></div>
            <div id="prost"><input type="submit" value="Ввести дату"></div> <br><br>
        </div>
    </form>
</div>
<?php endif ?>
<?php
$date='';
if (!empty($_COOKIE['date'])) :
$date=$_COOKIE['date'];?>
<div id="prost">
    <?php
    $arr = [];
    if (!empty($date)) {
        if ((bool)strtotime($date) == true) {
            $arr = preg_split('/[-.\/]/', $date);
            $t = date("t", mktime(0, 0, 0, $arr[1], 1, $arr[0]));
            if (($arr[0] < 2038 && $arr[0] > 1900) && ($arr[1] > 0 && $arr[1] <= 12) && ($arr[2] > 0 && $arr[2] <= $t)) {
                $count=date_diff(new DateTime('00:00:01'), new DateTime(date('Y').'-'.$arr[1].'-'.$arr[2].'00:00:01'))->days;
                $days = date('L')?366:365;
                //if (strtotime(date('Y')-$arr[1]-$arr[0])>strtotime(date('Y-m-d')))
                if ($count>0) {
                    if (time() > date(mktime(0, 0, 0, $arr[1], $arr[2], date('Y')))) {
                        $count = $days - $count;
                    }
                }
                if ($count>0) echo "До твоего дня рождения осталось $count дней!";
                else echo 'Happy birthday!!!';
            } else echo 'Не верный формат даты! Вводите дату в формате год-месяц-день!!!';
        } else echo 'Не верный формат даты! Вводите дату в формате год-месяц-день!!!';
    }
    ?>
</div>
<?php endif ?>
</body>
</html>