<?php

require_once __DIR__ . '/../../models/User.php';

$user = new User;
$user->name = 'Finn Mertens';
$user->email = 'finn@fansofbilly.com';
$user->username = "finn_the_human";
$user->password = 'password';
$user->save();

$user = new User;
$user->name = 'Jake';
$user->email = 'jake@fansofbilly.com';
$user->username = "jake_the_dog";
$user->password = 'password';
$user->save();

$user = new User;
$user->name = 'Simon Petrikov';
$user->email = 'iceking@princessaholicanonymous.com';
$user->username = "ice_king";
$user->password = 'password';
$user->save();

$user = new User;
$user->name = 'Marceline Abadeer';
$user->email = 'marceline@vampirequeen.com';
$user->username = "marceline_abadeer";
$user->password = 'password';
$user->save();