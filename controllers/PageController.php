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
			$data['items'] = Item::featuredItems();
            $main_view = '../views/home.php';
            break;
        case "/login":
			$main_view = '../views/users/login.php';
			verifyLogin();
			checkIfLoggedIn();
            break;
        //almost done
        case "/signup":
            checkIfLoggedIn();
			addNewUser();
        	$main_view = '../views/users/signup.php';
            break;
        case "/user/account":
        	checkIfLoggedInUserPage();
			$data['user'] = User::find(Input::get('id'));
			$data['items'] = $data['user']->showItems();
            $main_view= '../views/users/account.php';
            break;
		case "/user/edit":
			checkIfLoggedInUserPage();
			updateUserWithInputIfExists();
			$data['user'] = User::find(Input::get('id'));
			$main_view = '../views/users/edit.php';
			break;
		case "/logout":
        	Auth::logout();
			header('Location: /');
			die();
            break;
		case "/ads":
			$data['items'] = Item::all();
			$main_view = '../views/ads/index.php';
			break;
		case "/ads/create":
			uploadImage();
			$main_view = '../views/ads/create.php';
			break;
		case "/ads/edit":
			$data['item'] = Item::find(Input::get('id'));
            updateItemWithInputIfExists();
			$main_view = '../views/ads/edit.php';
			break;
		case "/ads/show":
			$data['item'] = Item::find(Input::get('id'));
			$main_view = '../views/ads/show.php';
			break;
		case "/ads/delete":
			deleteItem();
			break;
        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }

    $data['main_view'] = $main_view;

    return $data;
}

extract(pageController());