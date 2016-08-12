<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // switch that will run functions and setup variables dependent on what route was accessed
    switch ($request) {
        case "/":
            $main_view= '../views/home.php';
            break;
        case "/login":
			$main_view= '../views/users/login.php';
			verifyLogin();
			checkIfLoggedInLoginPage();
            break;
        //not done
        case "/signup":
            $main_view= '../views/users/signup.php';
            break;
        case "/user/account":
        	checkIfLoggedInUserPage();
			Auth::user();
            $main_view= '../views/users/account.php';
            break;
        case "/logout":
        	Auth::logout();
			$main_view= '../views/partials/navbar.php';
            break;
        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }

    $data['main_view'] = $main_view;

    return $data;
}

extract(pageController());