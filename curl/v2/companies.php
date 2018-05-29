<?php

//Request URL: https://api.dealroom.co/api/v2/companies?cashbust=1526546112294&token=eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJhcHAuZGVhbHJvb20uY28iLCJleHAiOjE1MjkxODM0OTAsImlhdCI6MTUyNjUwNTA5MCwiaXNzIjoiZGVhbHJvb20uY28iLCJqdGkiOiJEZWFscm9vbUFwaVYyIiwibmJmIjoxNTI2NTA1MDkwLCJ1c2VySWQiOiI5NTkzMzMiLCJ1c2VyQWdlbnQiOiJNb3ppbGxhXC81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV2luNjQ7IHg2NCkgQXBwbGVXZWJLaXRcLzUzNy4zNiAoS0hUTUwsIGxpa2UgR2Vja28pIENocm9tZVwvNjYuMC4zMzU5LjE4MSBTYWZhcmlcLzUzNy4zNiJ9.Qec162E7aATn_Hb4bp1ktORScp_g8UHTlb8ju0v_jVk

$url='https://api.dealroom.co/api/v2/companies?cashbust=1526546112294&token=eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJsb2NhbGhvc3QiLCJleHAiOjE1MjkyNDg4NDMsImlhdCI6MTUyNjU3MDQ0MywiaXNzIjoiZGVhbHJvb20uY28iLCJqdGkiOiJEZWFscm9vbUFwaVYyIiwibmJmIjoxNTI2NTcwNDQzLCJ1c2VySWQiOiI5MjQ5MDQifQ.ieL5Lfkwcw3NBadEVp27Rzzwy4yGvz6W5lx8snkF3vM"';
//$password='111dealroomTesting~env:';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
/*curl_setopt($ch, CURLOPT_USERPWD, $password);*/
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