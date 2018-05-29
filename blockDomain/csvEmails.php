<?php

function checkSpamEmail($domain)
{


    $row = 1;
    if (($handle = fopen("csv/blockedEmailDomains.csv", "r")) !== FALSE) {
        while ($data = fgetcsv($handle)) {
            $row++;
            $num = count($data);
            for ($c = 0; $c < $num; $c++) {

                if ($data[$c] == $domain) {
                    return false;
                }

            }
        }
        fclose($handle);
    }
    return true;

}

$email = 'test@60gmail.com';
$domain = substr(strrchr($email, "@"), 1); //extract domain name from email

$checkSpamEmail = 1;
$checkSpamEmail = checkSpamEmail($domain);

if($checkSpamEmail){
    echo "You are good to go";
}else{
    echo "sorry you need a real email to do that";
}
