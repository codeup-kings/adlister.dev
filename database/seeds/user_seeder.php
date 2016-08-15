<?php

require_once __DIR__ . '/../../models/User.php';

$user = new User;
$user->name = 'Ash Ketchum';
$user->email = 'garysucks@pokemon.com';
$user->username = "chatchemall";
$user->password = 'password';
$user->save();

$user = new User;
$user->name = 'Gary Oak';
$user->email = 'ashsucks@pokemon.com';
$user->username = "thebesteva";
$user->password = 'password';
$user->save();

$user = new User;
$user->name = 'Professor Oak';
$user->email = 'masteroak@pokemon.com';
$user->username = "theproff";
$user->password = 'password';
$user->save();

$user = new User;
$user->name = 'Brock';
$user->email = 'therock@pokemon.com';
$user->username = "rockandroll";
$user->password = 'password';
$user->save();