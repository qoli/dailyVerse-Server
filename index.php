<?php
// 彼得前書 1 : 22 你們既因順從真理，潔淨了自己的心，以致愛弟兄沒有虛假，就當從心裡（從心裡：有古卷是從清潔的心）彼此切實相愛。

header('Content-Type: text/html; charset=utf-8');
$file = file_get_contents('https://www.taiwanbible.com/blog/dailyverse.jsp');
echo $file;
