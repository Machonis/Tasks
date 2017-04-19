<?php
$age=mt_rand(10,70);
setcookie('age', $age, time() + 3600*3, '/');
var_dump($_COOKIE);
