<?php
function logOut()
{

    Auth::logout();
    header('Location: /');
    die();

}
logOut();