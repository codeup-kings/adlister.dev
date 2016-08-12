<?php


require_once __DIR__ . '/../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS items');

$query = 'CREATE TABLE items (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    cost FLOAT UNSIGNED NOT NULL,
    image_file VARCHAR(240) NOT NULL DEFAULT "http://placehold.it/360x240",
    name VARCHAR(240) NOT NULL,
    description TEXT NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);