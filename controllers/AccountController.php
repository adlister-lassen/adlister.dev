<?php

$data['user'] = findUserOrRedirect();
$data['adsToDisplay'] = Ad::findByAdsBySeller($_SESSION['LOGGED_IN_ID']);
$main_view = __DIR__.'/../views/users/account.php';