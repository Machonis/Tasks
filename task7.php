<?php
/*- private свойства post и get. Свойствам по-умолчанию присваиваются пустые массивы
    - private метод для удаления пробелов (delGaps()) - оболочка над функцией trim
    - private метод для удаления тегов (delTags()) - оболочка над strip_tags
    - private метод handleRequest для обработки GET и POST массивов. Метод задействует
методы delGaps() и delTags() и заполняет свойства post и get. Метод принимает на вход
параметр request - массив с данными. Метод должен анализировать данные из request
параметра и распределить данные в get и post свойства. Для этого используйте
$_SERVER[‘REQUEST_METHOD’] для определения типа параметра - GET или POST.*/
class Validator {
    private $post=[];
    private $get=[];

    private function delGaps()
    {

    }

    private function delTags()
    {

    }

    private function handleRequest()
    {

    }
}