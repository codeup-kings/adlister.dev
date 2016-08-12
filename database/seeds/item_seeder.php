<?php

require_once __DIR__ . '/../../models/Item.php';

$item = new Item;
$item->user_id = 1;
$item->name = 'Mighty Meoth';
$item->cost = 50.00;
$item->image_file = "/img/meoth.png";
$item->description = "Modded to not have a W in it's name.";
$item->save();

$item = new Item;
$item->user_id = 2;
$item->name = 'Regular Mew';
$item->cost = 100.00;
$item->image_file = "/img/mew.png";
$item->description = "Just another boring Mew. Buy it...please...";
$item->save();

$item = new Item;
$item->user_id = 3;
$item->name = 'Latest model Moltres';
$item->cost = 150.00;
$item->image_file = "/img/moltres.png";
$item->description = "Includes fan to avoid heat stroke.";
$item->save();

$item = new Item;
$item->user_id = 4;
$item->name = "Flying Squirtle";
$item->cost = 0.00;
$item->image_file = "/img/wartortle.png";
$item->description = "Squirtle with wings in it's head";
$item->save();