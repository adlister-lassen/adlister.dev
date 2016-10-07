<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController($dbc)
{

    // defines array to be returned and extracted for view
    $data = [];

    // finds position for ? in url so we can look at the url minus the get variables
    $get_pos = strpos($_SERVER['REQUEST_URI'], '?');

    // if a ? was found, cuts off get variables if not just gives full url
    if ($get_pos !== false)
    {

        $request = substr($_SERVER['REQUEST_URI'], 0, $get_pos);
    }
    else
    {

        $request = $_SERVER['REQUEST_URI'];

    }

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        case '/':
            $main_view = __DIR__.'/../views/home.php';
            break;

    //ads pages
        case '/ads':
            $limit = 6; 
            $max_page_number = getMaxPageNumber($dbc,$limit);
            $page_number = getPageNumber($max_page_number);
            $data['adsToDisplay'] = getAds($dbc,$page_number,$limit);
            $main_view = __DIR__.'/../views/ads/index.php';
            $data['page'] = $page_number;
            $data['max_page'] = $max_page_number;
            break;
        case '/ads/create':
            $errors = createAd($dbc);
            $submitted = isset($_GET['submitted']) ? true : false;
            $data['submitted'] = $submitted;
            $main_view = __DIR__.'/../views/ads/create.php';
            break;
        case '/ads/show':
            $adId = Input::get('id');
            $ad = Ad::find($adId);
            $sellerId = $ad->user_id;
            $data['seller'] = User::find($sellerId);
            $data['ad'] = findAdOrRedirect();
            $main_view = __DIR__.'/../views/ads/show.php';
            break;
        case '/ads/edit':
            $data['ad'] = findAdOrRedirect();
            $main_view = __DIR__.'/../views/ads/edit.php';
            break;

    //users pages
        case '/login':
            $main_view = __DIR__.'/../views/users/login.php';
            break;
        case '/signup':
            $main_view = __DIR__.'/../views/users/signup.php';
            break;
        case '/users/account':
            $main_view = __DIR__.'/../views/users/account.php';
            break;

        case '/users/edit':

            $main_view = __DIR__.'/../views/users/edit.php';
            break;
        default:    // displays 404 if route not specified above
            $main_view = __DIR__.'/../views/404.php';
            break;

    }
    
    $data['main_view'] = $main_view;


    return $data;
}

extract(pageController($dbc));