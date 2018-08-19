<?php
header('Content-Type: text/html; charset=utf-8');
$home = file_get_contents('https://www.taiwanbible.com/blog/dailyverse.jsp');
// $home = mb_convert_encoding($home,"utf-8","big5");
echo $home;
