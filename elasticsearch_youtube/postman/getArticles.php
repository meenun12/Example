<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_PORT => "9200",
    CURLOPT_URL => "http://192.168.64.110:9200/articles/_search",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    //is test articles\",\n\t\"body\" : \"This is the body of my article. I hope you like it.\"\n}",
    CURLOPT_HTTPHEADER => array(
        "Cache-Control: no-cache",
        "Content-Type: application/json",
        "Postman-Token: 3badcb6a-8a8c-41c4-a362-2515f4eb92c1"
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