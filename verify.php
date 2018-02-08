<?php
$access_token = 'l2hHprEImPA+zQWKXicuvN66tHqEZmGkKeTbfChTjrFEnf/uMRsmFDyQ6ctZUL2eYfSOe5OmDyd6zbI9T1bIpcTAbwHHK+2T1O93tVQowCZfugFIg+DAv77JR/t0KLInZNAX9jPd1CzoO2i7a5s3uAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;