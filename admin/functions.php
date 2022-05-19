<?php 
include '../../database.php';

function getRealIp(){
    switch(true){
        case(!empty($_SERVER['HTTP_X_REAL_IP'])):
            return $_SERVER['HTTP_X_REAL_IP'];
        break;
        case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])):
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        break;
        case(!empty($_SERVER['HTTP_X_CLIENT_IP'])):
            return $_SERVER['HTTP_X_CLIENT_IP'];
        break;
        default: 
            return $_SERVER['REMOTE_ADDR'];
    }
}

function password_encryption($password){
    $Blowfish_Hash_Format = "$2y$10$";
    $Salt_Length = 22;
    $Salt = Generate_Salt($Salt_Length);
    $Formatting_Blowfish_With_Salt = $Blowfish_Hash_Format.$Salt;
    $Hash = crypt($password,$Formatting_Blowfish_With_Salt);
    return $Hash;
}

function password_check($password,$existing_hash){
    $hash = crypt($password,$existing_hash);
    if($hash === $existing_hash){
        return true;
    }else{
        return false;
    }
}

function Generate_Salt($length){
    $unique_random_string = md5(uniqid(mt_rand(), true));
    $base64_string = base64_encode($unique_random_string);
    $modified_base64_string = str_replace('+','.',$base64_string);
    $salt = substr($modified_base64_string,0,$length);
    return $salt;
}

?>