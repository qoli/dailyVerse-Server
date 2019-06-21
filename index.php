<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'MainFunction.php';
// 彼得前書 1 : 22 你們既因順從真理，潔淨了自己的心，以致愛弟兄沒有虛假，就當從心裡（從心裡：有古卷是從清潔的心）彼此切實相愛。

$now       = getdate();
$dayInFile = file_get_contents("dayInFile.txt");

if ($dayInFile == $now["mday"]) {
    $dailyVerse = file_get_contents("dailyVerse.txt");
    echo $dailyVerse;
} else {
    file_put_contents("dayInFile.txt", $now["mday"]);
    $verse = file_get_contents('https://www.taiwanbible.com/blog/dailyverse.jsp');
    file_put_contents("dailyVerse.txt", trim($verse));
    $dailyVerse = file_get_contents("dailyVerse.txt");
    echo $dailyVerse;
}
