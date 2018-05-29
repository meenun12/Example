<?php

$disposable_list = array('drdrb.net', 'upliftnow.com', 'uplipht.com', 'venompen.com', 'veryrealemail.com', 'viditag.com', 'viewcastmedia.com', 'viewcastmedia.net', 'viewcastmedia.org', 'gustr.com', 'webm4il.in',
    'wegwerfadresse.de', 'wegwerfemail.de', 'wetrainbayarea.com', 'wetrainbayarea.org', 'wh4f.org',
    'whyspam.me', 'willselfdestruct.com', 'winemaven.in', 'wronghead.com', 'wuzup.net',
    'wuzupmail.net', 'www.e4ward.com', 'www.gishpuppy.com', 'www.mailinator.com', 'wwwnew.eu',
    'xagloo.com', 'xemaps.com', 'xents.com', 'xmaily.com', 'xoxy.net',
    'yep.it', 'yogamaven.com', 'yopmail.fr', 'yopmail.net', 'ypmail.webarnak.fr.eu.org',
    'yuurok.com', 'zehnminutenmail.de', 'zippymail.in', 'zoaxe.com', 'zoemail.org',
    'inboxalias.com', 'koszmail.pl', 'tagyourself.com', 'whatpaas.com', 'emeil.in',
    'azmeil.tk', 'mailfa.tk', 'inbax.tk', 'emeil.ir', 'crazymailing.com',
    'mailimate.com', '');



$email = 'test@gmail.com';
$domain = substr(strrchr($email, "@"), 1); //extract domain name from email

if(in_array($domain, $disposable_list)){
    echo "Disposable email not allowed";
}else{
    echo "You are good to go";
}
