<?php
$access_token = '2My+zZSjFUH2Rft/OSwzGro6NC0RJzu3PzMJBF3MxS83UdB0ZvtEJ1fUZe/TDw+MfzU0FCJkBNQTtz1HIrW/InM2KLBO58TfARXFGL+sKwV4U9QZzDdRyQucOkJPpz27kJRCZNRx+5+xWM4vLPAExwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;