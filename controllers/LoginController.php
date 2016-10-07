<?php

if (! Auth::check()){
		header('Location: /login');
		die;
	} 
$main_view = __DIR__.'/../views/users/login.php';