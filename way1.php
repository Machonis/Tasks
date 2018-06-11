<?php
$margin = [];
$waves = [10];
$status = 0;
$filename='way.txt';

$startX=1;
$startY=1;
$endX=9;
$endY=9;

$x=0;
$y=0;

$step=0;

for ($y = 1; $y <= 10; $y++) {
    if ($y !=1 ) {
        echo "<br/>";
    }
    for ($x = 1; $x <= 10; $x++) {
        $status=rand(0,5);
        if ( $status > 1 ) {
            $status = 0;
        }
        echo "$status";
        $margin[$y][$x]=$status;
    }
}

$data = serialize($margin);
file_put_contents($filename, $data);

$data = file_get_contents($filename);
$margin = unserialize($data);

var_dump($margin);

$waves = array_fill(1, 10, array_fill(1, 10, 0));
$margin[$startY][$startX] = 0;
$margin[$endY][$endX] = 0;
$waves[$startY][$startX] = 1;
$waves[$endY][$endX] = 0;
$step = 1;

do  {
    $step = $step + 1;
    for ($y=1; $y < 10; $y++ ) {
        echo "<br/>";
        for ($x=1; $x < 10 ; $x++) {
            if ($waves[$endY][$endX] == 0) {
                if ($waves[$y][$x] == $step - 1) {
                    if ($x < 10 && $waves[$y][$x + 1] == 0 && $margin[$y][$x + 1] == 0) {
                        $waves[$y][$x + 1] = $step;
                        echo "$step";
                    }
                    if ($x > 1 && $waves[$y][$x - 1] == 0 && $margin[$y][$x - 1] == 0) {
                        $waves[$y][$x - 1] = $step;
                        echo "$step";
                    }
                    if ($y < 10 && $waves[$y + 1][$x] == 0 && $margin[$y + 1][$x] == 0) {
                        $waves[$y + 1][$x] = $step;
                        echo "$step";
                    }
                    if ($y > 1 && $waves[$y - 1][$x] == 0 && $margin[$y - 1][$x] == 0) {
                        $waves[$y - 1][$x] = $step;
                        echo "$step";
                    }
                }
            } else {
                break;
            }
        }
    }
    if ($step >= 100) {
        echo 'ППЦ';
        break;
    }
} while ($waves[$endY][$endX] == 0);

echo "<br/>";
echo "<pre>";
var_dump($waves);
echo "</pre>";

function nextX ($y,$x) {
    global $waves;
    if ($x < 10 && $waves[$y][$x] - $waves[$y][$x+1]==1) {
        $x = $x + 1;return $x;
    }
    if ($x > 1 && $waves[$y][$x] - $waves[$y][$x-1]==1) {
        $x = $x - 1; return $x;
    }
    return $x;
}

function nextY ($y,$x) {
    global $waves;
    if ($y < 10 && $waves[$y][$x] - $waves[$y+1][$x]==1) {
        $y = $y + 1; return $y;
    }
    if ($y > 1 && $waves[$y][$x] - $waves[$y-1][$x]==1) {
        $y = $y - 1; return $y;
    }
    return $y;
}

$tempX=0;
$tempY=0;
$x = $endX;
$y = $endY;
$margin[$endY][$endX] = "4";
$margin[$startX][$startX]='3';
echo $waves[$y][$x] ;
while ($step >= 1 ) {
    echo $x;
    echo $y;
    $tempX=nextX($y,$x);
    if ($tempX == $x) {
        $tempY = nextY($y, $x);
    } else {
        $tempY = $y;
    }
    $step = $step -1;
    $x=$tempX;
    $y=$tempY;
    if ($step > 1) {
        $margin [$y][$x] = '*';
    }
}


echo "<br/>";

for ($y = 1; $y <= 10; $y++) {
        echo "<br/>";
    for ($x = 1; $x <= 10; $x++) {
        echo $margin[$y][$x];
    }
}
