<?php

//$token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJsb2NhbGhvc3QiLCJleHAiOjE0NDg2MzU4NDYsImlhdCI6MTQ0ODYzMjI0NiwiaXNzIjoiZGVhbHJvb20uY28iLCJqdGkiOiJEZWFscm9vbUFwaVYyIiwibmJmIjoxNDQ4NjMyMjQ2LCJ1c2VySWQiOiIxMDQ2In0.TGVQIs0Mw3yaRPG2uY_JiZSRkZpMZoo3FWG_rN-L6S8';

//$password='5896a350e95d04ec368fcd516bcabf6c051c6668';
//$url='https://api.dealroom.co/api/v2/companies';
$url='https://api.dealroom.co/api/v1/companies';
$password='111dealroomTesting~env:';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERPWD, $password);
//curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
/*$headers = array(
    'X-Dealroom-App-Id : 221214001',
    'X-Requested-With : XMLHttpRequest'
);*/

$headers = array(
    'X-Dealroom-App-Id : 221214001',
    'X-Requested-With : XMLHttpRequest'
);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$output = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
$info = curl_getinfo($ch);
curl_close($ch);

if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}
print_r($output);
echo $status_code;


