<?php

$adId = Input::get('id');
$ad = Ad::find($adId);
$sellerId = $ad->user_id;
$data['seller'] = User::find($sellerId);
$data['ad'] = findAdOrRedirect();
$main_view = __DIR__.'/../views/ads/show.php';