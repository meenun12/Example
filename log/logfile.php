<?php

$f = fopen("/usr/share/nginx/dealroom_source/meenu/logs/logs.txt", "w");
$f = fwrite($f, print_r("test", true));
fclose($f);

/*$file = fopen("test.txt","w");
fwrite($file,"Hello World. Testing!");
fclose($file);*/