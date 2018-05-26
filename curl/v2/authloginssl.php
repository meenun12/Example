<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.dealroom.local/api/v2/auth/login",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\"email\":\"marco@dealroom.co\",\"password\":\"passw0rd1@#$\"}",
    CURLOPT_CAINFO => "/opt/cacert.pem",
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json",
        "Referer: https://api.dealroom.local/login",
        "X-Dealroom-App-Id: 221214001",
        "X-Requested-With: XMLHttpRequest"
    )
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}