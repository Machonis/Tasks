<?php
require_once('CoverServer.php');
$Web=$_SERVER;
$firstObj=new CoverServer($Web);
?>
    <pre>
<?php
echo $firstObj->getDocumentRoot()."<br/>";
echo $firstObj->getHttpHost()."<br/>";
echo $firstObj->getHttpUserAgent()."<br/>";
echo $firstObj->getIp()."<br/>";
echo $firstObj->getQueryString()."<br/>";
echo $firstObj->getRequestUri();
?>
   </pre>
