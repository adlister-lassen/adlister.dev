<?php
	$limit = 6; 
    $max_page_number = getMaxPageNumber($dbc,$limit);
    $page_number = getPageNumber($max_page_number);
    $data['adsToDisplay'] = getAds($dbc,$page_number,$limit);
    $main_view = __DIR__.'/../views/ads/index.php';
    $data['page'] = $page_number;
    $data['max_page'] = $max_page_number;