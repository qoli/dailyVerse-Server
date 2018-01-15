<?php

$application_server = 'www.taiwanbible.com'; // replace with IP or hostname of application server
$uri = $_SERVER['REQUEST_URI']; // you may need to change this, not sure from your question.

$curl = curl_init("https://{$application_server}{$uri}");
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl,CURLOPT_POSTFIELDS,$_POST);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$data = curl_exec($curl);

echo $data;
