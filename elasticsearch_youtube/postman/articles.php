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
    CURLOPT_CUSTOMREQUEST => "POST",
    //CURLOPT_POSTFIELDS => "{\n\t\"title\": \"this is test articles\",\n\t\"body\" : \"This is the body of my article. I hope you like it.\",\n\t\"keywords\" : [\"test\", \"php\"]\n}",
    CURLOPT_HTTPHEADER => array(
        "Cache-Control: no-cache",
        "Postman-Token: e54b3f95-32b9-4e9c-b639-77a7b18a1b12"
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