<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'MainFunction.php';

$now = getdate();
$dayInFile = file_get_contents("dayInFile.txt");

if ($dayInFile == $now["mday"]) {
	$dailyVerse = file_get_contents("dailyVerse.txt");
	echo $dailyVerse;
} else {
	$verse = file_get_contents('https://www.taiwanbible.com/blog/dailyverse.jsp');
	if (trim($verse) != "") {
		file_put_contents("dayInFile.txt", $now["mday"]);
		file_put_contents("dailyVerse.txt", trim($verse));
		$dailyVerse = file_get_contents("dailyVerse.txt");
		echo $dailyVerse;
	} else {
		echo trim($verse);
	}
}
