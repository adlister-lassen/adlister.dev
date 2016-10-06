<?php

require_once __DIR__ . '/../../models/User.php';

$user = new User;
$user->name = 'Bob Bobberson';
$user->email = 'bob@mail.com';
$user->username = "bob";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Beth Betherson';
$user->email = 'amy@mail.com';
$user->username = "beth";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'John Johnson';
$user->email = 'john@mail.com';
$user->username = "john";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Jane Janison';
$user->email = 'jane@mail.com';
$user->username = "jane";
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Stan Stanley';
$user->email = 'stan@mail.com';
$user->username = 'stan';
$user->password = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->name = 'Sarah Sarason';
$user->email = 'sarah@mail.com';
$user->username = 'sarah';
$user->password = $_ENV['USER_PASS'];
$user->save();