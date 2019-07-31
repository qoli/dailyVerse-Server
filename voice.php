<?php
header('Content-Type: text/html; charset=utf-8');
header('Content-Type: application/json');
header('Accept: multipart/form-data');
require_once 'MainFunction.php';

$url = $_GET['link'] . "?chap=" . $_GET["chap"] . "&chineses=" . $_GET["chineses"];
$ver = 'unv1';

$result = url_get_contents($url);

$pattern = '~<a href="listenhb.php\?version=(\d?)(.*?)">(.*?)</a>~i';
preg_match_all($pattern, $result, $matches);
parse_str(parse_url("listenhb.php?version=0" . $matches[2][0], PHP_URL_QUERY), $output);

foreach ($matches[1] as $key => $value) {
    $verNumber[] = 'http://media.fhl.net/' . getVersion($value) . '/' . $output['amp;bid'] . '/' . $output['amp;bid'] . '_' . $output['amp;chap'] . '.mp3';
}

$return = array(
    "url" => 'http://media.fhl.net/' . getVersion(0) . '/' . $output['amp;bid'] . '/' . $output['amp;bid'] . '_' . $output['amp;chap'] . '.mp3',
    "count" => count($matches[2]),
    "versionName" => $matches[3],
    "audioURL" => $verNumber,
);

echo json_encode($return);

function getVersion($verNumber = 0) {
    switch ($verNumber) {
    case 4:
        return 'tcv';
        break;
    case 1:
        return 'Taiwanese';
        break;
    case 5:
        return 'tai';
        break;
    case 3:
        return 'Cantonese1';
        break;
    case 8:
        return 'fj';
        break;
    case 9:
        return 'greek';
        break;

    default:
        return 'unv1';
        break;
    }
}
