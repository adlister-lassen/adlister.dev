<?php

$submitted = isset($_GET['submitted']) ? true : false;
createOrEditAd();
$data['submitted'] = $submitted;
$main_view = __DIR__.'/../views/ads/create.php';