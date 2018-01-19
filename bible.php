<?php
header('Content-Type: text/html; charset=utf-8');
header('Content-Type: application/json');
require_once 'MainFunction.php';

// dump($_GET);

$url = $_GET['link']."?gb=".$_GET["gb"]."&chap=".$_GET["chap"]."&chineses=".$_GET["chineses"];
// dump($url);
$home = file_get_contents($url);
$result = mb_convert_encoding($home,"utf-8","big5");
echo $result;

// $home = file_get_contents('https://www.taiwanbible.com/blog/dailyverse.jsp');
// $result = mb_convert_encoding($home,"utf-8","big5");
// echo $result;
