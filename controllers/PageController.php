<?php

require_once __DIR__ . '/../utils/helper_functions.php';
require_once __DIR__ . '/../utils/Auth.php';


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
            include __DIR__.'/../controllers/AdsController.php';
            break;
        case '/ads/create':
            include __DIR__.'/../controllers/CreateAdController.php';
            break;
        case '/ads/show':
            include __DIR__.'/../controllers/ShowAdController.php';
            break;
        case '/ads/edit':
            include __DIR__.'/../controllers/EditAdController.php';
            break;

    //users pages
        case '/login':
            include __DIR__.'/../controllers/LoginController.php';
            break;
        case '/signup':
            include __DIR__.'/../controllers/SignUpController.php';
            break;
        case '/users/account':
            include __DIR__.'/../controllers/AccountController.php';
            break;
        case '/users/edit':
            include __DIR__.'/../controllers/EditUserController.php';
            break;
//DEBUG ONLY
        case '/test':
            include __DIR__.'/../controllers/testController.php';
            break;

        default:    // displays 404 if route not specified above
            $main_view = __DIR__.'/../views/404.php';
            break;

    }
    
    $data['main_view'] = $main_view;


    return $data;
}
var_dump($_SESSION['IS_LOGGED_IN']);
var_dump($_SESSION['LOGGED_IN_ID']);
extract(pageController($dbc));