<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS ads');

$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(1000) NOT NULL,
    price VARCHAR(100) NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    date_created VARCHAR(255) NOT NULL,
    ad_views INT UNSIGNED DEFAULT 0,
    PRIMARY KEY (id)
)';

$dbc->exec($query);