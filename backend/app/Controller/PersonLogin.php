<?php

namespace App\Controller;


trait PersonLogin{
    public function checkCredentiels($object,$person){
        $credentials = $object;
        if ($person['email'] == $credentials['email']){
            if (password_verify($person['password'] , $credentials['password'])){
                echo 'valid password';
            }else{
                echo 'wrong password';
            }
        }else{
            echo 'wrong email';
        }
    }
}