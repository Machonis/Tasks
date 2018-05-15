<?php
class shell{
    public $request_uri;
    public $ip;
    public $document_root;
    public $http_host;
    public $http_user_agent;
    public $query_string;

    public function __construct()
    {
        $this->request_uri=$_SERVER['REQUEST_URI'];
        $this->ip=$_SERVER['REMOTE_ADDR'];
        $this->document_root=$_SERVER['DOCUMENT_ROOT'];
        $this->http_host=$_SERVER['HTTP_HOST'];
        $this->http_user_agent=$_SERVER['HTTP_USER_AGENT'];
        $this->query_string=$_SERVER['QUERY_STRING'];
    }
}

$shell=new shell();
echo 'Имя скрипта = '.$shell->request_uri."<br/>";
echo 'IP = '.$shell->ip."<br/>";
echo 'Корневая папка = '.$shell->document_root."<br/>";
echo 'Хост = '.$shell->http_host."<br/>";
echo 'Браузер и операционка = '.$shell->http_user_agent."<br/>";
echo 'Параметры переданные скрипту = '.$shell->query_string."<br/>";