<?php

use JetBrains\PhpStorm\Deprecated;

    $str = 'dsaadsfasdfasdfsdafsff';
    // $t = 'a';
    // $cost = ['cost'=>11];

    // Deprecated
    // $cost = ['cost'=>11, 'salt'=>"this is minimum 22 char"];
    // $pass = password_hash($str,  PASSWORD_BCRYPT, $cost);

    $pass = password_hash($str,  PASSWORD_BCRYPT);
    $check = password_verify($str, $pass);
    
    echo $pass

    
    // if(010){
    //     echo $check;
    // }
    // else{
    //     echo "no";
    // }


?>