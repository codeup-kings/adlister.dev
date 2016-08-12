<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.


// takes image from form submission and moves it into the uploads directory
function saveUploadedImage($input_name)
{

    $valid = true;

    // checks if $input_name is in the files super global
    if(isset($_FILES[$input_name]) && $_FILES[$input_name]['name'])
    {

        // checks if there are any errors on the upload from the submission
        if(!$_FILES[$input_name]['error'])
        {

            $tempFile = $_FILES[$input_name]['tmp_name'];
                $image_url = '/img/uploads' . $input_name;
                move_uploaded_file($tempFile, __DIR__ .'/../public' . $image_url);
                return $image_url;
        }

    }
    return null;
}

function checkIfLoggedIn() {
	if (Auth::check()){
		header('Location: /user/account');
		die();
	}
}

function checkIfLoggedInUserPage() {
	if (!Auth::check()){
		header('Location: /login');
		die();
	}
}

function verifyLogin() {
    if (!empty($_POST) && Auth::attempt(Input::get('username'), Input::get('password')))
	{
		header('Location: /user/account');
		die();
	}
}

function addNewUser() {
	if (!empty($_POST) && Input::has('username') && Input::has('email') && Input::has('name') && Input::has('password')) {
		$username = Input::get('username');
		$email = Input::get('email');
		$name = Input::get('name');
		$password = Input::get('password');
		//jake true -> false || 'new@mail.com' null -> false -> true
		if (!User::findByUsernameOrEmail($username) && !User::findByUsernameOrEmail($email)) {
			$user = new User();
			$user->name = $name;
			$user->email = $email;
			$user->username = $username;
			$user->password = $password;
			$user->save();
			verifyLogin();
			die();
		} else {
			if (User::findByUsernameOrEmail($username)) {
				$_SESSION['DUPLICATE_MESSAGE'] = 'That username already exists.';
			}
			if (User::findByUsernameOrEmail($email)) {
				$_SESSION['DUPLICATE_MESSAGE'] = 'That email is already in use by another user.';
			}
		}
	}
}
