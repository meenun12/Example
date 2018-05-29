<?php

function ShowHomepage(){
    echo "Home Page";
}

$_SERVER['REQUEST_URI'] = 'examplephp.com/login';
$path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
$elements = explode('/', $path);                // Split path on slashe

if(empty($elements[0])) {
     ShowHomepage();
} else switch($elements[1])             // Pop off first item and switch
{
    case 'login':
        echo "inside login";
     break;

    default:
        echo "inside default block";
    break;
}
echo "at end";





