<?php
header('Content-Type: text/html; charset=utf-8');

$curl = curl_init("https://www.taiwanbible.com/blog/dailyverse.jsp");
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl,CURLOPT_POSTFIELDS,$_POST);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$data = curl_exec($curl);

echo $data;
