<?php

$data['user'] = findLoggedInUserOrRedirect();
// $ads = getAdsBySeller($dbc);
$data['adsToDisplay'] = Ad::findByAdsBySeller($_SESSION['LOGGED_IN_ID']);
var_dump($data['adsToDisplay']);
$main_view = __DIR__.'/../views/users/account.php';