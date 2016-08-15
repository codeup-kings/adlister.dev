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
$item->name = "Tortuga";
$item->cost = 0.00;
$item->image_file = "/img/wartortle.png";
$item->description = "Need to get rid of asap";
$item->save();

$item = new Item;
$item->user_id = 5;
$item->name = "Machump";
$item->cost = 372.00;
$item->image_file = "/img/machamp.png";
$item->description = "The championship belt is included";
$item->save();

$item = new Item;
$item->user_id = 6;
$item->name = "Charring Chardaddy";
$item->cost = 1000.00;
$item->image_file = "/img/charizard.png";
$item->description = "Purchase at own risk";
$item->save();


$item = new Item;
$item->user_id = 7;
$item->name = "Flying Squirtle";
$item->cost = 0.00;
$item->image_file = "/img/squirtle.png";
$item->description = "Nice pokemon looking for a new home";
$item->save();

$item = new Item;
$item->user_id = 8;
$item->name = "Why Horn";
$item->cost = 50.00;
$item->image_file = "/img/rhyhorn.png";
$item->description = "His motto is, Lets get horny";
$item->save();

$item = new Item;
$item->user_id = 9;
$item->name = "Mew2.o";
$item->cost = 100000.00;
$item->image_file = "/img/mewtwo.png";
$item->description = "Not sure why it has 6 fingers and 4 toes";
$item->save();

$item = new Item;
$item->user_id = 10;
$item->name = "Come at me Slobro";
$item->cost = 45.00;
$item->image_file = "/img/slobro.png";
$item->description = "Likes confrontation, never initiates the fight";
$item->save();

$item = new Item;
$item->user_id = 11;
$item->name = "Ka dab Dabra";
$item->cost = 45.00;
$item->image_file = "/img/kadabra.png";
$item->description = "Found him on the street dabbing for no reason";
$item->save();

