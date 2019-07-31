<?php
header('Content-Type: text/html; charset=utf-8');
header('Content-Type: application/json');
header('Accept: multipart/form-data');
require_once 'MainFunction.php';

$url = $_GET['link'] . "?gb=" . $_GET["gb"] . "&chap=" . $_GET["chap"] . "&chineses=" . $_GET["chineses"];

$home = url_get_contents($url);
$result = mb_convert_encoding($home, "utf-8", "big5");
echo $result;
