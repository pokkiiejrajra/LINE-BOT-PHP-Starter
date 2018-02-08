<?php
$access_token = 'LI1qF13IK1HSaCOWywdzQRAg8fjIhLs1/H+N664z0CAS+QS3wyA9te0FtdLQTo7t5Rd2XRjvubdd20w7BJ2tHrj4SsiKslc2FQ/sYRKNyMmtCj1KPfK8S/aEYa/myH/vF8cXjILyIDBlT+9UutM6jQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;