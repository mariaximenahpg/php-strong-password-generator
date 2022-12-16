<?php
$length = $_GET['passwordLength'];
function passwordGenerated ($length){
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?&%$<>^+-*\/()[]{}@#_=';
    $psw = '';
    for ($i = 0; $i < $length; $i++) {
        $psw.= $chars[rand(0, strlen($chars) - 1)];
    }
    return $psw;
}
?>