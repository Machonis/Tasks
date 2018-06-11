<?php
echo  "<pre>";
$_POST=['name'=>'tadas','surname'=>'Machonis'];
$_GET=2;
print_r($_REQUEST);
var_dump($_REQUEST);
var_dump($_POST);
$_REQUEST+=$_POST;
var_dump($_REQUEST);
echo  "<pre/>";