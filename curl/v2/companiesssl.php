<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.dealroom.co/api/v2/companies?cashbust=1526546112294&token=eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhcHAuZGVhbHJvb20uY28iLCJleHAiOjE1MjkxODM0OTAsImlhdCI6MTUyNjUwNTA5MCwiaXNzIjoiZGVhbHJvb20uY28iLCJqdGkiOiJEZWFscm9vbUFwaVYyIiwibmJmIjoxNTI2NTA1MDkwLCJ1c2VySWQiOiI5NTkzMzMiLCJ1c2VyQWdlbnQiOiJNb3ppbGxhXC81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV2luNjQ7IHg2NCkgQXBwbGVXZWJLaXRcLzUzNy4zNiAoS0hUTUwsIGxpa2UgR2Vja28pIENocm9tZVwvNjYuMC4zMzU5LjE4MSBTYWZhcmlcLzUzNy4zNiJ9.Qec162E7aATn_Hb4bp1ktORScp_g8UHTlb8ju0v_jVks",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
        "Referer: https://app.dealroom.co/companies",
        "X-Dealroom-App-Id: 17091515",
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
