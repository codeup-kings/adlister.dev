<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.


// takes image from form submission and moves it into the uploads directory
function saveImage($input_name)
{

    $valid = true;

    // checks if $input_name is in the files super global
    if(isset($_FILES[$input_name]) && $_FILES[$input_name]['name'])
    {

        if(!$_FILES[$input_name]['error'])
        {

            $tempFile = $_FILES[$input_name]['tmp_name'];
			$newName = substr($tempFile, 4);
			$fileExtension = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);

			if( $fileExtension != 'jpg' && $fileExtension != 'jpeg' && $fileExtension != 'png' && $fileExtension != 'gif') {
				$valid  = false;
			}

			if ($_FILES[$input_name]["size"] > 5000000) {
				$valid = false;
			}

			if ($valid) {
				$image_url = '/img/uploads' . $newName . '.' . $fileExtension;
				move_uploaded_file($tempFile, __DIR__ . '/../public' . $image_url);
				return $image_url;
			} else {
				return null;
			}
        }

    }
    return null;
}

function uploadImage() {
	if (hasInput('POST')) {
		$item = new Item();
		$item->name = Input::get('name');
		$item->cost = Input::get('cost');
		$item->description = Input::get('description');
		$file =saveImage('image');
		$item->image_file = $file;
		$item->user_id = Auth::user()->id;
		$item->save();
		header('Location: /ads/show?id=' . $item->id);
		die();
	}
}

function hasInput($request_type = 'ALL')
{
	if ($request_type == 'ALL') {
		return !empty(Input::all());
	} else if ($request_type == 'POST') {
		return !empty($_POST);
	} else {
		return !empty($_GET);
	}
}

function checkIfLoggedIn() {
	if (Auth::check()){
		header('Location: /user/account?id=' . Auth::user()->id);
		die();
	}
}

function checkIfLoggedInUserPage() {
	if (!Auth::check()){
		header('Location: /login');
		die();
	}
}

//logs out current user and redirects to login page
function logoutUser() 
{
	Auth::logout();
	header('Location: /login');
	die();
}

function verifyLogin() {
    if (!empty($_POST) && Auth::attempt(Input::get('username'), Input::get('password')))
	{
		header('Location: /user/account?id=' . Auth::user()->id);
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

function deleteItem(){
	$item = Item::find(Input::get('id'));

	if ($item == null)
	{
		$_SESSION['ERROR_MESSAGE'] = 'Post not found';
		header('Location: /ads');
		die();
	}

	if ($item->user_id != Auth::id())
	{
		$_SESSION['ERROR_MESSAGE'] = 'You do not have permission to do that';
		header('Location: /items/show?id=' . $item->id);
		die();
	}
	$item->delete();
	$_SESSION['SUCCESS_MESSAGE'] = 'Post successfully deleted';
	header('Location: /user/account?id=' . Auth::user()->id);
	die();
}


function updateItemWithInputIfExists()
{
	if (hasInput('POST'))
	{
		$item = Item::find( Input::get('id') );
		if ($item->user_id == Auth::user()->id)
		{
			$item->name = Input::get('name');
			$item->cost = Input::get('cost');
			$item->description = Input::get('description');
			$image_file = saveImage('image');
			if ($image_file != null)
			{
				$item->image_file = $image_file;
			}
			$item->save();
			header('Location: /ads');
			die();
		}
	}
}

function updateUserWithInputIfExists()
{
	if (hasInput('POST') && Input::get('id') == Auth::id())
	{
		$user = User::find(Input::get('id'));
		$user->name = Input::get('name');
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->save();
		header('Location: /user/account?id=' . Auth::user()->id);
		die();

	}
}

function convertToMoney($number, $cents = 2)
{

	if (is_numeric($number)) { // a number
		if (!$number) { // zero
			$money = ($cents == 2 ? '0.00' : '0'); // output zero
		} else { // value
			if (floor($number) == $number) { // whole number
				$money = number_format($number, ($cents == 2 ? 2 : 0)); // format
			} else { // cents
				$money = number_format(round($number, 2), ($cents == 0 ? 0 : 2)); // format
			} // integer or decimal
		} // value
		return '$' . $money;
	} // numeric

	if (hasInput('POST')) {
		$item = Item::find(Input::get('id'));
		if ($item->user_id == Auth::user()->id) {
			$item->name = Input::get('name');
			$item->cost = Input::get('cost');
			$item->description = Input::get('description');
			$image_file = saveImage('image');
			if ($image_file != null) {
				$item->image_file = $image_file;
			}
			$item->save();
			header('Location: /ads');
			die();
		}
	}
}



