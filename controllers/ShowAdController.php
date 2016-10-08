<?php
//needs authorization for editing

$ad = Ad::find(Input::get('id'));
$data['seller'] = User::find($ad->user_id);
$data['ad'] = findAdOrRedirect();
$main_view = __DIR__.'/../views/ads/show.php';