<?php
/*6. Сделайте класс-оболочку над $_SERVER. Класс должен иметь следующие свойства:
request_uri, ip, document_root, http_host, http_user_agent, query_string. Для проверки в
конструктор класса передается переменная $_SERVER и через экземпляр класса
вызывается нужный метод. Убрать die, передавать ключ вместо массива, */

class CoverServer
{
    private $RequestUri;
    private $Ip;
    private $DocumentRoot;
    private $HttpHost;
    private $HttpUserAgent;
    private $QueryString;

    public function __construct($Web)
    {
        $this
            ->setRequestUri($Web['REQUEST_URI'] ?? null)
            ->setIp($Web['REMOTE_ADDR'] ?? null)
            ->setIp($Web['REMOTE_ADDR'] ?? null)
            ->setDocumentRoot($Web['DOCUMENT_ROOT'] ?? null)
            ->setHttpHost($Web['HTTP_HOST'] ?? null)
            ->setHttpUserAgent($Web['HTTP_USER_AGENT'] ?? null)
            ->setQueryString($Web['QUERY_STRING'] ?? null);
    }

    public function setRequestUri($Web)
    {
        $this->RequestUri = $Web;
        return $this;
    }

    public function setIp($Web)
    {
        $this->Ip = $Web;
        return $this;
    }

    public function setDocumentRoot($Web)
    {
        $this->DocumentRoot = $Web;
        return $this;
    }
    
    public function setHttpHost($Web)
    {
        $this->HttpHost = $Web;
        return $this;
    }

    public function setHttpUserAgent($Web)
    {
        $this->HttpUserAgent = $Web;
        return $this;
    }

    public function setQueryString($Web)
    {
        $this->QueryString = $Web;
        return $this;
    }
    
    public function getDocumentRoot()
    {
        return $this->DocumentRoot;
    }
    
    public function getHttpHost()
    {
        return $this->HttpHost;
    }
    
    public function getHttpUserAgent()
    {
        return $this->HttpUserAgent;
    }
    
    public function getIp()
    {
        return $this->Ip;
    }
    
    public function getQueryString()
    {
        return $this->QueryString;
    }
    
    public function getRequestUri()
    {
        return $this->RequestUri;
    }
} 