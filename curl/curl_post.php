<?php

$url='https://api.dealroom.co/api/v2/auth/login';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_USERPWD, $password);
//curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
/*$headers = array(
    'X-Dealroom-App-Id : 221214001',
    'X-Requested-With : XMLHttpRequest'
);*/

$headers = array(
    'X-Dealroom-App-Id : 221214001',
    'X-Requested-With : XMLHttpRequest'
);

//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$output = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
$info = curl_getinfo($ch);
curl_close($ch);

if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}
print_r($output);
echo $status_code;