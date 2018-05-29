<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.dealroom.local/api/v2/companies?token=eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJsb2NhbGhvc3QiLCJleHAiOjE1MjkyNDIxMjQsImlhdCI6MTUyNjU2MzcyNCwiaXNzIjoiZGVhbHJvb20uY28iLCJqdGkiOiJEZWFscm9vbUFwaVYyIiwibmJmIjoxNTI2NTYzNzI0LCJ1c2VySWQiOiI5MjQ5MDQifQ.iAXJv5yAcvU8k8Ijafx4fM2p6rd5Z1o8y-bZe3fqc0I",
    CURLOPT_RETURNTRANSFER => true,
   CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_SSL_VERIFYHOST => FALSE,
    CURLOPT_HTTPHEADER => array(
        "X-Dealroom-App-Id: 221214001",
        "X-Requested-With: XMLHttpRequest"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
