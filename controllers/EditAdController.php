<?php
$data['ad'] = findAdOrRedirect();
createOrEditAd();
$data['submitted'] = $submitted;
$main_view = __DIR__.'/../views/ads/edit.php';
