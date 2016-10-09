<?php
if (Auth::check()){
    Auth::logout();
    redirect('Location: /');
    die;
} else{
    redirect('Location: /ads');
    die;
}


?>