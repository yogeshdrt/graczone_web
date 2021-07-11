<?php
$json = file_get_contents('php://input');
$obj = json_decode($json);
$version=$obj->{'version'};
$a=file_get_contents("updateVersion.txt");
$intversion = (int)$a;
echo $intversion ;
?>