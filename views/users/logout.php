<?php

if (Auth::check()){
    Auth::logout();
    header('Location: /');
    die;
} else{
    header('Location: /ads');
    die;
}

?>