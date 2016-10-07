<?php
$data['ad'] = findAdOrRedirect();
createOrEditAd();
$main_view = __DIR__.'/../views/ads/edit.php';
