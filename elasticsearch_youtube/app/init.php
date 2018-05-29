<?php

require_once "vendor/autoload.php";

$es = new Elasticsearch\Client([
    'hosts' => ['192.168.64.110:9200']
]);

