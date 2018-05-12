<?php

function ShowHomepage(){
    echo "Home Page";
}
$_SERVER['REQUEST_URI'] = 'picture.php?id=1';
$path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
$elements = explode('/', $path);                // Split path on slashes
if(empty($elements[0])) {
     ShowHomepage();
} else switch(array_shift($elements))             // Pop off first item and switch
{
    case 'picture.php':
        header('location:http://examplephp.com/picture.php');
        ShowPicture($elements); // passes rest of parameters to internal function
        break;}

   
echo "hi";



