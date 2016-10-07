<?php
$data['user'] = findLoggedInUserOrRedirect();
$ads = getAdsBySeller($dbc);
$data['adsToDisplay'] = $ads;
$main_view = __DIR__.'/../views/users/account.php';